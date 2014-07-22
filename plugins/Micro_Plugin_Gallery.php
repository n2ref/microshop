<?php

define('GALLEY_PLUGIN_ROOT_TAXONOMY', 'Книги');


/**
 * Галлерея товаров
 */
Micro_Init::$components['Micro_Plugin_Gallery'] = array(
    'tpl' => <<<HTML
        <!-- BEGIN photos -->
        <div id="gallery-wrapper">
            <!-- BEGIN photo -->
            <div class="item">
                <div class="content">
                    <div class="image-container">
                        <a href="[PHOTO_BIG_URL]">
                            <img src="[PHOTO_SMALL_URL]" alt="[PHOTO_NAME]" title="[PHOTO_NAME]"/>
                        </a>
                    </div>
                    <div class="info-container">
                        <h2><a href="#" class="title">[PHOTO_NAME]</a></h2>
                        <div class="descroption">[DESCRIPTION]</div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                [PAY]
            </div>
            <!-- END photo -->
            <div class="clearfix"></div>

            <!-- BEGIN pagenation -->
            <div id="pagination">
                <ul class="pagebar">
                    [PAGEBAR]
                </ul>
            </div>
            <!-- END pagenation -->
        </div>
        <!-- END photos -->
        <div class="clearfix"></div>
HTML
    ,
    'tpl_pay' => <<<HTML
        <div class="pay-container">
            <div class="cost">
                [PHOTO_COST] <span class="currency">[CURRENCY]</span>
            </div>
            <!-- BEGIN add_in_cart -->
            <input class="btn add_in_cart" type="button" onclick="gallery.order(this)"
                   data-photo-path="[PHOTO_PATH]" value="##'В корзину'##">
            <!-- END add_in_cart -->

            <!-- BEGIN remove_in_cart -->
            <input class="btn remove_in_cart" type="button" onclick="gallery.order(this)"
                   data-photo-path="[PHOTO_PATH]" value="##'Отмена'##">
            <!-- END remove_in_cart -->
            <div class="clearfix"></div>
        </div>
HTML
    ,
    'style' => <<<HTML
        <style>
            #gallery-wrapper {
                float: right;
                width: 700px;
            }
            #gallery-wrapper .item {
                background-color: #ffffff;
                border: 1px solid #c2c2c2;
                box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
                float: left;
                height: 200px;
                margin-bottom: 20px;
                margin-left: 20px;
                overflow: hidden;
                text-align: center;
                width: 670px;
            }
            #gallery-wrapper .item .content {
                float: left;
                width: 72.5%;
                padding: 10px;
            }
            #gallery-wrapper .item .content .image-container {
                display: inline-block;
                float: left;
                height: 180px;
                line-height: 0;
                text-align: center;
            }
            .#gallery-wrapper .item .content .image-container img {
                cursor:pointer;
                transition: all 0.3s ease 0s;
            }
            #gallery-wrapper .item .content .image-container>a {
                line-height: 180px;
            }
            #gallery-wrapper .item .content .image-container>a:focus,
            #gallery-wrapper .item .content .image-container>a:active,
            #gallery-wrapper .item .content .image-container>a:hover {
                text-decoration: none;
            }
            #gallery-wrapper .item .content .info-container {
                color: #222222;
                max-height: 180px;
                overflow: hidden;
                padding: 4px 8px;
                padding-top: 0;
                z-index: 999;
            }
            #gallery-wrapper .item .content .info-container .title {
                display: block;
                text-align: left;
            }
            #gallery-wrapper .item .content .info-container .descroption {
                line-height: 18px;
                margin-top: 10px;
                text-align: left;
            }
            #gallery-wrapper .item .pay-container {
                background-color: #f2f2f2;
                float: right;
                height: 200px;
                padding-left: 10px;
                text-align: left;
                width: 22.5%;
            }
            #gallery-wrapper .item .pay-container .cost {
                border-bottom-right-radius: 2px;
                border-top-right-radius: 8px;
                color: #000000;
                font-size: 18px;
                font-weight: bold;
                margin-top: 70px;
                width: 100%;
            }
            #gallery-wrapper .item .pay-container .cost .currency {
                font-size: 14px;
                font-weight: normal;
            }
            #gallery-wrapper .item .pay-container .add_in_cart,
            #gallery-wrapper .item .pay-container .remove_in_cart {
                color: #ffffff;
                font-size: 11px;
                font-weight: bold;
                margin-top: 15px;
                width: 140px;
            }
            #gallery-wrapper .item .pay-container .add_in_cart { background-color: #BBBBBB; }
            #gallery-wrapper .item .pay-container .remove_in_cart {
                background-color: #77a3d2;
                color: #f4f4f4;
            }
            .btn-preloader {
                background-image: url(data:image/gif;base64,R0lGODlhEAAQAPIAAP///wAAAMLCwkJCQgAAAGJiYoKCgpKSkiH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAEAAQAAADMwi63P4wyklrE2MIOggZnAdOmGYJRbExwroUmcG2LmDEwnHQLVsYOd2mBzkYDAdKa+dIAAAh+QQJCgAAACwAAAAAEAAQAAADNAi63P5OjCEgG4QMu7DmikRxQlFUYDEZIGBMRVsaqHwctXXf7WEYB4Ag1xjihkMZsiUkKhIAIfkECQoAAAAsAAAAABAAEAAAAzYIujIjK8pByJDMlFYvBoVjHA70GU7xSUJhmKtwHPAKzLO9HMaoKwJZ7Rf8AYPDDzKpZBqfvwQAIfkECQoAAAAsAAAAABAAEAAAAzMIumIlK8oyhpHsnFZfhYumCYUhDAQxRIdhHBGqRoKw0R8DYlJd8z0fMDgsGo/IpHI5TAAAIfkECQoAAAAsAAAAABAAEAAAAzIIunInK0rnZBTwGPNMgQwmdsNgXGJUlIWEuR5oWUIpz8pAEAMe6TwfwyYsGo/IpFKSAAAh+QQJCgAAACwAAAAAEAAQAAADMwi6IMKQORfjdOe82p4wGccc4CEuQradylesojEMBgsUc2G7sDX3lQGBMLAJibufbSlKAAAh+QQJCgAAACwAAAAAEAAQAAADMgi63P7wCRHZnFVdmgHu2nFwlWCI3WGc3TSWhUFGxTAUkGCbtgENBMJAEJsxgMLWzpEAACH5BAkKAAAALAAAAAAQABAAAAMyCLrc/jDKSatlQtScKdceCAjDII7HcQ4EMTCpyrCuUBjCYRgHVtqlAiB1YhiCnlsRkAAAOwAAAAAAAAAAAA==);
                background-repeat: no-repeat;
                background-position: 3px 50%;
                padding-left: 25px;
            }
            @media only screen and (min-width: 768px) and (max-width: 991px) {
                #gallery-wrapper { width: 480px; }
                #gallery-wrapper .item {
                    margin-left: 25px;
                    margin-bottom: 25px;
                }
            }
            @media only screen and (min-width: 480px) and (max-width: 767px) {
                #gallery-wrapper { width: 435px; }
                #gallery-wrapper .item { margin-left: 10px; }
            }
            @media only screen and (max-width: 480px) {
                #gallery-wrapper { width: 250px; }
                #gallery-wrapper .item { margin-left: 25px; }
            }
        </style>
