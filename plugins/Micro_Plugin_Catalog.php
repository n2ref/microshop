<?php


define('CATALOG_IS_ACTIVE',        false);
define('CATALOG_MENU_POSITION',    1);
define('CATALOG_PHOTOS_ON_PAGE',   20);

define('CATALOG_USE_CACHE',        true);
define('CATALOG_CACHE_DIR',        './cache');

define('CATALOG_MAX_WIDTH_SMALL_IMAGE',   205);
define('CATALOG_MAX_HEIGHT_SMALL_IMAGE',  257);
define('CATALOG_MAX_WIDTH_BIG_IMAGE',     640);
define('CATALOG_MAX_HEIGHT_BIG_IMAGE',    800);

define('CATALOG_SQLITE_DB_PATH',   'db.sq3');





/***************************
 *====== HTML секция ======*
 **************************/


/**
 * Каталог
 */
Micro_Init::$_components['Micro_Plugin_Catalog'] = array(
    'categories' => array(
        'tpl' => <<<HTML
            <!-- BEGIN categories -->
            <div id="categories_wrapper">
                <!-- BEGIN category -->
                <div class="category">
                    <div class="image-container">
                        <a href="[CATEGORY_URL]">
                            <img class="photo_img" src="[CATEGORY_PHOTO_URL]" alt="[CATEGORY_NAME]" title="[CATEGORY_NAME]"/>
                        </a>
                    </div>
                    <div class="title">
                        [CATEGORY_NAME]
                    </div>
                </div>
                <!-- END category -->
                <div class="clearfix"></div>
            </div>
            <!-- END categories -->
            <div class="clearfix"></div>
HTML
        ,
        'style' => <<<HTML
            <style>
                .category {
                    overflow: hidden;
                    float: left;
                    text-align: center;
                    width: 205px;
                    height: 256px;
                    margin-bottom: 20px;
                    margin-left: 20px;
                    border: 1px solid #787878;
                    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
                    background: #DEDEDE;
                    background: linear-gradient(to top, #DEDEDE, #ffffff, #ffffff, #ffffff);
                }
                .category .title {
                    background-color: rgba(255, 255, 255, 0.57);
                    color: #333333;
                    text-shadow: 1px 1px 0 #c5c5c5;
                    font-weight: bold;
                    height: 30px;
                    margin-top: -30px;
                    overflow: hidden;
                    position: relative;
                }
                .image-container a:focus,
                .image-container a:active,
                .image-container a:hover {
                    text-decoration: none;
                }
                #albums {
                    list-style: none outside none;
                    margin: 0 0 20px;
                    padding: 0;
                }
                #albums li {
                    background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAcklEQVQ4je3TMQqDYAyG4ceh4I08lBeqmw5CXTr3As5eQPAqDv6DaMGGv6OBd0jgewmEQIFyx0OwejR4Jj6oIoL20JdpdkWH+psgUm+YMOAVZEhZS8YGC8wZgvkvgjFDMJJ3hfYWbNnjM/1Kk7Knd45QrNe2LfSKk3ZjAAAAAElFTkSuQmCC");
                    background-repeat: no-repeat;
                    background-position: 1px 50%;
                    text-shadow: 0 1px 0 #FFFFFF;
                    padding: 8px 10px 8px 24px;
                }
                @media only screen and (min-width: 768px) and (max-width: 991px) {
                    .category {
                        margin-left: 25px;
                        margin-bottom: 25px;
                    }
                }
                @media only screen and (min-width: 480px) and (max-width: 767px) {
                    .category { margin-left: 10px; }
                    #sidebar { width: 415px; }
                    #albums { display: none; }
                    #combo-albums { display: inline; }
                }
                @media only screen and (max-width: 480px) {
                    .category { margin-left: 25px; }
                    #sidebar { width: 250px; }
                    #albums { display: none; }
                    #combo-albums { display: inline; }
                }
            </style>
HTML
        ,
        'title' => array(
            'ru' => 'Категории',
            'en' => 'Categories'
        ),
        'meta_desc' => array(
            'ru' => '',
            'en' => ''
        ),
        'meta_keys' => array(
            'ru' => '',
            'en' => ''
        )
    ),
    'category' => array(
        'tpl' => <<<HTML

            <!-- BEGIN items -->
            <div id="items-wrapper">
                <!-- BEGIN item -->
                <div class="item">
                    <div class="image-container">
                        <a href="[ITEM_URL]">
                            <img class="photo_img" src="[ITEM_PHOTO_URL]" alt="[ITEM_NAME]" title="[ITEM_NAME]"/>
                        </a>
                    </div>
                    <div class="title">
                        [ITEM_NAME]
                    </div>
                </div>
                <!-- END item -->
                <div class="clearfix"></div>

                <!-- BEGIN pagination -->
                <div id="pagination">
                    <ul class="pagebar">
                        [PAGEBAR]
                    </ul>
                </div>
                <!-- END pagination -->
            </div>
            <!-- END items -->
            <div class="clearfix"></div>
HTML
        ,
        'style' => <<<HTML
            <style>
                .item {
                    overflow: hidden;
                    float: left;
                    text-align: center;
                    width: 205px;
                    height: 256px;
                    margin-bottom: 20px;
                    margin-left: 20px;
                    border: 1px solid #787878;
                    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
                    background: #DEDEDE;
                    background: linear-gradient(to top, #DEDEDE, #ffffff, #ffffff, #ffffff);
                }
                .item .title {
                    background-color: rgba(255, 255, 255, 0.55);
                    color: #333333;
                    font-weight: bold;
                    height: 50px;
                    margin-top: -52px;
                    line-height: 16px;
                    overflow: hidden;
                    padding-top: 3px;
                    position: relative;
                    text-shadow: 1px 1px 0 #c5c5c5;
                }
                .image-container { height: 256px; }
                .image-container img { min-width: 205px; }
                .image-container a:focus,
                .image-container a:active,
                .image-container a:hover {
                    text-decoration: none;
                }
                #albums {
                    list-style: none outside none;
                    margin: 0 0 20px;
                    padding: 0;
                }
                #albums li {
                    background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAcklEQVQ4je3TMQqDYAyG4ceh4I08lBeqmw5CXTr3As5eQPAqDv6DaMGGv6OBd0jgewmEQIFyx0OwejR4Jj6oIoL20JdpdkWH+psgUm+YMOAVZEhZS8YGC8wZgvkvgjFDMJJ3hfYWbNnjM/1Kk7Knd45QrNe2LfSKk3ZjAAAAAElFTkSuQmCC");
                    background-repeat: no-repeat;
                    background-position: 1px 50%;
                    text-shadow: 0 1px 0 #FFFFFF;
                    padding: 8px 10px 8px 24px;
                }
                #combo-albums {
                    display: none;
                    width: 100%;
                }
                @media only screen and (min-width: 768px) and (max-width: 991px) {
                    #items_wrapper { width: 480px; }
                    .item {
                        margin-left: 25px;
                        margin-bottom: 25px;
                    }
                }
                @media only screen and (min-width: 480px) and (max-width: 767px) {
                    #items_wrapper { width: 435px; }
                    #sidebar { width: 415px; }
                    .item { margin-left: 10px; }
                    #albums { display: none; }
                    #combo-albums { display: inline; }
                }
                @media only screen and (max-width: 480px) {
                    #items_wrapper { width: 250px; }
                    .item { margin-left: 25px; }
                    #sidebar { width: 250px; }
                    #albums { display: none; }
                    #combo-albums { display: inline; }
                }
            </style>
