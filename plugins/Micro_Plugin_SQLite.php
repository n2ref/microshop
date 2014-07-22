<?php

define('PLUGIN_SQLITE_IS_ACTIVE', true);
define('PLUGIN_SQLITE_DB_PATH',   'db.sq3');


/**
 * Class Micro_Plugin_SQLite
 */
class Micro_Plugin_SQLite {

    public static $is_active = PLUGIN_SQLITE_IS_ACTIVE;

    /**
     * Дескриптор подключения к базе
     * @var PDO
     */
    protected $db;

    /**
     * Экзэмпляр последнего запроса
     * @var PDOStatement
     */
    protected $last_stmt;


    /**
     * Подключение к базе
     *
     * @param string $basename Название базы данных
     * @param array $options Переменные их значения
     *
     * @throws Exception Error connect to database
     */
    public function connect($basename = PLUGIN_SQLITE_DB_PATH, $options = array()) {

        $is_create_db = ! file_exists($basename);

        $link = new PDO("sqlite:$basename");

        if ( ! $link) throw new Exception("Error connect to database: " . $link->errorinfo());

        if ($is_create_db) chmod($basename, 0777);

        $this->db = $link;

        if ( ! empty($options)) {
            foreach ($options as $name=>$value) {
                $this->query("PRAGMA {$name} = {$value}");
            }
        }
    }


    /**
     * Вызов метода в дискрипторе подключения
     *
     * @param string $method_name
     *     Название метода
     * @param array $args
     *     Входные аргументы для метода переданном в $name
     *
     * @return mixed
     *     Значение возвращаемое вызванным методам дискриптора
     *
     * @throws Exception Запрашиваемый метод не найден
     */
    public function __call($method_name, $args) {

        if (method_exists($this->db, $method_name)) {
            return call_user_func_array(array($this->db, $method_name), $args);

        } else {
            throw new Exception("Method '$method_name' not exists");
        }
    }


    /**
     * Заменяет символ '?' на экранированную строку
     *
     * @param string $sql Строка запроса
     * @param string $param Параметр для экранирования
     *
     * @return string Экранированная строка запроса
     */
    public function quoteInto($sql, $param) {

        $quote_param = $this->quote($param);
        return str_replace('?', $quote_param, $sql);
    }


    /**
     * Выполняет запрос
     *
     * @param string $sql
     *      Строка содержащая запрос к базе
     * @param string|array $bind_params
     *      Параметры входящие в запрос каторые
     *      нужно заэкранирывать
     *
     * @return bool
     *      Возвращает TRUE в случае успешного завершения
     *      или FALSE в случае возникновения ошибки.
     */
    public function query($sql, $bind_params = '') {

        $stmt = $this->db->prepare($sql);

        if ($stmt) {
            if ($bind_params) $this->bindValue($stmt, $bind_params);
            $result = $stmt->execute();

            if ($result === false) trigger_error($this->db->errorinfo(), E_USER_WARNING);

            $this->last_stmt = $stmt;
            return $result;
        }

        $this->last_stmt = $stmt;
        return false;
    }


    /**
     * Связывает параметр с заданным значением
     *
     * @param mixed $stmt
     *      Экземпляр запроса
     * @param string|array $values
     *      Значение или массив значений
     *      которые нужно привязать к запросу
     *
     * @return bool
     *      Возвращает TRUE в случае успешного завершения
     *      или FALSE в случае возникновения ошибки.
     */
    private function bindValue($stmt, $values) {

        $num_parameter = 1;

        if (is_string($values) || is_numeric($values)) {
            $stmt->bindValue($num_parameter, $values, PDO::PARAM_STR);

        } elseif (is_array($values)) {
            foreach ($values as $key=>$value) {
                if (is_string($key)) {
                    $stmt->bindValue(':' . $key, $value, PDO::PARAM_STR);
                } else {
                    $stmt->bindValue($num_parameter++, $value, PDO::PARAM_STR);
                }
            }
        }

        return true;
    }


    /**
     * Добавление записи или массива записей
     * в указанную таблицу
     *
     * @param string $table Название таблицы для добавления в нее данных
     * @param array $data Данные для добавления в таблицу
     *
     * @return int|bool Идентификатор добавленной записи
     */
    public function insert($table, array $data) {

        if ( ! trim($table) || empty($data)) {
            return false;
        }

        $query = $this->buildInsert($table, $data);

        $is_update = $this->query($query['sql'], $query['params']);
        $last_id = $this->lastInsertId();

        return $is_update ? $last_id : false;
    }