HTML
);



class Micro_Plugin_Gallery extends Micro_Gallery {


    public function index() {

        if (isset($_GET['action']) && $_GET['action'] == 'view_item') {
            return $this->viewItem();

        } else {
            return parent::index();
        }
    }


    /**
     * Возвращает шаблон компонента
     * @return array|null
     */
    protected function getTemplate() {
        return $this->getComponent('Micro_Plugin_Gallery', 'tpl');
    }


    /**
     * Возвращает шаблон компонента
     * @return array|null
     */
    protected function getPayTemplate() {
        return $this->getComponent('Micro_Plugin_Gallery', 'tpl_pay');
    }


    /**
     * Возвращает шаблон компонента
     * @return array|null
     */
    protected function getStyle() {
        return $this->getComponent('Micro_Plugin_Gallery', 'style');
    }


    /**
     *
     */
    protected function viewItem() {

    }


    /**
     * Показ галереи
     * @return int|stdClass
     */
    protected function gallery() {

        // путь до каталога
        if (isset($_GET['path']) && $_GET['path'] != '') {
            $request_path = Micro_Tools::hashToPath($_GET['path']);
            if ($request_path != '') {
                $path = GALLERY_DIR . '/' . $request_path;
            } else {
                return $this->page404();
            }
        } else {
            $path = GALLERY_DIR;
        }


        $lang = $this->getLang();
        $quote_gallery_dir = preg_quote(GALLERY_DIR);
        $taxonomy = preg_replace("~^{$quote_gallery_dir}~", '', $path);
        $explode_taxonomy = $taxonomy ? explode('/', trim($taxonomy, '/')) : false;

        $this->addTaxonomy(GALLEY_PLUGIN_ROOT_TAXONOMY, "?view=gallery&lang={$lang}");

        if ( ! empty($explode_taxonomy)) {
            $steps = '';
            foreach ($explode_taxonomy as $step) {
                $steps .= $steps == ''
                    ? Micro_Tools::pathToHash($step)
                    : '-' . Micro_Tools::pathToHash($step);
                $this->addTaxonomy(
                    Micro_Tools::convertEncoding($step),
                    "?view=gallery&path={$steps}&lang={$lang}"
                );
            }
        }


        $tpl  = new Micro_Templater();
        $tpl->setTemplate($this->getTemplate());


        // Валюта
        $tpl->assign('[CURRENCY]', defined(strtoupper('CURRENCY_' . $lang))
            ? constant(strtoupper('CURRENCY_' . $lang))
            : '');


        if ($handle = opendir($path)) {
            $page            = isset($_GET['page']) && $_GET['page'] > 0 ? (int)$_GET['page'] : 1;
            $available_types = array(
                'image/gif',  'image/png', 'image/jpg',
                'image/jpeg', 'image/bmp',
            );
            $dir_content = array(
                'file'        => array(),
                'total_files' => 0
            );
            if( ! function_exists('mime_content_type')) {
                function mime_content_type($filename) {
                    $fh=fopen($filename,'rb');
                    if ($fh) {
                        $bytes6=fread($fh,6);
                        fclose($fh);
                        if ($bytes6===false) return false;
                        if (substr($bytes6,0,3)=="\xff\xd8\xff") return 'image/jpeg';
                        if ($bytes6=="\x89PNG\x0d\x0a") return 'image/png';
                        if ($bytes6=="GIF87a" || $bytes6=="GIF89a") return 'image/gif';
                        return 'application/octet-stream';
                    }
                    return false;
                }
            }
            while ($element_name = readdir($handle)) {
                if ($element_name != "." && $element_name != "..") {
                    if (
                        is_file($path . '/' . $element_name) &&
                        in_array(mime_content_type($path . '/' . $element_name), $available_types)
                    ) {
                        if (
                            ($page * GALLERY_PHOTOS_ON_PAGE) - GALLERY_PHOTOS_ON_PAGE <= $dir_content['total_files'] &&
                            count($dir_content['file']) < GALLERY_PHOTOS_ON_PAGE)
                        {
                            $dir_content['file'][] = $element_name;
                        }
                        $dir_content['total_files']++;
                    }
                }
            }


            // Проверка на существование запрошенной строницы
            if (($page * GALLERY_PHOTOS_ON_PAGE) - GALLERY_PHOTOS_ON_PAGE > $dir_content['total_files']) {
                return $this->page404();
            }


            // Файлы
            foreach ($dir_content['file'] as $file_name) {
                $photo_path = isset($_GET['path']) && $_GET['path'] != ''
                    ?  $_GET['path'] . '-' . Micro_Tools::pathToHash($file_name)
                    :  Micro_Tools::pathToHash($file_name);

                $matches = array();
                if (preg_match('~^__([0-9\.,]+)__~sU', $file_name, $matches)) {

                    $tpl_pay = new Micro_Templater();
                    $tpl_pay->setTemplate($this->getPayTemplate());

                    $file_name_cut = preg_replace('~^__[0-9\.,]+__~sU', '', $file_name);
                    $file_name_utf = Micro_Tools::convertEncoding($file_name_cut);

                    $tpl_pay->assign('[PHOTO_COST]', str_replace(',', '.', $matches[1]));

                    if ( ! isset($_SESSION['cart'][$photo_path])) {
                        $tpl_pay->add_in_cart->assign('[PHOTO_PATH]', $photo_path);
                    } else {
                        $tpl_pay->remove_in_cart->assign('[PHOTO_PATH]', $photo_path);
                    }

                    $tpl->photos->photo->assign('[PAY]', $tpl_pay->parse());

                } else {
                    $tpl->photos->photo->assign('[PAY]', '');
                    $file_name_utf = Micro_Tools::convertEncoding($file_name);
                }

                if (file_exists($path . '/' . substr($file_name, 0, strrpos($file_name, '.')+1) . 'txt')) {
                    $file_description = file_get_contents($path . '/' . substr($file_name, 0, strrpos($file_name, '.')+1) . 'txt');
                    $descrption = preg_match('~== Краткое описание ==([^=])~U', $file_description, $matches);
                }


                $tpl->photos->photo->assign('[PHOTO_PATH]',      $photo_path);
                $tpl->photos->photo->assign('[PHOTO_BIG_URL]',   "?view=gallery&action=photo&path={$photo_path}&size=big");
                $tpl->photos->photo->assign('[PHOTO_SMALL_URL]', "?view=gallery&action=photo&path={$photo_path}&size=list");
                $tpl->photos->photo->assign('[PHOTO_NAME]',      substr($file_name_utf, 0, strrpos($file_name_utf, '.')));
                $tpl->photos->photo->assign('[DESCRIPTION]',     $file_description['preview']);

                if ($file_name != end($dir_content['file'])) $tpl->photos->photo->reassign();
            }


            // Пагинация
            if ($dir_content['total_files'] > GALLERY_PHOTOS_ON_PAGE) {
                $dir_path = isset($_GET['path']) ? $_GET['path'] : '';
                $pagebar  = Micro_Tools::paginate(
                    '',
                    "?view=gallery&path={$dir_path}&lang=[LANG]&page",
                    ceil($dir_content['total_files'] / GALLERY_PHOTOS_ON_PAGE),
                    isset($_GET['page']) ? $_GET['page'] : 1,
                    3
                );

                $tpl->photos->pagenation->assign('[PAGEBAR]', $pagebar);
            }
        }


        $page = new stdClass();
        $page->style      = $this->getStyle();
        $page->javascript = $this->getJavascript();
        $page->content    = $tpl->parse();

        return $page;
    }
} 