HTML
        ,
        'meta_desc' => array(
            'ru' => '',
            'en' => ''
        ),
        'meta_keys' => array(
            'ru' => '',
            'en' => ''
        )
    ),
    'item' => array(
        'tpl' => <<<HTML
            <!-- BEGIN photo -->
            <div class="photo">
                <img class="photo_img" src="[PHOTO_URL]" alt="[ITEM_NAME]" title="[ITEM_NAME]"/>
            </div>
            [ITEM_DESCRIPTION]
            <!-- END photo -->

            <div class="clearfix"></div>
HTML
    ,
        'style' => <<<HTML
            <style>
                .photo {
                    margin-bottom: 20px;
                    text-align: center;
                }
                #albums {
                    list-style: none outside none;
                    margin: 0 0 20px;
                    padding: 0;
                }
                #albums li {
                    background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAcklEQVQ4je3TMQqDYAyG4ceh4I08lBeqmw5CXTr3As5eQPAqDv6DaMGGv6OBd0jgewmEQIFyx0OwejR4Jj6oIoL20JdpdkWH+psgUm+YMOAVZEhZS8YGC8wZgvkvgjFDMJJ3hfYWbNnjM/1Kk7Knd45QrNe2LfSKk3ZjAAAAAElFTkSuQmCC");
                    background-repeat: no-repeat;
                    background-position: 1px 50%;
                    text-shadow: 0 1px 0 #FFFFFF;
                    padding: 8px 10px 8px 24px;
                }
                #combo-albums {
                    display: none;
                    width: 100%;
                }
                @media only screen and (min-width: 768px) and (max-width: 991px) {
                    #photo_wrapper { width: 480px; }
                    .photo {
                        margin-left: 25px;
                        margin-bottom: 25px;
                    }
                }
                @media only screen and (min-width: 480px) and (max-width: 767px) {
                    #photo_wrapper { width: 435px; }
                    .photo { margin-left: 10px; }
                    #sidebar { width: 415px; }
                    #albums { display: none; }
                    #combo-albums { display: inline; }
                }
                @media only screen and (max-width: 480px) {
                    #photo_wrapper { width: 250px; }
                    .photo { margin-left: 25px; }
                    #sidebar { width: 250px; }
                    #albums { display: none; }
                    #combo-albums { display: inline; }
                }
            </style>