    /**
     * Добавление записи или массива записей
     * в указанную таблицу
     *
     * @param string $table Название таблицы для добавления в нее данных
     * @param array $data Данные для добавления в таблицу
     * @param string $where Условие для обновления
     *
     * @return int|bool Количество обновленных записей или FALSE в стлучае ошибки.
     */
    public function update($table, array $data, $where = '') {

        if ( ! trim($table) || empty($data)) {
            return false;
        }

        $query = $this->buildUpdate($table, $data, $where);

        $is_update = $this->query($query['sql'], $query['params']);
        $affected_rows = $this->affectedRows();

        return $is_update ? $affected_rows : false;
    }


    /**
     * Формирование insert запроса
     *
     * @param string $table
     *      Название таблицы
     * @param array $data
     *      Массив данных для добавления в таблицу
     *
     * @return array
     *      Массив со сформированным запросам на добавление
     *      и параметрами к нему
     */
    private function buildInsert($table, array $data) {

        if ( ! strstr($table, '.')) $table = '`' . $table . '`';

        $query_data = array();

        $query_data['fields']       = array();
        $query_data['value_fields'] = array();
        $query_data['params']       = array();

        foreach ($data as $name=>$value) {
            if (is_string($value) || is_numeric($value)) {
                $query_data['fields'][]       = '`' . trim($name, ' `') . '`';
                $query_data['value_fields'][] = '?';
                $query_data['params'][]       = $value;
            }
        }

        $query = array();
        if ( ! empty($query_data['fields'])) {
            $implode_fields       = implode(', ', $query_data['fields']);
            $implode_value_fields = implode(', ', $query_data['value_fields']);

            $query = array(
                'sql'    => "INSERT INTO {$table} ({$implode_fields}) VALUES ({$implode_value_fields})",
                'params' => $query_data['params']
            );
        }

        return $query;
    }



    /**
     * Формирование insert запроса
     *
     * @param string $table
     *      Название таблицы
     * @param array $data
     *      Массив данных для добавления в таблицу
     * @param string $where
     *      Услокие для обновления
     *
     * @return array
     *      Массив со сформированным запросам на добавление
     *      и параметрами к нему
     */
    private function buildUpdate($table, array $data, $where = '') {

        if ( ! strstr($table, '.')) $table = '`' . $table . '`';

        $query_data = array();

        $query_data['fields'] = array();
        $query_data['params'] = array();

        foreach ($data as $name=>$value) {
            if (is_string($value) || is_numeric($value)) {
                $query_data['fields'][] = '`' . trim($name, ' `') . '` = ?';
                $query_data['params'][] = $value;
            }
        }

        $query = array();
        if ( ! empty($query_data['fields'])) {
            $implode_fields = implode(', ', $query_data['fields']);

            $sql = "UPDATE {$table} SET {$implode_fields}";

            if ($where) $sql .= ' WHERE ' . $where;

            $query = array(
                'sql'    => $sql,
                'params' => $query_data['params']
            );
        }

        return $query;
    }


    /**
     * Выключает режим автоматической фиксации транзакции.
     * @return bool
     *      Возвращает TRUE в случае успешного завершения
     *      или FALSE в случае возникновения ошибки.
     */
    public function beginTransaction() {

        return $this->db->beginTransaction();
    }


    /**
     * Фиксирует транзакцию, возвращая соединение с базой данных
     * в режим автоматической фиксации до тех пор,
     * пока следующий вызов PDO::beginTransaction() не начнет новую транзакцию.
     *
     * @return bool
     *      Возвращает TRUE в случае успешного завершения
     *      или FALSE в случае возникновения ошибки.
     */
    public function commit() {

        return $this->db->commit();
    }


    /**
     * Откатывает изменения в базе данных сделанные в рамках текущей транзакции,
     * которая была создана методом PDO::beginTransaction().
     * Если активной транзакции нет, будет выброшено исключение PDOException.
     *
     * @return bool
     *      Возвращает TRUE в случае успешного завершения
     *      или FALSE в случае возникновения ошибки.
     */
    public function rollback() {

        return $this->db->rollBack();
    }


