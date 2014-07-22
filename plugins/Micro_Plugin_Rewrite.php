<?php

define('PLUGIN_REWRITE_IS_ACTIVE', false);



/**
 * Class Micro_Plugin_Rewrite
 */
class Micro_Plugin_Rewrite  {

    public static $is_active = PLUGIN_REWRITE_IS_ACTIVE;


    /**
     * Установка плагина
     */
    public function install () {

        $file_name = ltrim(dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR . '.htaccess', DIRECTORY_SEPARATOR);
        if ( ! file_exists($file_name)) {
            $htaccess = array(
                'AddDefaultCharset utf-8',
                'Options -Indexes',
                'RewriteEngine On',
                'RewriteBase /',
                '',
                'RewriteRule ^.htaccess$ - [F]',
                'RewriteCond %{REQUEST_FILENAME} !-d',
                'RewriteCond %{REQUEST_FILENAME} !-f',
                '',
                'RewriteRule . index.php [L]',
                'RewriteCond %{REQUEST_FILENAME} \.php',
                'RewriteRule . index.php [L]',
            );


            file_put_contents($file_name, implode("\r\n", $htaccess));
        }
    }


    /**
     * Поиск страницы подподащей под адрес запроса
     * У страницы должно быть указан rewrite параметр
     * @param array $pages
     * @param string $request_uri
     * @return bool|string
     */
    public function searchPage (array $pages, $request_uri) {

        foreach ($pages as $name=>$page) {
            if (isset($page['rewrite']) && preg_match($page['rewrite'], $request_uri)) {
                if (isset($page['plugin'])) {
                    $plugin_name = $page['plugin'];
                    if (class_exists($plugin_name) && $plugin_name::$is_active) {
                        return $name;
                    }
                } else {
                    return $name;
                }
            }
        }
        return false;
    }
}



if (Micro_Plugin_Rewrite::$is_active) {
    $rewrite = new Micro_Plugin_Rewrite();
    $rewrite->install();
}