HTML
        ,
        'meta_desc' => array(
            'ru' => '',
            'en' => ''
        ),
        'meta_keys' => array(
            'ru' => '',
            'en' => ''
        ),
    )
);



/*************************
 *====== PHP секция =====*
 ************************/



/**
 * Class Micro_Plugin_Catalog
 */
class Micro_Plugin_Catalog extends Micro_Plugin_Abstract {

    public static $is_active = CATALOG_IS_ACTIVE;

    protected $db;
    protected $lang;

    public function __construct() {

        if ( ! file_exists(CATALOG_SQLITE_DB_PATH)) {
            $catalog = new Micro_Plugin_Catalog();
            $catalog->install();
        }

        $matches = array();
        preg_match('~^([^?]+)(?|)~', $_SERVER['REQUEST_URI'], $matches);

        if (trim($matches[1], '/') == '') {
            $languages = explode(',', LANGUAGES);
            $languages = array_map('trim', $languages);

            $lang_detect  = new LangDetect();
            $related_lang = $lang_detect->getBestMatch(DEFAULT_LANG, $languages);

            header('Location: /' . $related_lang);
            exit;
        }


        $this->lang = $this->getLang();


        $this->db = new Micro_Plugin_SQLite();
        $this->db->connect(CATALOG_SQLITE_DB_PATH, array(
            'foreign_keys' => 'ON'
        ));
    }


    /**
     * @return stdClass|string
     */
    public function index() {

        $params  = array();
        $matches = array();
        preg_match('~^([^?]+)(?|)~', $_SERVER['REQUEST_URI'], $matches);

        // Категории
        if (preg_match('~^/(?P<lang>[a-z]{2}(|/))$~', $matches[1])) {
            return $this->categories();

        // Категория
        } elseif (preg_match('~^/(?P<lang>[a-z]{2})/(?P<category>[a-z0-9\-]+)$~', $matches[1], $params)) {
            return $this->category($params);

        // Объект
        } elseif (preg_match('~^/(?P<lang>[a-z]{2})/(?P<category>[a-z0-9\-]+)/(?P<item>[0-9]+)$~', $matches[1], $params)) {
            return $this->item($params);

        // Фото
        } elseif (preg_match('~^/photo/(?P<photo>[0-9]+)$~', $matches[1], $params)) {
            return $this->photo($params);
        }
    }