    /**
     * Возващает результат запроса со всеми записями
     *
     * @param string $sql
     *      Запрос каторый необходимо выполнить
     * @param string|array $bind_params
     *      Параметры каторые нужно привязать к запросу
     *
     * @return array|bool
     *      Результирующий массив данных,
     *      либо false в случае ошибки
     */
    public function fetchAll($sql, $bind_params = '') {

        $stmt = $this->db->prepare($sql);

        if ($stmt) {
            if ($bind_params) $this->bindValue($stmt, $bind_params);
            $result = $stmt->execute();

            if ($result === false) {
                trigger_error($this->db->errorinfo(), E_USER_WARNING);
                return false;
            }

            $this->last_stmt = $stmt;
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        $this->last_stmt = $stmt;
        return false;
    }


    /**
     * Возващает результат запроса с первой строкой
     * из результата запроса
     *
     * @param string $sql
     *      Запрос каторый необходимо выполнить
     * @param string|array $bind_params
     *      Параметры каторые нужно привязать к запросу
     *
     * @return array|bool
     *      Результирующий массив данных,
     *      либо false в случае ошибки
     */
    public function fetchRow($sql, $bind_params = '') {

        $stmt = $this->db->prepare($sql);

        if ($stmt) {
            if ($bind_params) $this->bindValue($stmt, $bind_params);
            $result = $stmt->execute();

            if ($result === false) {
                trigger_error($this->db->errorinfo(), E_USER_WARNING);
                return false;
            }

            $this->last_stmt = $stmt;
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        $this->last_stmt = $stmt;
        return false;
    }


    /**
     * Возващает результат запроса с первым столбцом
     * из результата запроса
     *
     * @param string $sql
     *      Запрос который необходимо выполнить
     * @param string|array $bind_params
     *      Параметры каторые нужно привязать к запросу
     * @param int $column_number
     *      Параметры каторые нужно привязать к запросу
     *
     * @return array|bool
     *      Результирующий массив данных,
     *      либо false в случае ошибки
     */
    public function fetchCol($sql, $bind_params = '', $column_number = 1) {

        $stmt = $this->db->prepare($sql);

        if ($stmt) {
            if ($bind_params) $this->bindValue($stmt, $bind_params);
            $result = $stmt->execute();

            if ($result === false) {
                trigger_error($this->db->errorinfo(), E_USER_WARNING);
                return false;
            }

            $column        = array();
            $column_number = $column_number > 0
                ? $column_number - 1
                : 0;

            while ($col = $stmt->fetchColumn($column_number)) {
                $column[] = $col;
            }

            $this->last_stmt = $stmt;
            return $column;
        }

        $this->last_stmt = $stmt;
        return false;
    }


    /**
     * Возващает результат запроса в виде одномерного массива
     * ключами которого выступает первое поле из запроса, а значениями второе поле
     *
     * @param string $sql
     *      Запрос каторый необходимо выполнить
     * @param string|array $bind_params
     *      Параметры каторые нужно привязать к запросу
     *
     * @return array|bool
     *      Результирующий массив данных,
     *      либо false в случае ошибки
     */
    public function fetchPairs($sql, $bind_params = '') {

        $stmt = $this->db->prepare($sql);

        if ($stmt) {
            if ($bind_params) $this->bindValue($stmt, $bind_params);
            $result = $stmt->execute();

            if ($result === false) {
                trigger_error($this->db->errorinfo(), E_USER_WARNING);
                return false;
            }

            $pairs = array();

            while ($tmp = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $pairs[current($tmp)] = next($tmp);
            }

            $this->last_stmt = $stmt;
            return $pairs;
        }

        $this->last_stmt = $stmt;
        return false;
    }


    /**
     * Возващает резельтат запроса с первым значением поля, из первой строки запроса
     *
     * @param string $sql
     *      Запрос каторый необходимо выполнить
     * @param string|array $bind_params
     *      Параметры каторые нужно привязать к запросу
     *
     * @return string
     *      Первое значение из запроса,
     *      либо false в случае ошибки
     */
    public function fetchOne($sql, $bind_params = '') {

        $stmt = $this->db->prepare($sql);

        if ($stmt) {

            if ($bind_params) $this->bindValue($stmt, $bind_params);
            $result = $stmt->execute();

            if ($result === false) {
                trigger_error($this->db->errorinfo(), E_USER_WARNING);
                return false;
            }

            $this->last_stmt = $stmt;
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            return is_array($row)
                ? current($row)
                : '';
        }

        $this->last_stmt = $stmt;
        return false;
    }


    /**
     * Возвращает количество строк,
     * которые были затронуты в ходе выполнения последнего запроса DELETE, INSERT или UPDATE,
     * запущенного соответствующим объектом
     *
     * @return int Количество строк измененных последним запросом
     */
    public function affectedRows() {
        return $this->last_stmt->rowCount();
    }


    /**
     * Возвращает ID последней вставленной строки либо последнее значение,
     * которое выдал объект последовательности.
     *
     * @param string $table_name
     *      Имя объекта последовательности, который должен выдать ID.
     *
     * @return string
     *      Вернет строку представляющую ID последней добавленной в базу записи.
     */
    public function lastInsertId($table_name = null) {
        return $this->db->lastInsertId($table_name);
    }


    /**
     * Закрытие соединения с базой
     * @return void
     */
    public function close() {

        $this->db = null;
    }
} 