    /**
     * Установка плагина
     */
    public function install() {

        $this->db->query("
            CREATE TABLE catalog_img_categories (
                id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
                title VARCHAR(255),
                title_en VARCHAR(255),
                is_active_sw CHAR(2) DEFAULT 'Y' NOT NULL,
                seq INT DEFAULT NULL,
                guid varchar(255) DEFAULT NULL
            );
        ");
        $this->db->query("
            CREATE TABLE catalog_img_items (
                id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
                category_id INTEGER NOT NULL,
                title VARCHAR(255) DEFAULT NUL,
                title_en varchar(255) DEFAULT NULL,
                description VARCHAR(255) DEFAULT NULL,
                description_en varchar(255) DEFAULT NULL,
                is_active_sw CHAR(2) DEFAULT 'Y' NOT NULL,
                seq INT DEFAULT NULL,
                FOREIGN KEY ( category_id ) REFERENCES catalog_img_categories ( id ) ON DELETE CASCADE ON UPDATE CASCADE
            );
        ");
        $this->db->query("
            CREATE TABLE catalog_img_items_files (
                id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
                ref_id INTEGER NOT NULL,
                image BLOB NOT NULL,
                FOREIGN KEY ( ref_id ) REFERENCES catalog_img_items ( id ) ON DELETE CASCADE ON UPDATE CASCADE
            );
        ");
    }


    /**
     * @return stdClass
     */
    public function categories() {

        $tpl = new Micro_Templater();
        $tpl->setTemplate($this->getComponent('Micro_Plugin_Catalog', 'categories', 'tpl'));


        $categories = $this->db->fetchAll("
            SELECT id,
                   title,
                   title_en,
                   guid,
                   file_id
            FROM catalog_img_categories
            WHERE is_active_sw = 'Y'
            ORDER BY seq
        ");

        foreach ($categories as $category) {
            $tpl->categories->category->assign('[CATEGORY_NAME]',      $this->lang == 'en' ? $category['title_en'] : $category['title']);
            $tpl->categories->category->assign('[CATEGORY_URL]',       "/{$this->lang}/" . $category['guid']);
            $tpl->categories->category->assign('[CATEGORY_PHOTO_URL]', '/photo/' . $category['file_id'] . '?size=small');

            if ($category != end($categories)) $tpl->categories->category->reassign();
        }


        $page = new stdClass();
        $page->title    = $this->getComponent('Micro_Plugin_Catalog', 'categories', 'title');
        $page->style    = $this->getComponent('Micro_Plugin_Catalog', 'categories', 'style');
        $page->content  = $tpl->parse();
        return $page;
    }


    /**
     * @param array $params
     * @return int|stdClass
     */
    public function category($params) {

        $tpl = new Micro_Templater();
        $tpl->setTemplate($this->getComponent('Micro_Plugin_Catalog', 'category', 'tpl'));

        $page     = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $category = $this->db->fetchRow("
            SELECT id,
                   title,
                   title_en,
                   file_id,
                   guid
            FROM catalog_img_categories
            WHERE guid = ?
              AND is_active_sw = 'Y'
        ", $params['category']);

        if ( ! empty($category)) {
            $items = $this->db->fetchAll("
                    SELECT i.id,
                           i.title,
                           i.title_en,
                           (SELECT f.id
                            FROM catalog_img_items_files AS f
                            WHERE f.ref_id = i.id
                            LIMIT 1) AS file_id
                    FROM catalog_img_items AS i
                    WHERE i.category_id = ?
                      AND i.is_active_sw = 'Y'
                    LIMIT ?, ?
                ", array(
                    $category['id'],
                    ($page * CATALOG_PHOTOS_ON_PAGE) - CATALOG_PHOTOS_ON_PAGE,
                    CATALOG_PHOTOS_ON_PAGE
                )
            );


            // хлебные крошки
            $this->addTaxonomy('Категории', "/{$this->lang}");
            $this->addTaxonomy(
                $this->lang == 'en' ? $category['title_en'] : $category['title'],
                "/{$this->lang}/{$category['guid']}"
            );


            foreach ($items as $item) {
                $tpl->items->item->assign('[ITEM_NAME]',      $this->lang == 'en' ? $item['title_en'] : $item['title']);
                $tpl->items->item->assign('[ITEM_URL]',       "/{$this->lang}/{$category['guid']}/{$item['id']}");
                $tpl->items->item->assign('[ITEM_PHOTO_URL]', "/photo/{$item['file_id']}?size=small");

                if ($item != end($items)) $tpl->items->item->reassign();
            }


            $count_items = $this->db->fetchOne("
                SELECT COUNT(*)
                FROM catalog_img_items AS i
                WHERE i.category_id = ?
                  AND i.is_active_sw = 'Y'
              ", $category['id']
            );
            $page_count = ceil($count_items / CATALOG_PHOTOS_ON_PAGE);

            if ($page_count > 1) {
                $pagebar = Micro_Tools::paginate(
                    '',
                    "/{$this->lang}/{$category['guid']}?page",
                    ceil($count_items / CATALOG_PHOTOS_ON_PAGE),
                    $page,
                    3
                );
                $tpl->items->pagination->assign('[PAGEBAR]', $pagebar);

            } else {
                $tpl->items->pagination->assign('[PAGEBAR]', '');
            }



            $page = new stdClass();
            $page->title     = $this->lang == 'en' ? $category['title_en'] : $category['title'];
            $page->style     = $this->getComponent('Micro_Plugin_Catalog', 'category', 'style');
            $page->meta_desc = $this->getComponent('Micro_Plugin_Catalog', 'category', 'meta_desc');
            $page->meta_keys = $this->getComponent('Micro_Plugin_Catalog', 'category', 'meta_keys');
            $page->content   = $tpl->parse();
            return $page;

        } else {
            return $this->page404();
        }
    }


    /**
     * @param array $params
     * @return stdClass|string
     */
    public function item($params) {

        $tpl = new Micro_Templater();
        $tpl->setTemplate($this->getComponent('Micro_Plugin_Catalog', 'item', 'tpl'));

        $item = $this->db->fetchRow("
            SELECT i.id,
                   i.title,
                   i.title_en,
                   i.description,
                   i.description_en,
                   c.guid     AS category_guid,
                   c.title    AS category_title,
                   c.title_en AS category_title_en
            FROM catalog_img_items AS i
                INNER JOIN catalog_img_categories AS c ON c.id = i.category_id
            WHERE i.id = ?
              AND c.guid = ?
              AND i.is_active_sw = 'Y'
              AND c.is_active_sw = 'Y'
        ", array(
            $params['item'],
            $params['category']
        ));


        if ( ! empty($item)) {

            // хлебные крошки
            $this->addTaxonomy('Категории', "/{$this->lang}");
            $this->addTaxonomy(
                $this->lang == 'en' ? $item['category_title_en'] : $item['category_title'],
                "/{$this->lang}/{$item['category_guid']}"
            );
            $this->addTaxonomy(
                $this->lang == 'en' ? $item['title_en'] : $item['title'],
                "/{$this->lang}/{$item['category_guid']}/{$item['id']}"
            );


            $files = $this->db->fetchAll("
                SELECT f.id
                FROM catalog_img_items_files AS f
                WHERE f.ref_id = ?
                GROUP BY f.image
                ORDER BY f.id
            ", $item['id']);

            foreach ($files as $key=>$file) {
                $tpl->photo->assign('[ITEM_NAME]', $this->lang == 'en' ? $item['title_en'] : $item['title']);
                $tpl->photo->assign('[PHOTO_URL]', '/photo/' . $file['id']);

                $description = $key == 0
                    ? '<p>' . ($this->lang == 'en' ? $item['description_en'] : $item['description']) . '</p>'
                    : '';


                $tpl->photo->assign('[ITEM_DESCRIPTION]', $description);

                if ($file != end($files)) $tpl->photo->reassign();
            }


            $page = new stdClass();
            $page->title     = $this->lang == 'en' ? $item['title_en'] : $item['title'];
            $page->style     = $this->getComponent('Micro_Plugin_Catalog', 'item', 'style');
            $page->meta_desc = $this->getComponent('Micro_Plugin_Catalog', 'item', 'meta_desc');
            $page->meta_keys = $this->getComponent('Micro_Plugin_Catalog', 'item', 'meta_keys');
            $page->content   = $tpl->parse();
            return $page;

        } else {
            return $this->page404();
        }
    }


    /**
     * Показ фото
     * @param array $params
     * @return string|void
     */
    public function photo($params) {

        $photo = $this->db->fetchOne("
                SELECT f.image
                FROM catalog_img_items_files AS f
                    INNER JOIN catalog_img_items AS i ON i.id = f.ref_id
                    INNER JOIN catalog_img_categories AS c ON c.id = i.category_id
                WHERE i.is_active_sw = 'Y'
                  AND c.is_active_sw = 'Y'
                  AND f.id = ?
            ", $params['photo']
        );


        if ($photo) {
            try {
                if (defined('XGALLERY_USE_CACHE') && CATALOG_USE_CACHE) {

                    if ( ! is_dir(CATALOG_CACHE_DIR) && ! mkdir(CATALOG_CACHE_DIR, 0755)) {
                        throw new Exception('Не удалось создать директорию "' . CATALOG_CACHE_DIR . '"');
                    }
                    if ( ! is_writeable(CATALOG_CACHE_DIR)) {
                        if ( ! chmod(CATALOG_CACHE_DIR, 0755)) {
                            throw new Exception('Директория "' . CATALOG_CACHE_DIR . '" не доступна для чтения');
                        }
                    }

                    // создание названия для кэш-файла
                    if (isset($_GET['size']) && $_GET['size'] == 'small') {
                        $cache_file = CATALOG_CACHE_DIR . '/' . md5('small' . $params['photo'] . CATALOG_MAX_HEIGHT_SMALL_IMAGE . CATALOG_MAX_WIDTH_SMALL_IMAGE);

                    } else {
                        $cache_file = CATALOG_CACHE_DIR . '/' . md5('big' . $params['photo'] . CATALOG_MAX_HEIGHT_BIG_IMAGE . CATALOG_MAX_WIDTH_BIG_IMAGE);
                    }

                    // если кэш-файл уже существует, то ипользуем его
                    if (file_exists($cache_file)) {
                        $last_modified_time = filemtime($cache_file);
                        $etag               = hash('crc32b', $cache_file);
                        $len                = filesize($cache_file);
                        header('Content-type: image/jpg');
                        header("Cache-Control: public");
                        header("Pragma: public");
                        header("Last-Modified: " . gmdate("D, d M Y H:i:s", $last_modified_time) . " GMT");
                        header("Etag: $etag");
                        header("Content-Length: $len");
                        if (
                            (isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) && strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) == $last_modified_time) ||
                            (isset($_SERVER['HTTP_IF_NONE_MATCH']) && trim($_SERVER['HTTP_IF_NONE_MATCH']) == $etag)
                        ) {
                            header("{$_SERVER['SERVER_PROTOCOL']} 304 Not Modified");

                        } else {
                            readfile($cache_file);
                        }
                        exit;
                    }

                } else {
                    $cache_file = null;
                }

            } catch (Exception $e) {
                $cache_file = null;
            }

            if (isset($_GET['size']) && $_GET['size'] == 'small') {
                $this->resizeImage(
                    $photo,
                    CATALOG_MAX_HEIGHT_SMALL_IMAGE,
                    CATALOG_MAX_WIDTH_SMALL_IMAGE,
                    $cache_file
                );

            } else {
                $this->resizeImage(
                    $photo,
                    CATALOG_MAX_HEIGHT_BIG_IMAGE,
                    CATALOG_MAX_WIDTH_BIG_IMAGE,
                    $cache_file
                );
            }

        } else {
            return $this->page404();
        }
    }


    /**
     * @return stdClass
     */
    public function xgallery_search() {

    }


    /**
     * Создание изображения
     * @param string $image
     * @param int $max_height
     * @param int $max_width
     * @param null|string $save_path
     * @param null|string $watermark_path
     * @throws Exception
     */
    private function resizeImage($image, $max_height, $max_width, $save_path = null, $watermark_path = null) {

        // включено ли расширене gd
        if ( ! in_array('gd', get_loaded_extensions())) {
            throw new Exception('Ошибка работы с изображениями. Нет поддержки расширения gd.');
        }

        // водяной знак
        if ($watermark_path !== null) {
            if (file_exists($watermark_path)) {
                list($watermark_width, $watermark_height, $watermark_type) = getimagesize($watermark_path);
                switch ($watermark_type) {
                    case IMAGETYPE_GIF  : $watermark_resource = imagecreatefromgif($watermark_path);  break;
                    case IMAGETYPE_JPEG : $watermark_resource = imagecreatefromjpeg($watermark_path); break;
                    case IMAGETYPE_PNG  : $watermark_resource = imagecreatefrompng($watermark_path);  break;
                    case IMAGETYPE_BMP  : $watermark_resource = imagecreatefromwbmp($watermark_path); break;
                    default: $watermark_resource = imagecreatefromjpeg($watermark_path); break;
                }

                // если не удалось создать изображение, то кранты ...
                if ($watermark_resource === false) {
                    throw new Exception('Файл "' . $watermark_path . '" поврежден или имеет неверный формат');
                }

            } else {
                throw new Exception('Файл "' . $watermark_path . '" не найден');
            }
        }

        if ( ! function_exists('getimagesizefromstring')) {
            function getimagesizefromstring($string_data) {
                $uri = 'data://application/octet-stream;base64,'  . base64_encode($string_data);
                return getimagesize($uri);
            }
        }


        // оригинальное изображение
        if ($image) {
            list($orig_width, $orig_height, $image_type) = getimagesizefromstring($image);
            $image_resource = imagecreatefromstring($image);

            // если не удалось создать изображение
            if ($image_resource === false) {
                throw new Exception('Файл "' . $image . '" поврежден или имеет неверный формат');
            }
        } else {
            throw new Exception('Изображение отсутсвует');
        }

        if ($orig_height < $max_height && $orig_width < $max_width) {
            $image_width  = $orig_width;
            $image_height = $orig_height;

        } else {
            $ratio_orig = $orig_width/$orig_height;

            if ($max_width/$max_height > $ratio_orig) {
                $image_width  = $max_height*$ratio_orig;
                $image_height = $max_height;
            } else {
                $image_height = $max_width/$ratio_orig;
                $image_width  = $max_width;
            }
        }

        $convas = imagecreatetruecolor($image_width, $image_height);

        if ($image_type == IMAGETYPE_GIF || $image_type == IMAGETYPE_PNG) {
            // если водяной знак полупрозрачный, то заливание холста белым цветом для правильной передачи цвета
            if ($watermark_path !== null && ($watermark_type == IMAGETYPE_GIF || $watermark_type == IMAGETYPE_PNG)) {
                imagesavealpha($convas, true);
                imagefill($convas, 0, 0, imagecolorallocatealpha($convas ,255, 255, 255, 0));
            } else {
                imagecolortransparent($convas, imagecolorallocatealpha($convas, 0, 0, 0, 127));
                imagealphablending($convas, false);
                imagesavealpha($convas, true);
            }
        }

        imagecopyresampled($convas, $image_resource, 0, 0, 0, 0, $image_width, $image_height, $orig_width, $orig_height);


        if ($watermark_path !== null) {
            imagecopymerge($convas, $watermark_resource, 0, 0, 0, 0, $image_width, $image_height, 10);
        }

        header('content-type: image/jpeg');
        if ($save_path === null) {
            imagejpeg($convas);
        } else {
            imagejpeg($convas, $save_path);
            imagejpeg($convas);
        }

        // освобождаем память
        imagedestroy($convas);
        if ($watermark_path !== null) {
            imagedestroy($watermark_resource);
        }
    }
}



/**
 * LangDetect Class
 *
 *
 * @author        La2ha
 * @author        Shinji
 * @version       1.1
 * @package       LangDetect
 * @see           http://la2ha.ru/dev/web/php/codeigniter/libraries_helpers/lang_detect
 */
class LangDetect {


    /**
     * Масив с языками пользователя
     * отсортированный по убыванию значимости
     * @var array|null
     */
    var $language = null;


    /**
     * Нахождение и сортировка по значимости
     * языков пользователя в массив $this->language
     *
     * @return LangDetect
     */
    public function __construct () {

        if (($list = strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE']))) {
            if (preg_match_all('/([a-z]{1,8}(?:-[a-z]{1,8})?)(?:;q=([0-9.]+))?/', $list, $list)) {

                $this->language = array_combine($list[1], $list[2]);

                foreach ($this->language as $n => $v) {
                    $this->language[$n] = $v ? $v : 1;
                }

                arsort($this->language, SORT_NUMERIC);
            }

        } else {
            $this->language = array();
        }
    }


    /**
     * Возвращает языки пользователя
     * отсортрованные по значимости.
     * Либо null, если потзовательские языки небыли присланы
     * пользователем в заголовке Accept-Language
     *
     * @return array|null
     *      Языки пользователя
     */
    public function getUserLanguages () {

        return $this->language;
    }


    /**
     * Нахождение лучшего языка для пользователя
     * из тех что имеются
     *
     * @param string $default
     *      Язык отдаваемый по умелчанию
     * @param array $langs
     *      Массив возможных языков 2х буквенного обозначения,
     *      элементы которого расположены по значемости от большего к меньшему.
     *      Пример токого массива:
     *      array(
     *          Русский => ru,
     *          Английский => array(en, us),
     *          3 => ua
     *      )
     *
     * @return string
     *      Наиболее подошедший язык
     *      или язык указанный по умолчанию
     */
    public function getBestMatch ($default, $langs) {

        $languages = array();

        foreach ($langs as $lang => $alias) {
            if (is_array($alias)) {

                foreach ($alias as $alias_lang) {
                    $languages[strtolower($alias_lang)] = strtolower($lang);
                }

            } else {
                $languages[strtolower($alias)] = strtolower($lang);
            }
        }

        // убираем то что идет после тире в языках вида "en-us, ru-ru"
        foreach ($this->language as $l => $v) {
            $s = strtok($l, '-');

            if (isset($languages[$s])) {
                return $s;
            }
        }

        return $default;
    }


}





/**
 * Class Micro_Plugin_SQLite
 */
class Micro_Plugin_SQLite {

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
    public function connect($basename = CATALOG_SQLITE_DB_PATH, $options = array()) {

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

        $query     = $this->buildInsert($table, $data);
        $is_insert = $this->query($query['sql'], $query['params']);
        $last_id   = $this->lastInsertId();

        return $is_insert ? $last_id : false;
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

        $query         = $this->buildUpdate($table, $data, $where);
        $is_update     = $this->query($query['sql'], $query['params']);
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