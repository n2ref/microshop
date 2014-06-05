<?php
/**
 * Microshop - application for fast and easy placement of their products on the internet.
 *
 * Copyright (C) 2014  Shabunin Igor
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 */

/**
 * Название сайта.
 * И будет ли оно отображаться в загаловке страницы.
 */
define('SITE_NAME',              'Microshop');
define('USE_SITE_NAME_IN_TITLE', true);


/**
 * Адрес электронной почты на который будет приходить заказы.
 * А так же адрес отправителя который будет указан в письмах
 * TODO отправляемых заказчику на указанный им адрес.
 * Метод отправки писем - по умолчанию равен MAIL
 */
define('ORDER_EMAIL_TO',     'exemple@domain.com');
define('ORDER_EMAIL_FROM',   'info@microshop.com');
define('ORDER_EMAIL_METHOD', 'MAIL');


/**
 * Параметры для отправки писем при помощи метода SMTP
 */
define('EMAIL_SMTP_HOST',   'localhost');
define('EMAIL_SMTP_PORT',   25);
define('EMAIL_SMTP_SECURE', '');
define('EMAIL_SMTP_AUTH',   false);
define('EMAIL_SMTP_USER',   '');
define('EMAIL_SMTP_PASS',   '');


/**
 * Директории используемые приложением.
 * Их наличие не обязательно.
 */
define('USE_CACHE',   true);
define('CACHE_DIR',   './cache');
define('GALLERY_DIR', './gallery');
define('PLUGINS_DIR', './plugins');


/**
 * Язык сайта по умолчанию и активные языки
 */
define('DEFAULT_LANG', 'ru');
define('LANGUAGES',    'ru,en');


/**
 * Количество фотографий на странице.
 * Путь до изображения с водяным знаком.
 */
define('GALLERY_PHOTOS_ON_PAGE', 18);
define('WATERMARK_IMAGE',        '');


/**
 *  Настройки для каких изображений будет применен водяной знак
 */
define('USE_WATERMARK_LIST_IMAGE', false);
define('USE_WATERMARK_BIG_IMAGE',  true);
define('USE_WATERMARK_CART_IMAGE', false);


/**
 * Размеры для картинок
 */
define('MAX_WIDTH_BIG_IMAGE',   640);
define('MAX_HEIGHT_BIG_IMAGE',  480);
define('MAX_WIDTH_LIST_IMAGE',  210);
define('MAX_HEIGHT_LIST_IMAGE', 170);
define('MAX_WIDTH_CART_IMAGE',  100);
define('MAX_HEIGHT_CART_IMAGE', 100);



/***************************
 *====== HTML секция ======*
 **************************/


/**
 * Меню сайта
 */
Micro_Init::$menu = array(
    array(
        'view'     => 'gallery',
        'active'   => array('gallery'),
        'title'    => 'Галерея',
        'position' => 10,
    ),
    array(
        'view'     => 'cart',
        'active'   => array('cart', 'order', 'order_send'),
        'title'    => 'Ваш заказ',
        'position' => 20,
    ),
    array(
        'view'     => 'help',
        'active'   => array('help'),
        'title'    => 'Помощь',
        'position' => 30,
    )
);


/**
 * Шаблон
 */
Micro_Init::$template = array(
    'tpl' => <<<HTML
<!DOCTYPE html>
<html lang="[LANG]">
<head>
    <title>[TITLE]</title>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="content-type"       content="text/META; charset=utf-8"/>
    <meta name="author"             content="easter@tut.by"/>
    <meta name="author"             content="shabuninil24@gmail.com"/>
    <meta name="robots"             content="all"/>
    <meta name="revisit-afte"       content="7 days"/>
    <meta name="distributionrobots" content="global"/>
    <meta name="description"        content="[META_DESC]"/>
    <meta name="keywords"           content="[META_KEYS]"/>

    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            background: #e2e6e9;
            font: normal 12px Verdana, Arial, Sans-Serif;
            text-align: left;
        }
            /* Links */
        a:link {
            color: #273A4D;
            text-decoration: none;
        }
        a:visited {
            color: #273A4D;
            text-decoration: none;
        }
        h3 a:link {
            color: #3f4f5c;
            text-decoration: none;
        }
        h3 a:visited {
            color: #3f4f5c;
            text-decoration: none;
        }
        h3 a:hover,
        a:active { color: #FFFFFF }
            /* Html Elements */
        h1, h2, h3, h4, h5, h6 {
            font-weight: normal;
            margin: 10px 0;
            padding: 0;
        }
        h1 {
            font-size: 36px;
            color: #293138;
        }
        h2 {
            font-size: 28px;
            color: #353F47;
        }
        .post-title h2 {
            color: #3f4f5c;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 5px;
        }
        h3 {
            font-size: 24px;
            color: #3f4f5c;
        }
        h4 {
            font-size: 20px;
            color: #3f4f5c;
        }
        h5 {
            font-size: 16px;
            color: #3f4f5c;
        }
        h6 {
            font-size: 13px;
            text-transform: uppercase;
            margin: 5px 0;
            font-weight: bold;
        }
        ul {
            line-height: 1.8em;
            list-style-type: circle;
            color: #333333;
        }
            /* Structure */
        #container {
            width: 800px;
            margin: 0 auto;
        }
        #header { padding: 0px 0 }
        #navigation {
            float: left;
            width: 800px;
            background-color: #282d2d;
            text-transform: uppercase;
            font-size: 14px;
        }
        #wrapper {
            margin: 0;
            padding: 0;
            clear: both;
            float: left;
            width: 800px;
            background: #ffffff;
            border-left: solid #dde0e1 2px;
            border-right: solid #dde0e1 2px;
            border-bottom: solid #dde0e1 2px;
        }
        #content-wrapper {
            width: 800px;
            float: left;
        }
        #content {
            width: 93.3%;
            padding: 27px;
            padding_top: 18px;
            background-color: #ededed;
            line-height: 1.6em;
            text-align: justify;
        }
        #footer {
            clear: both;
            float: left;
            width: 800px;
            margin: 0px 0;
            color: #555555;
            text-align: center;
            padding: 10px 3px 10px 0;
            background: #cfcfcf;
        }
            /* Navigation */
        #navigation ul {
            margin: 0 5px;
            float: left;
            width: 100%;
            padding: 0px 0;
            list-style-type: none;
        }
        #navigation li {
            float: left;
            margin: 0 0 0 5px;
            padding: 0;
        }
        #navigation a:link,
        #navigation a:visited {
            float: left;
            display: block;
            color: #c6c6c6;
            padding: 5px 10px;
        }
        #navigation ul li.current  a:link,
        #navigation ul li.current  a:visited,
        #navigation ul li.current  a:hover,
        #navigation ul li.current  a:active {
            color: #ffffff;
            background-color: #414646;
            border-left: solid #6b7070 1px;
            border-right: solid #6b7070 1px;
        }
        #navigation ul li.search {
            float: right;
            margin-right: 10px;
        }
            /* Header */
        #header h1 {
            color: #191a1a;
            font-weight: bold;
            margin-bottom: 10px;
        }
        #header h1 a:link,
        #header h1 a:visited { color: #333333 }
        #header h1 a:hover,
        #header h1 a:active {
            color: #000000;
            background-color: transparent;
        }
        #header h1 span { color: #5b5c5c }
            /* Content */
        .date {
            margin-left: 3px !important;
            padding: 0;
            color: #ccc !important;
            font-family: Verdana, Arial, Sans-Serif !important;
            letter-spacing: -1px;
            font-weight: normal;
            font-size: 24px;
            text-transform: lowercase;
            display: inline;
        }
        h3.post-title { display: inline }
        h3.post-title a {
            text-transform: lowercase;
            color: #3f4f5c !important;
            font-family: Verdana, Arial, Sans-Serif !important;
            letter-spacing: -1px;
            font-weight: bold;
            font-size: 24px;
            border-bottom: none !important;
        }
        h3.post-title a:hover {
            text-decoration: none!important;
            color: #222 !important;
            background: transparent;
        }
        /* Conteiner Img */
        .photo_img{
            cursor:pointer;
        }
        .photo .div-img {
            width: 100%;
            text-align: center;
            height: 171px;
        }
        .div-name {
            color: #222222;
            font-weight: bold;
            height: 35px;
            overflow: hidden;
            padding: 5px;
            z-index: 999;
        }
        .div-img a:focus {
            text-decoration: none;
        }
        .div-img a:active {
            text-decoration: none;
        }
        .div-img a:hover {
            text-decoration: none;
        }
        .div-data {
            margin-top: 5px;
        }
        .div-img img {
            border: 1px solid #DDDDDD;
            max-height: 170px;
            max-width: 210px;
        }
        .conteiner_img .div-data{
            margin-top: 5px;
            padding-bottom: 10px;
            text-align: center;
            width: 100%;
        }
        .currency{
            float: left;
            padding-left: 5px;
        }
        .choose{
            text-align: center;
        }
        .bottom{
            margin-top: 5px;
        }
        .photo {
            float: left;
            margin: 3px;
            text-align: center;
            width: 215px;
            text-align: center;
            padding: 10px;
            height: 245px;
            margin: 5px;
            border: 1px solid #C2C2C2;
            background: #DEDEDE;
            background: linear-gradient(to top, #DEDEDE, #ffffff, #ffffff, #ffffff);
        }
         /* Order */
        .order_wrapper {
            width: 150px;
            height: 183px;
            float: left;
        }
        .order_img {
            width: 100%;
            height: 170px;
            text-align: center;
        }
        .order_img img {
            padding: 10px;
            max-height: 200px;
            max-width: 200px;
        }
        .input-text {
            color: #222;
            margin-top: 6px;
            padding: 0px;
            background-color: #fff;
            border: 1px solid #C7C4C0;
            border-radius: 3px;
            text-align: center;
        }
        .left{
            text-align: left;
        }
        .input-batton {
            color: #3D83A0;
            margin-top: 6px;
            margin-bottom: 6px;
            cursor: pointer;
        }
        .button:hover{
            border: 1px solid #888;
        }
        .button:active{
            border: 1px solid #222;
        }
        .order_data {
            font-size: 12px;
            padding-left: 15px;
            padding-bottom: 3px;
            text-align: left;
        }
        .order_param {
            font-size: 12px;
            vertical-align: top;
        }
        .order_num {
            text-align: left;
            padding: 0px;
            padding-bottom: 6px;
        }
        .order_currency{
            width: 60%;
            border-right: 1px solid #222;
            float: left;
        }
        .order_choose{
            text-align: center;
        }
        .order_choose input{
            margin:  0;
        }
        .order_num input { padding: 0px }
        .order_name {
            padding-left: 15px;
            font-size: 14px;
            font-weight: bold;
            text-align: left;
        }
        #order { text-align: center }
        .order_modeles {
            padding: 6px;
            padding-left: 0px;
            height: 100%;
        }
        .model {
            padding: 6px 0;
            font-size: 12px;
            color: #333;
        }
        .model form { margin-bottom: 0px }
        .model form input { text-align: center }
        .order_comment {
            font-size: 12px;
            padding-left: 6px;
        }
        .cyrrency_one_sum{
            margin-left: 5px;
        }
        .all_sum{
            text-align: center;
            color: #10233b;
            font-size: 14px;
        }
        /* Menu */
        #menuIndicator{
            position: relative;
            top: -4px;
            color: #8c8f8f;
        }
        #menuRow{
            width:12px;
            height:12px;
            border:1px solid silver;
            font-size:12px;
            background: #ffffff;
            cursor: pointer;
            margin-top: 2px;
        }
        .node{
            cursor:pointer;
            width:15px;
            background-repeat: no-repeat;
        }
        .element{
            cursor:pointer;
            width:15px;
            background-repeat: no-repeat;
        }
        .album_link{
            color:black;
            padding:2px;
        }
        /** Footer **/
        #select_lang {
          float: right;
          margin-left: 10px;
          margin-right: 10px;
        }
        .btn {
            background-color: #F5F5F5;
            /*background-image: linear-gradient(to bottom, #FFFFFF, #E6E6E6);*/
            /*background-color: #EEEEEE;*/
            border: 1px solid #888888;
            border-radius: 3px;
            cursor: pointer;
            padding: 2px 5px 2px 5px;
            border-image: none;
            border-radius: 4px;
            border-style: solid;
            border-width: 1px;
            box-shadow: 0 1px 0 rgba(255, 255, 255, 0.2) inset, 0 1px 2px rgba(0, 0, 0, 0.05);
            color: #333333;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            line-height: 20px;
            margin-bottom: 0;
            text-align: center;
            text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
            vertical-align: middle;
        }
        .btn:hover {
            /*background-color: #E6E6E6;*/
            border-color: #404040;
            text-decoration: none;
        }
        .btn:active {
            border-color: #C2C2C2;
        }
        .btn-success {
            background-color: #5BB75B;
            background-image: linear-gradient(to bottom, #62C462, #51A351);
            background-repeat: repeat-x;
            border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
            color: #FFFFFF;
            text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
        }
    </style>
    [STYLE]

    <script type="text/javascript">
        /**
         * Смена языка
         */
        function selectLang (lang) {
            if (document.location.search.indexOf('lang=') >= 0) {
                document.location.href = document.location.href.replace(/([?|&])lang=([a-z]*)/, '$1lang=' + lang);
            } else {
                if (document.location.search == '') {
                    document.location.href += '?lang=' + lang;
                } else {
                    document.location.href += '&lang=' + lang;
                }
            }
        }
        function getXmlHttp () {
            if (typeof XMLHttpRequest === 'undefined') {
                XMLHttpRequest = function() {
                try { return new ActiveXObject("Msxml2.XMLHTTP.6.0"); }
                    catch(e) {}
                try { return new ActiveXObject("Msxml2.XMLHTTP.3.0"); }
                    catch(e) {}
                try { return new ActiveXObject("Msxml2.XMLHTTP"); }
                    catch(e) {}
                try { return new ActiveXObject("Microsoft.XMLHTTP"); }
                    catch(e) {}
                    throw new Error("This browser does not support XMLHttpRequest.");
                };
            }
            return new XMLHttpRequest();
        }

        /**
         * POST запрос на сервер
         */
        function doPost (url, params, collback, async) {

            async = async == 'undefined' || async == null
                ? true
                : async;

            var data = new FormData();
            for (var prop in params) if (params.hasOwnProperty(prop)) {
                data.append(prop, params[prop]);
            }

            var req = getXmlHttp();
            req.onreadystatechange = function() {
                if (req.readyState == 4) {
                    if (req.status == 200) {
                        collback(req.responseText);
                    } else {
                        // ошибка
                    }
                }
            }
            req.open('POST', url, async);
            req.send(data);
        }


    </script>
    [JAVASCRIPT]

</head>
<body>

    <div id="container">
        <div id="header">
            <h1>
                Micro <span>Shop</span>
            </h1>
        </div>

        <div id="wrapper">
            <div id='navigation'>
                <ul>
                     <!-- BEGIN menu -->
                     <li class="[CURRENT]">
                         <a href="[MENU_URL]">##'[MENU_NAME]'##</a>
                     </li>
                     <!-- END menu -->
                 </ul>
            </div>

            <div id='content-wrapper'>
                <div id='content'>
                    [CONTENT]
                </div>
            </div>
        </div>

        <div id="footer">
            <!-- BEGIN select_lang -->
            <div id="select_lang">
                <select onchange="selectLang(this.value)" name="lang">
                    <!-- BEGIN languages -->
                    <option value="[LANG_ISO]" [SELECTED]>[LANG_ISO]</option>
                    <!-- END languages -->
                </select>
            </div>
            <!-- END select_lang -->
        </div>
    </div>

</body>
</html>
HTML
,
    'locutions' => array(
        'Галерея'   => array('ru' => 'Галерея', 'en' => 'Gallery'),
        'Ваш заказ' => array('ru' => 'Ваш заказ', 'en' => 'Your order'),
        'Помощь'    => array('ru' => 'Помощь', 'en' => 'Help')
    ),
);


/**
 * Галлерея товаров
 */
Micro_Init::$pages['gallery'] = array(
    'tpl' => <<<HTML

    <!-- BEGIN taxonomy -->
    <ul class="taxonomy">
        <!-- BEGIN step -->
        <li class="[IS_ACTIVE]">
            <a href="[STEP_URL]">[STEP_NAME]</a>

            <!-- BEGIN divider -->
            <span class="divider">/</span>
            <!-- END divider -->
        </li>
        <!-- END step -->
    </ul>
    <!-- END taxonomy -->

    <!-- BEGIN albums -->
    <ul id="albums">
        <!-- BEGIN album -->
        <li>
            <a href="[GALLERY_URL]">[GALLERY_NAME]</a>
        </li>
        <!-- END album -->
    </ul>
    <!-- END albums -->

    <!-- BEGIN photos -->
    <div id="photo_wrapper">
        <!-- BEGIN photo -->
        <div class="photo">
            <div class="div-img">
                <a href="[PHOTO_BIG_URL]" target="_blank">
                    <img class="photo_img" src="[PHOTO_SMALL_URL]" alt="[PHOTO_NAME]" title="[PHOTO_NAME]"/>
                </a>
            </div>
            <div class="div-name">
                [PHOTO_NAME]
            </div>
            <!-- BEGIN pay -->
            <div class="div-data">
                <div class="currency">
                    ##'Цена'## [PHOTO_COST] ##'руб.'##
                </div>
                <div class="choose">
                    [BUTTON]
                </div>
            </div>
            <!-- END pay -->
        </div>
        <!-- END photo -->
        <div style="clear:both"></div>

        <!-- BEGIN pagenation -->
        <div id="pagination">
            <div id="page_bar">
                <span id="pages">
                    [PAGEBAR]
                </span>
            </div>
        </div>
        <!-- END pagenation -->
    </div>
    <!-- END photos -->
HTML
,
    'tpl_buttons' => <<<HTML
        <!-- BEGIN add_in_cart -->
        <input class="btn add_in_cart" type="button" onclick="gallery.order(this)"
               data-photo-path="[PHOTO_PATH]" value="##'В корзину'##">
        <!-- END add_in_cart -->

        <!-- BEGIN remove_in_cart -->
        <input class="btn remove_in_cart" type="button" onclick="gallery.order(this)"
               data-photo-path="[PHOTO_PATH]" value="##'Отмена'##">
        <!-- END remove_in_cart -->
HTML
,
    'style' => <<<HTML
    <style>
        .btn-preloader {
            background-image: url(data:image/gif;base64,R0lGODlhEAAQAPIAAP///wAAAMLCwkJCQgAAAGJiYoKCgpKSkiH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAEAAQAAADMwi63P4wyklrE2MIOggZnAdOmGYJRbExwroUmcG2LmDEwnHQLVsYOd2mBzkYDAdKa+dIAAAh+QQJCgAAACwAAAAAEAAQAAADNAi63P5OjCEgG4QMu7DmikRxQlFUYDEZIGBMRVsaqHwctXXf7WEYB4Ag1xjihkMZsiUkKhIAIfkECQoAAAAsAAAAABAAEAAAAzYIujIjK8pByJDMlFYvBoVjHA70GU7xSUJhmKtwHPAKzLO9HMaoKwJZ7Rf8AYPDDzKpZBqfvwQAIfkECQoAAAAsAAAAABAAEAAAAzMIumIlK8oyhpHsnFZfhYumCYUhDAQxRIdhHBGqRoKw0R8DYlJd8z0fMDgsGo/IpHI5TAAAIfkECQoAAAAsAAAAABAAEAAAAzIIunInK0rnZBTwGPNMgQwmdsNgXGJUlIWEuR5oWUIpz8pAEAMe6TwfwyYsGo/IpFKSAAAh+QQJCgAAACwAAAAAEAAQAAADMwi6IMKQORfjdOe82p4wGccc4CEuQradylesojEMBgsUc2G7sDX3lQGBMLAJibufbSlKAAAh+QQJCgAAACwAAAAAEAAQAAADMgi63P7wCRHZnFVdmgHu2nFwlWCI3WGc3TSWhUFGxTAUkGCbtgENBMJAEJsxgMLWzpEAACH5BAkKAAAALAAAAAAQABAAAAMyCLrc/jDKSatlQtScKdceCAjDII7HcQ4EMTCpyrCuUBjCYRgHVtqlAiB1YhiCnlsRkAAAOwAAAAAAAAAAAA==);
            background-repeat: no-repeat;
            background-position: 3px 50%;
            padding-left: 25px;
        }
        .add_in_cart {
            background-color: #BBBBBB;
        }
        .remove_in_cart {
            background-color: #3D83A0;
        }
        .taxonomy {
            border-bottom: 1px solid #B2B2B2;
            list-style: none outside none;
            margin: 0 0 20px;
            padding: 0 15px 8px 15px;
        }
        .taxonomy li {
            display: inline-block;
            text-shadow: 0 1px 0 #FFFFFF;
        }
        .taxonomy li.active {
            color: #999999;
        }
        .taxonomy li.divider {
            color: #CCCCCC;
            padding: 0 5px;
        }
        #albums {
            list-style: none outside none;
            margin: 0 0 20px;
            padding: 0;
        }
        #albums li {
            background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAcklEQVQ4je3TMQqDYAyG4ceh4I08lBeqmw5CXTr3As5eQPAqDv6DaMGGv6OBd0jgewmEQIFyx0OwejR4Jj6oIoL20JdpdkWH+psgUm+YMOAVZEhZS8YGC8wZgvkvgjFDMJJ3hfYWbNnjM/1Kk7Knd45QrNe2LfSKk3ZjAAAAAElFTkSuQmCC");
            background-repeat: no-repeat;
            background-position: 8px 50%;
            display: inline-block;
            text-shadow: 0 1px 0 #FFFFFF;
            background-color: #ffffff;
            border-radius: 4px;
            padding: 8px 10px 8px 30px;
            margin-right: 10px;
        }
    </style>
HTML
,
    'javascript' => <<<HTML
    <script type="text/javascript">
        var gallery = {
            order : function (obj) {
                var photo_path = obj.getAttribute("data-photo-path");
                obj.classList.add('btn-preloader');

                if (obj.classList.contains('add_in_cart')) {
                    doPost('index.php?view=add_in_cart', {item : photo_path}, function (data) {
                        var json = JSON.parse(data);
                        if (json.error == 0) {
                            obj.classList.remove('add_in_cart');
                            obj.classList.add('remove_in_cart');
                            obj.value = "##'Отмена'##";
                        } else {
                            alert("##'Ошибка'##:" + json.error_messages);
                        }
                        obj.classList.remove('btn-preloader');
                    });

                } else {
                    doPost('index.php?view=remove_in_cart', {item : photo_path}, function (data) {
                        var json = JSON.parse(data);
                        if (json.error == 0) {
                            obj.classList.remove('remove_in_cart');
                            obj.classList.add('add_in_cart');
                            obj.value = "##'В корзину'##";
                        } else {
                            alert("##'Ошибка'##:" + json.error_messages);
                        }
                        obj.classList.remove('btn-preloader');
                    });
                }
            }
        }
    </script>
HTML
,
    'title' => array(
        'ru' => 'Фотоальбом',
        'en' => 'Photo Album'
    ),
    'meta_desc' => array(
        'ru' => 'Фотоальбом',
        'en' => 'Photo Album'
    ),
    'meta_keys' => array(
        'ru' => 'Фотоальбом',
        'en' => 'Photo Album'
    ),
    'locutions' => array(
        'Цена'       => array('ru' => 'Цена', 'en' => 'Price'),
        'руб.'       => array('ru' => 'руб.', 'en' => 'rubles'),
        'В корзину'  => array('ru' => 'В корзину', 'en' => 'Add to cart'),
        'Отмена'     => array('ru' => 'Отмена', 'en' => 'Cancel'),
        'В начало'   => array('ru' => 'В начало', 'en' => 'To top'),
        'Предыдущая' => array('ru' => 'Предыдущая', 'en' => 'Previous'),
        'Следующая'  => array('ru' => 'Следующая', 'en' => 'Next'),
        'В конец'    => array('ru' => 'В конец', 'en' => 'To end'),
        'Ошибка'     => array('ru' => 'Ошибка', 'en' => 'Error')
    ),
);

/**
 * Корзина пользователя
 */
Micro_Init::$pages['cart'] = array(
    'tpl' => <<<HTML
        <h3>##'Информация о вашем заказе'##:</h3>

        <!-- BEGIN empty_cart -->
        <h3>##'Нет заказов'##!</h3>
        <!-- END empty_cart -->


        <!-- BEGIN orders -->
        <form action="?view=order&lang=[LANG]" method="post">
            <table width="100%">
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>##'Цена'##</th>
                        <th>##'Количество'##</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- BEGIN order -->
                    <tr>
                        <td>
                            <img src="[PHOTO_URL]" alt="[TITLE]">
                        </td>
                        <td>
                            [TITLE]
                        </td>
                        <td>
                            [COST]
                        </td>
                        <td>
                            <input type="hidden" name="[PARAM_NAME]" value="[PARAM_VALUE]">
                            <input min="1" step="1" type="number" name="[COUNT_NAME]" value="1"
                                   data-cost="[COST]" class="product-count" onchange="recalculation()">
                        </td>
                        <td>
                            <input class="btn btn-delete" type="button" class="delete"
                                   data-photo-path="[PARAM_VALUE]" onclick="removeInCart(this)">
                        </td>
                    </tr>
                    <!-- END order -->
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5">
                            ##'Общая сумма'##: <b><span id="cost-sum">[COST_SUM]</span> ##'руб'##</b>
                        </td>
                    </tr>
                </tfoot>
            </table>

            <input value="##'Продолжить'##" type="submit">
        </form>
        <!-- END orders -->
HTML
,
    'javascript' => <<<HTML
    <script type="text/javascript">
        if (document.getElementsByClassName) {
            getElementsByClass = function (classList, node) {
                return (node || document).getElementsByClassName(classList)
            }

        } else {
            getElementsByClass = function (classList, node) {
                var node = node || document,
                list = node.getElementsByTagName('*'),
                length = list.length,
                classArray = classList.split(/\s+/),
                classes = classArray.length,
                result = [], i,j
                for (i = 0; i < length; i++) {
                    for (j = 0; j < classes; j++)  {
                        if (list[i].className.search('\\b' + classArray[j] + '\\b') != -1) {
                            result.push(list[i])
                            break
                        }
                    }
                }

                return result
            }
        }

        function removeInCart (obj) {
            var photo_path = obj.getAttribute("data-photo-path");
            obj.classList.add('btn-preloader');
            obj.classList.remove('btn-delete');

            doPost('?view=remove_in_cart', {item : photo_path}, function (data) {
                var json = JSON.parse(data);
                if (json.error == 0) {
                    obj.parentNode.parentNode.remove();
                    recalculation();
                } else {
                    obj.classList.add('btn-delete');
                    alert("##'Ошибка'##:" + json.error_messages);
                }
            });
        }

        function recalculation () {
            var elements = getElementsByClass('product-count');
            var sum      = 0;

            for (var i = 0; i < elements.length; i++) {
                var cost = parseInt(elements[i].getAttribute('data-cost'));
                sum += parseInt(elements[i].value) * cost;
            }

            document.getElementById('cost-sum').innerHTML = sum;
        }
    </script>
HTML
,
    'style' => <<<HTML
    <style>
        input[type=number] {
            width: 40px;
        }
        .btn-delete {
            background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACrklEQVQ4jZ2TT0zTZxjHvwezo3Hzogc8eJqLZluWEMwSzSRzm8Ys2S5bNNEZNzaYnKYjzoSNRJHg30UxhhBQmSKSMcgmBGd0M4ul0MIstdAWftg/a6Fr+yuFQinl46EEgkYPfi5vnrzP582bJ99HegqnYazpDWUrbL6pnv6+R+G+7v6o3R3yWkM0OQP/b3u6fxkD/5lf2gOpueEbpzGr3yNTlUemcjVTVW8RrPkKh/1f7BHaLRbLymflseRPLk+AZPk7cEhwRlAvuCy4KPhRZEuF0V6HYwKX1Wpdsyi7gpFdw6Eo099tgKOCZkGr4JagS9AmaBHUCPaLYEcDzgluLj7gmcaSuFgKBxdEowkiTXBb0CFwfApxG/y5EU6K9Ner8RtDOAKRnXroD20NDw6QLlmV+3ZXAYuEvwf3RshO5mrnUagX8yUieqWCoSkuyW1SF7t9hbkiwVXBDYH9Y8jOsIzHlfDbwn2ZSBzbzmgiZZdnkrvRX38mUyy4vtBQJxg5viRnbLm51AtuCspFovxNjDFzVK7o3KXxrkYSuwXnF6b/YN+SPJ/KnaEmqF0BF0S6WIyX72Q0nrSpZ9D77rjHzeNP1jL7jeCX/CW59wtoXwcz0VzdUw0Vwv++CDacZXg6WyNJ8qVm/w5Wl2FsEZwUWM+D7RRUC6oELTtg5C+ofx1zr3B9lEfUb9A94PlAkmRxuLYnJmK4Ps/Hu1lwRHBMcEpwTlCZC1J8j+jdJGL3WvGak9eWJbFvxHckETfxln5I/9vCv0uYB8REkQh/JpwFoq9wJfF//sA3k7F1dna+9kycrYOe3dEsk+N32hj+YQ+uA2/g3L+eoW8L8deewIyM4U6mG5ubm1957kL9fv/+q4Ox1OHw7Oy9cDxhjMWSgXAy+dCXps5ie1Twwm18GZ4AOZhb0IBxCUwAAAAASUVORK5CYII=");
            background-repeat: no-repeat;
            background-position: 3px 50%;
            padding-left: 12px;
        }
        .btn-preloader {
            background-image: url("data:image/gif;base64,R0lGODlhEAAQAPIAAP///wAAAMLCwkJCQgAAAGJiYoKCgpKSkiH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAEAAQAAADMwi63P4wyklrE2MIOggZnAdOmGYJRbExwroUmcG2LmDEwnHQLVsYOd2mBzkYDAdKa+dIAAAh+QQJCgAAACwAAAAAEAAQAAADNAi63P5OjCEgG4QMu7DmikRxQlFUYDEZIGBMRVsaqHwctXXf7WEYB4Ag1xjihkMZsiUkKhIAIfkECQoAAAAsAAAAABAAEAAAAzYIujIjK8pByJDMlFYvBoVjHA70GU7xSUJhmKtwHPAKzLO9HMaoKwJZ7Rf8AYPDDzKpZBqfvwQAIfkECQoAAAAsAAAAABAAEAAAAzMIumIlK8oyhpHsnFZfhYumCYUhDAQxRIdhHBGqRoKw0R8DYlJd8z0fMDgsGo/IpHI5TAAAIfkECQoAAAAsAAAAABAAEAAAAzIIunInK0rnZBTwGPNMgQwmdsNgXGJUlIWEuR5oWUIpz8pAEAMe6TwfwyYsGo/IpFKSAAAh+QQJCgAAACwAAAAAEAAQAAADMwi6IMKQORfjdOe82p4wGccc4CEuQradylesojEMBgsUc2G7sDX3lQGBMLAJibufbSlKAAAh+QQJCgAAACwAAAAAEAAQAAADMgi63P7wCRHZnFVdmgHu2nFwlWCI3WGc3TSWhUFGxTAUkGCbtgENBMJAEJsxgMLWzpEAACH5BAkKAAAALAAAAAAQABAAAAMyCLrc/jDKSatlQtScKdceCAjDII7HcQ4EMTCpyrCuUBjCYRgHVtqlAiB1YhiCnlsRkAAAOwAAAAAAAAAAAA==");
            background-repeat: no-repeat;
            background-position: 3px 50%;
            padding-left: 12px;
        }
    </style>
HTML
,
    'title' => array(
        'ru' => 'Фотоальбом',
        'en' => 'Photo Album'
    ),
    'meta_desc' => array(
        'ru' => 'Фотоальбом',
        'en' => 'Photo Album'
    ),
    'meta_keys' => array(
        'ru' => 'Фотоальбом',
        'en' => 'Photo Album'
    ),
    'locutions' => array(
        'Информация о вашем заказе' => array('ru' => 'Информация о вашем заказе', 'en' => 'Information about your order'),
        'Нет заказов'               => array('ru' => 'Нет заказов', 'en' => 'No orders'),
        'Вид'                       => array('ru' => 'Вид', 'en' => 'View'),
        'Название'                  => array('ru' => 'Название', 'en' => 'Title'),
        'Цена'                      => array('ru' => 'Цена', 'en' => 'Price'),
        'Количество'                => array('ru' => 'Количество', 'en' => 'Quantity'),
        'Общая сумма'               => array('ru' => 'Общая сумма', 'en' => 'Total amount'),
        'руб'                       => array('ru' => 'руб', 'en' => 'rubles'),
        'Продолжить'                => array('ru' => 'Продолжить', 'en' => 'Continue'),
    )
);


/**
 * Оформление заказа
 */
Micro_Init::$pages['order'] = array(
    'tpl' => <<<HTML
    <!-- BEGIN empty_order -->
    <h3>##'Для оформления заказа нужен хотя бы один товар'##</h3>
    <br>
    <a href="javascript:window.history.back()">##'назад'##</a>
    <!-- END empty_order -->

    <!-- BEGIN order_form -->
    <form method="post" action="?view=order_send&lang=[LANG]" onsubmit="return ValidateForm(this)">

        <!-- BEGIN orders -->
        <input type="hidden" name="[ORDER_PARAM_NAME]" value="[ORDER_NAME]">
        <input type="hidden" name="[ORDER_PARAM_COUNT]" value="[ORDER_COUNT]">
        <!-- END orders -->

        <table align="center">
            <tbody>
                <tr>
                    <td align="right">
                        <label for="field_name">
                            <span class="red-star">*</span>##'Имя и Фамилия'##:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="name" id="field_name"
                               required="required" data-required-message="##'Укажите пожалуйста ваше имя'##">
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label for="field_tel">
                            <span class="red-star">*</span>##'Контактный телефон'##:
                        </label>
                    </td>
                    <td>
                        <input type="tel" name="tel" id="field_tel"
                               required="required" data-required-message="##'Укажите пожалуйста контактный телефон'##">
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label for="field_email">
                            ##'Ваш email'##:
                        </label>
                    </td>
                    <td>
                        <input type="email" id="field_email" name="email">
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label for="field_adres">
                            <span class="red-star">*</span>##'Адрес доставки'##:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="adres" id="field_adres"
                               required="required" data-required-message="##'Укажите пожалуйста адрес доставки'##">
                    </td>
                </tr>
                <tr>
                    <td align="right" valign="top">
                        <label for="field_info">
                            ##'Дополнительная информация'##:
                        </label>
                    </td>
                    <td>
                        <textarea name="info" rows="4" id="field_info" style="width:100%"></textarea>
                    </td>
                </tr>
                <tr>
                    <td align="center">

                    </td>
                    <td>
                        <input type="submit" class="btn btn-success" value="##'Отправить заказ'##">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
    <span class="red-star">*</span> - ##'поля, обязательные для заполнения'##
    <!-- END order_form -->
HTML
,
    'javascript' => <<<HTML
    <script type="text/javascript">
        function ValidateForm (form) {
            for (var i = 0; i < form.length; i++) {
                if (form[i].hasAttribute('required') && (form[i].value == null || form[i].value == "")) {
                    if (form[i].hasAttribute('data-required-message')) {
                        alert(form[i].getAttribute('data-required-message'));
                    }
                    return false;
                }
            }
        }
    </script>
HTML
,
    'style' => <<<HTML
    <style>
        .red-star {
            color: red;
        }
    </style>
HTML
,
    'title' => array(
        'ru' => 'Фотоальбом',
        'en' => 'Photo Album'
    ),
    'meta_desc' => array(
        'ru' => 'Фотоальбом',
        'en' => 'Photo Album'
    ),
    'meta_keys' => array(
        'ru' => 'Фотоальбом',
        'en' => 'Photo Album'
    ),
    'locutions' => array(
        'Для оформления заказа нужен хотя бы один товар' => array(
            'ru' => 'Для оформления заказа нужен хотя бы один товар',
            'en' => 'Ordering need at least one item'
        ),
        'Имя и Фамилия'                         => array('ru' => 'Имя и Фамилия', 'en' => 'Name and Surname'),
        'Контактный телефон'                    => array('ru' => 'Контактный телефон', 'en' => 'Contact phone'),
        'Ваш email'                             => array('ru' => 'Ваш email', 'en' => 'Your email'),
        'Адрес доставки'                        => array('ru' => 'Адрес доставки', 'en' => 'Delivery Address'),
        'Дополнительная информация'             => array('ru' => 'Дополнительная информация', 'en' => 'Additional information'),
        'поля, обязательные для заполнения'     => array('ru' => 'поля, обязательные для заполнения', 'en' => 'fields are required'),
        'Отправить заказ'                       => array('ru' => 'Отправить заказ', 'en' => 'Send order'),
        'назад'                                 => array('ru' => 'назад', 'en' => 'back'),
        'Укажите пожалуйста адрес доставки'     => array('ru' => 'Укажите пожалуйста адрес доставки', 'en' => 'Please specify the delivery address'),
        'Укажите пожалуйста контактный телефон' => array('ru' => 'Укажите пожалуйста контактный телефон', 'en' => 'Please fill in contact phone number'),
        'Укажите пожалуйста ваше имя'           => array('ru' => 'Укажите пожалуйста ваше имя', 'en' => 'Please fill in your name'),
    )
);


/**
 * Завершение заказа
 */
Micro_Init::$pages['order_result'] = array(
    'tpl' => <<<HTML
    <!-- BEGIN success -->
    <h3>##'Заказ отправлен'##</h3>
    <br>
    <p>##'Благодарим за ваш заказ. Скоро с вами свяжутся для подтверждения заказа.'##</p>
    <br>
    <a href="?view=gallery">##'Назад в галерею'##</a>
    <!-- END success -->

    <!-- BEGIN error -->
    <h3>##'Ошибка'##</h3>
    <br>
    <p>##'Во время отправки заказа что-то пошло не так. Пожалуйста попробуйте повторить заказ.'##</p>
    <br>
    <a href="javascript:window.history.back()">##'назад'##</a>
    <!-- END error -->
HTML
,
    'javascript' => <<<HTML

HTML
,
    'style' => <<<HTML
    <style>
        .red-star {
            color: red;
        }
    </style>
HTML
,
    'title' => array(
        'ru' => 'Фотоальбом',
        'en' => 'Photo Album'
    ),
    'meta_desc' => array(
        'ru' => 'Фотоальбом',
        'en' => 'Photo Album'
    ),
    'meta_keys' => array(
        'ru' => 'Фотоальбом',
        'en' => 'Photo Album'
    ),
    'locutions' => array(
        'Заказ отправлен' => array('ru' => 'Заказ отправлен', 'en' => 'Orders sent'),
        'Благодарим за ваш заказ. Скоро с вами свяжутся для подтверждения заказа.' => array(
            'ru' => 'Благодарим за ваш заказ. Скоро с вами свяжутся для подтверждения заказа.',
            'en' => 'Thank you for your order. Soon you will be contacted to confirm your order.'
        ),
        'Ошибка' => array('ru' => 'Ошибка', 'en' => 'Error'),
        'Во время отправки заказа что-то пошло не так. Пожалуйста попробуйте повторить заказ.' => array(
            'ru' => 'Во время отправки заказа что-то пошло не так. Пожалуйста попробуйте повторить заказ.',
            'en' => 'While sending order something went wrong. Please try to repeat the order.'
        ),
        'Назад в галерею' => array('ru' => 'Назад в галерею', 'en' => 'Back to gallery'),
    )
);


/**
 * Справочная информация
 */
Micro_Init::$pages['help'] = array(
    'tpl' => array(
        'ru' => <<<HTML
    <p>
        Для того чтобы заказать понравившиеся фотографии, нажмите кнопку <b>"В корзину"</b> находящейся под картинкой.
        Если вы кликните мышкой на изображение, вы увидите его в увеличенном виде. Затем в разделе <b>"Ваш заказ"</b> уточните  количество.
        Если вам понадобится дополнительная обработка, кадрирование или другие изменения, заполните поле <b>"Дополнительная информация"</b>.
        Сбоку страницы вы увидите общую стоимость заказаных Вами фотографий.
        Дополнительное редактирование, указанное в поле <b>"Дополнительная информация"</b> оплачивается отдельно, согласно расценкам студии.
        Если Вы уверены в правильности заказа, нажмите на кнопку <b>"Завершить формирование заказа"</b>.
        <p>
            Вы увидите форму для отправки заказа нашему администратору. После правильного заполнения формы нажмите кнопку <b>"Отправить заказ"</b>.
            Если после этого вы решили изменить заказ или отменить его, свяжитесь с администратором. Печать заказанных фотографий производится после предоплаты.
                <p>
                    Адрес студии: <br>
                    Тел./факс  (017) xxx xx xx<br>
                    Тел. (017) xxx xx xx<br>
                    <br>
                    <img alt="как до нас добраться?" src="data:image/gif;base64,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"/>
                    <br>
                    <br>
                    Время работы: с 9.00 до 19.00, в субботу с 9.00 до 17.00, воскресенье - выходной.<br><br>
                    <a href="mailto:easter@tut.by">easter@tut.by<a>
                </p>
        </p>
    </p>
HTML
,
        'en' => <<<HTML
    <p>
        To order your favorite photos , click on <b>"Add to Cart"</b> under the picture.
        If you click the mouse on the image , you will see it in a larger size . Then in the <b>"Your order"</b> specify the amount.
        If you need additional processing , framing, or other changes , fill in the <b>"Additional Information"</b>.
        Side of the page you will see the total cost zakazanyh your photos.
        Additional editing is specified in the <b>"Additional Information"</b> separately , according to studio rates.
        If you are unsure of the order, click on <b>" Complete order generation"</b>.
        <p>
            You will see a form to order our administrator. After properly filling out the form, click <b>"Submit Order"</b>.
            If you then decide to change the order or cancel it, please contact the administrator. Printing photos ordered after payment is made.
                <p>
                    Address studio: <br>
                    Tel./Fax  (017) xxx xx xx<br>
                    Tel. (017) xxx xx xx<br>
                    <br>
                    <img alt="how to reach us?" src="data:image/gif;base64,R0lGODlhUwF4ALMAAM/Q0fX19vw7FOnp6ri5u+yfj+p0X8XGyP/EvNvc3by9wLy9wbu8vr2+wP///7y9vyH5BAAAAAAALAAAAABTAXgAAAT/cDX1alU468Xk+iDWTJpCThVTgR9jNswROHRt3/QAV83DLhiGMHVpLYipBG6JGxxUnJDmJBqVXiFGY8bsOgIAgmJBOAy8S/CjZ2k/TEGKZfeIcdE5GHvdU7imcmsXGT8eUiV/DSCKHwQAd3g3H4GDVxhGhUIjfyIldRaTk2NaZ5E1AQ0ERIodkySUb1EScwplkEsDkAkHBC6Mop0Zm1qvGIJFpKY4CQQECbd4AU9He24qcyrXbXbKTgQ9e3BXbsWFP3ucFD9+DErKOGvpPSrVI273FtpDbZ73DM7vaDwpRkGbtSlsqgkxg0ZHKQdhsmWz1gYcPokUUPj49jBggo6R/xIk2OHLj5xrY1hc0TJqizJpYkxWmxMrC498+HLqq1AGpEceE+zdTEEPySeKnwzyWDQCxjVu75jdhIMTZxAXFX39AxCtgTsHA3qpGGMPiqGZgoSuYediiJ8HPgOaAiNEThVK9V5VOtkgLhMwBCZtO5pvn8WcFdUmBGJL7qmRxu4lrCPEoFKcmuZMvpytb8CwQChOrBiPnAsOD752kaYaMBw22RZJ2Je16WCKfh0z8VZaMxEtSG3Pe+PHszIAmoY/vYg2M3CjQ1kp4Kob7JNWgfIi3l6P3NA64AC+k6Zt8vaqbcgwRCONug1UHWD5YNH8vGQVuavXQM6yqH3/3mlxBP94+S1jWGJJ3aYUWoSxgVqBaCTwD0/PcXYMeohd45QgfwABC1TKSHiZZDSRdk0zj0QCgAwBDJAAAAAoERZW/KiU3TGHXYhWKu3o91dEOuYkVHc5HdGWeKYMMARwDOKzh0KUAQVbT/rxlwIAD6gS5X8kZogjdDypFglocuQo5CfoUCbmDS2KxMsBMMaZCw3MKJWSB07aduF5W/l4wy69EGffMN4dpc2AYznyjg5a8lSAAZBCOuCZI97jyC0tzsXLpAx8AUAtxnQIS5Mc7jUpbGhaoKgNu8yZBgyBFDWiNi/ExhF7Lw6gawDQ7KdlBnVR8JaF31Gk0KV+0rWPsHEQNU//ml3yIy2yST6hQAECZBupAdkKUMAELP3mxhEcgPPPmjTAaEoYsahQwwARnfYHacVGNx8IoxkEm0v7xXiAV9CE8SFJKZgZ2hhZrpdsLqisIRhS31lWL3qpyKAfbzPhOynFF5VYaWNzYeutTwGIbIArxc77wSbGpQFnr8v0MuANTvzDiAk8WEZqK7PMmo9q6kK0IsA1SPjBeTPZA0MLDKSY7C5wOiAVHBvzgdOTZxYGFAcWOzZAlvI5jK/V0JnnZG9zgIwHtwjggYAAJ3+4pwnqwcxq1xHSiAsvHeyb9VG/HE3PEOg0fYcOMzgxAzMukaeIZnoMlpmDHCB53AE5AOAi/wANpHiAElLVYSRpw+3ZlKxRjsaD2h4NW48syx1DDBJ6FjziBFSiwS2ENAQA90kT18H6Fza4eMZIvNfZQBfe7IQhgD78Uu/gBHT0YrrugDGnwG/4kyBixfH+HnIAgQHjM6eYQVdoEJeY4WVCsYNuiHXgRR+0GJqpOqpZtLwEtwHxnQFIx4OC9IhmngnALlZ0Bl2ZghkKaAjfMuKDIDSlHiV5gftW5x42dQ1eixODUaCXNHDUAm9JSgUQ/Penpn1haXt6CpTE1TELYCB3F0sKAyDVLQGUiV5dKouUhiKCNwjBL2+z22rgdg8RkIEBfhnJi9AnDSUuQUIh4Ru4uqeWbf8kR0Enwhu80vcMVCghAICjyf6AqAKn0U9AXIMG1B6ipD1txzLwO8okhlcdHWiBWwbAC2GYFLwaes8p6BJA22oANya8bZEOeNtTTsMYheWAjqsCixtDNBdAqaJS9onOEU8BxeI14F8pYtdNNNQxKM1vNQLDmQsyKbUDWDJdjeLYUEA5rspt0k9+ZGKTSleoPKYFKP44YA3edoNsxYVtNhDmUrYCDSV9xQlcccJDrFgdBfLtaKXaoNLW8olMsgYXXBCRGkMpCBxWKzAaiYUC3MHAv/ACYknTEKl80Kc0cCtbBaCBAdr2NpFpy6AFwJZBB/gAg2prDZByg0ML0FABwID/W6n4J9wEUFFtuVGRzWzkDd7mLRu8DTPKbELUencABeCNGR30E5s4FxggBjEbo8Bb0FbzOHGabQ5k+CUemKEKnBlKCzPglRdqRpuzdfFsb3kl3NqGrbYNNIk0eBQNFBkAAxSApAMkABP/qQpAPgBS2sAWQ7lFgEc9gIlvFUBZs3VWA+zQAI3xHSQG0C0c8NAAzWzUrd5zA+S4p0V3MBotZTrTf3DCHkaFjQZEhyQ1CNVXG8oHHawCLMtFAjCdoWEqLhszPlSmUMd0Q5n0kBtmLlMADvCqAe6g1dgG1Ktvw2uWxNpWufIBW3WdA1ppo1aKVnQi3KrrXf8hA9e+9lEB/z2FIkXKyG/VAYUCSRFrpIFdZd0wpowdX5bAiY+UMIInmKMZ54QauicJBXorc+dn70mYnIgHDK9EDqK2gb9kFiw/taUBM6FZg9qSdGSKpC/cIqoqjmp0gN66h8gsENETWVSsD61YgAWsSGzZwMOQukGF0YeD9jjhKzv9An0vsNjwjs+xHkuBSvBziuIZ9g7wQSba5lY57OJhAGSQD4NccIZz2tMX0YKeaVtwSxw4t62A9SpIswpYKnvVAd6CCW/ZSmEHh1WucG2DWIF7Vt9WgFsqUCtDs+ThD3N1ylgOaJtrgNY1kRginj3cEyAXVG4Ck3wXqAYLOoCkBKRmr7ZMZ/8HvBgtopD2R/9gnwzRsxA/K4lGXiIHG6ilOwM4gVsF6GoB+LpIAwtA1A6oqjTGmq1vmDWiY1brmeUKXAa3uswcHTOkHDTnrJ46tlV+2xl6DWySqW0kvfKjZlfQZxczj3xY41kc36WJTXIBXlwMG72E8MrdsAtaeHRDi5mgztqFkppJerAjBvqFK2v1kbb1tbZ64VC4PrgCE23oABvAVgI8GMwDZHAzxCpi2EYSpCE+eEcEgC7uKszQIBHREShxFU6zydlMTcEYgKUAkMSoZndWsZb6oJOM1IKFQ3WKMagAsSV5tgthCMp3dvZyLxiaSSf0M7n9bdcJEck7qIKWEHX/PBw4x9bgwPbdIuGdA6T3rgYycMi7OoIcq9GKJLW47OecbZ1A+YAPLa6idZQpoqYWC5x89IICo2eOh23JGk1mFVfIo6CJcTsqZh+tzq+YXEGtU0ebYKeO08LvKm/V8ApFuu+iC+zidS1GYPFKiau+T0P5eCHiiwrfiPKAdD5EJFPPAW0qZI0jPdplvbjTymRh1ILpuAy7sWUpLg2C0sTOiCj3QhhCE45m6+ZR34ic5Jads9sUskJifUhJGbn8rUbXdxHvuNTcoU3Ha0mfStFCom45CkdkvpN8O1fRTskwHwOp9NICT7f3Fhhy0ccI2u4eFFxofTFB8HHm8k3aIU3e//T4Xi4KFChPJXQRA3R3ZAEitXg2sDsLWGUJp1Q5YAZj9HTvokId8xxEwGQdURMo8n2fBSi/NBJmkGJS83Wu5yQn5IHKQwLvxwLrhFM9wDSzZ0sf8TlThEsahBT7x36tx19CsIN/UTSEc4ExlidCUjo90HzKIGze9DIslWjLIDqzQBL7cHsjUDc14DAb9w2n5xgKVAq3sAtElj7zsh2j0IUz1X58AARAIG0rg0FDwYZI9QXU9zkxAiO8QgdDaHqLsmfEgg25F3vXNBB8InhcsgZV9Q4FBREssiLZwwu3AABRQGkbpForxAU6SDRcFxa3tAso9g0V1CV+UHNLtSnDVP8TK4MYxJQlm7R175I4S3IhdxciZKAQhYNSEGI+m/MuvKAcSDERqEMTO4IE1wBIpqBQuuJGYQGGruIp12d8qlgPt1JetVAGISdTDhd3YNEo/vEsBRGIXXBzZGN8qvcWZnIRyhQA0rcEu5cPT1RkD2QShuQ8zZAfnlg0TuMNqzgPC2KIhGcpBOZIUwUY9pdeHhR83mN3HFIUD4J++WCNGPcIc+RBtwMKWPgS52dI9+J2OmFDLVAK1/MYoOcA99QHg7UuYnEaf5MeFCAm8BInuoA3MLFZdiSL9UU7J1gp/3RVAoYAIsN4EOE/E2hK8VGToTQTo+AxWDE4zOWBDTF3I9H/QcwQGsCRfeNWimKAAnUhO/63CEbZRCbQGC7SO+v1IiwyEDn3EuE3WQjCIPjikiFnPpiyYu3TkQHCaN+DbxrVLexmIA9BgnXiOlhjlOWBGaVxQX2gEYzQC9r4gbqSC64IgWBBGW9RfESwflG4aKHRf2lESbMweHaiNLTUHomVTb1gcRIULht3G/lXhfOXUk1AgqfwbdzBRvFgTKRxI82wAK0BI59zbe3wkn9SU0aRJkRyGENoQzvWIIVhOI4RBjboiOwoQqtkQyeJki54TPyYl/qiE+YWCygGXgwBUxTYEGY3OyXSRU6hIUIAXnSyjsSThijBFKoTWv1oOoCTf80Q/3La1CL1BBa10BGghSBgcpP19RzDMRnniCM2g4ZsskB2o06VCIQltin4cns7cZ/5c0ePBxKKQ4d4p31J5o/odjdJ9SIfhwNV5zA3YyK1WUhb0gEgIQ3Wwy9g0DUzGX/VeaCD8kMrmTOBcY3REJUkM0Hu0557F3ntl53diSGNtkvoqSoW8yKHI3lyISE3omkLiio+CCJgQZYJJFTsUo6VGEN1eUw31GRiZwMr5SnpNZWoYaD+qDWDl1ojdCGjOE9W9Jiz6YQv1lQ2g5njszQecF6qaBoF6l+SsSqOyDmuGJ/RUJKkUnmGCQp6p6KgczxxwR+rFytfeROrqGPfBQmZQv+SMUWCn1cX5QFurWQfozIxM+QUjzpTcHJKOCakXUcj8sUevDAKd8IKZZpaGGiZh4oMpUSHuwKmubh5WvOd0LEg+oAVw6M5dIKH5CYEITCplKE6iUoZMWVkJ3ZtjTmZzqORQ3eo9EA3LZCQsRMeMeATkCc1pFWqRRN+Djp+qKOtTRqsPuOd0HCj/7KnqeAbkqEQPyCMqsg6a/oRnlJN9VUfomE18wBOJ+cTiJM+XvGfS6WHYXNazRE7CHOFRRACbMRLmFevEZhOMTUA8zRTVhoisRisN1kZT3J7Z6NjGEh/ZPmb8RqOTeVemjaytWcv2TdLlgQvgzg/X8NLBzgiF0n/gWs6dc3IHjzCmbsEHh2JrWvxKx4golxCBwUhHrsgEH9pfzWXpDARH9yqlKWnFpmhS6zEX2JGHWa0OOsXS3Vad0tBH9jgPuDQCCyUVCvintS2qpX6pCuAbn9JHdTqIzBRmZlVKoNTsx7pFFiykZhmiCkxhyomEoNIqk+QVA4kF7xRNboEHkx7szAqOyZwrNfmDC6SK39KDe0TrYJwsGuLD1GgBWKCX/7JK41bPGZXgDalcdzmTY2LTfBiS8x7Z5LJHvFyiMbiMHeHDOtaTGjjXpbjDe7QKmxySprUCyoYpycBSlX4lQDytto5vJbyrR/hIrXwFXTHeXXpH2ZRe/tE/wwDsgktewp0JJ24UBxoUZlZSxmQGbws5QwtErtVSrhpwD2JQXqGUiIpSAOCMREJMUNEy4pgsU1DAyc+ISEwUqLP+yO9YB6ygVo7QRazIRo5sqAX4cALtE1PFKUH+BsoASCqxwEHwl/zswvXtiY1EwQHa6cVkYJGxo78QjOjeK+uMTreY3a1wmmpmJzS2xmJ8wAKg1hMwAsogmMHkBpYOax7W8V/gwkZkX11Wh9J2XATWVhiUK4/ay9OapFuNyKjuCY9S6UuwxJF3I/ZgCwhCXNwUVgTMm0o2YPVqcZkIMY2kIpoUkIpg1OVlQAulR/e4H3jUwayhwu7SRWHQrLfU/8e17AOnzpOX8kB/auiChO7Z8SsPIq1/eWQ99JTOVMeGbBYXNAeard7fJsqsuicEPFKnpc+8CQgFMoqMmOXlvJwSgDJLkqASKDLnSN7//oEW9wivDB324wpzRMZt2sI3WoR60CpBmg74Diodxh1NGnERmkegQceF7qj6IGanBi7gzt5gcEz+XIM36Aag6yiHmqhTTEGu+qzqTu372Ex65q7hwSIzwt5ChS4OTCc+5kHpDjRYuGO4vxeBXuFK1MpEjEaDHKdPOVGyKYkH2K7tlPHmYEJtAw817VXH8Er3hQXgLF6CaEP8vU1DWdJ4gg9FdsNBFMqOz2LbHoGlCkBxcH/lR3DDmcAI8ezxHOJcgrEsF23ft41LErGniSiqipBsCQyHCYNc+AFearUe6L8H4ImC2UKPCqQdnJJJwGTS6PRxL0SBjP6st5VoKxF1KG8ApeAQxMIeVKCGuZMFNmDHFBowluRGzBBuLfwzaspWk+VGCDNkTZrQxSQzPshxEVGl/OBHcSQv6skbT46GL03PCdGlriqPFhrRKT4njHCK1JEhm2IWvyUzgj0DW2xApYLuo8wuIKQEsSINLq8XlFUBb1wWdCZbMJcrzKjo5mGinEqMXjaCA4ce3ajjhhIppSqL6tHu1cDlpRhSRCoAwZ5RSesD7ztprYUvIxCvUdqBeWS/3k5lg8nJ793gBzP8DXTREiXTRSw98D2rLXEwbsl5irOW5JxKSHXx6U7kx6/EH+bZdCCWmO11BEMLDV3bQhGVbRgonqKkZD8JNvwiY+7OH3LEDnMRar58bwi8rdlA9zsMNsVatc4uiJ+uiIzsDVxukEGAYQKBLpZadzCo42Mk1TdLIKx6VhJE7TjWI7DeCwZni4fVIdwks+wvcPtbEgxeD9kI8FFICyj9BjphKK9MhI/aG2z2svwFIOjwgaV3cRquc+Woy4TnU4yENueOnzolaQCoQo7AM7ViMCZQ08F/gVFNtmmaBKcgp9HLB+XQALgUda610/1emeQtynMgmRAFf8KZjgWGhq39SA/u/GyUxt5sFl9Y9KL6Ic/hh5U7xBzdDSrQHxJ0LjZRivoeHYYpdOGqoCrUqOw7ILobJ4cTjGYhpLBnJfZqHHQ9pSS8stCY+vd5dtERfxzMasgwkEULIHqfwLUvzS6vpLizIOtw5JGNcmPipB1e8efsLkeTvCV+5gwvh4652aN/4rVCWyHgQttp7JPUS60R+PZGC1Ds7fE6UIdEvKpmLvBZ1ooH6smNJM4Uq1J3Y2HElIgECTYX26TVbFH9+oyqjGesYiE2ylmPvZjcoqorCDtNvDcuGSxGTk4oCpKR+WGCM/qVlMuXNCzYLDEUqEHoZmd02OXRGL/w4kLmyqWjEqgjXyaAxnty1p4bm+3kahpc7XdO1aKh2Hg29gNG9rQ8xWYS1xKGpI2Hd0dsFBXPeXJ6LCMuNBhXk87VGl0CdzQHi/SOTgGGDbFwv0HSmVhGOdqdeCilbpskBKitLeETXMZx0tREARqdzPhpbGnOf/JXR83DeIAzvRyBFsfqTvRzv5BCYEKM8gBknOoA707Eqmn2jmvE4xR8hmJBH6QPR0egZgDH30Q4sTBDmp0CdmRWRC7Ct3TzDGpK28udyZvSqBIE8Kwcsw+LoTAMjFuHG98o+SDFfYgaUzJTzr7Iyg0kzjJzMcSd3SxIrfCKNMRl4A2jEFCBCax/91pmPXNiS7La0t0AgHkqaXau0/vy/ACwQ17GHP0RnUtPeYIHNkJgGOY83k4dF9OEFIpTYMSUnBYpEeosjHhZgnALICrJRyDhnRAkBAVkqKyaNLObFIrNSYLNAgNIqq8NDMIt98A0ACICTggCEx4eds5OGHJ6Egx8kj78RkkSGpaYWig49tZ80sMYljQGIKC/HDiJMmow1vyuOhMpKm1OkjzpKwRkjWFcsJUmR05ahAxRYOTq8pJmDyA4fLAvFAA0NtkmWPbOvjbrSTEMNnOMCtRYZwAuQykhCN0dgAgmHyW2wa+U+qO9zHgAYFkpTR1gCHDhi5v9S69IlbuA7JS6P/swALGblOGMQ1uURKYYIACaQBMerNkrk6KIyDY5RnhxCCyMQkdQLPxZtAbAFoIMVBA5BqNP3M2pShUiwuWBA3Eybvk6uIIi3YoJDGxYE+Cjwr3vOFxj1eCgSiqbvgH8JmJYRaWsCoEh+eNAdC4xgGajkXLBRYhqqvD6lUHOy8a5kjEo0uAKwMc75DjdwXfYfxQeOgbglMHeDLqOpD2pikVeAkWkAqqbsInMEBNdIbTE3FTAGwspf4layOHDnReGoEyQc/Tm3PA1Z1HVBpXxPbCtLCQumZXSodcvzyxGYXYHHVFOscx4MQvycroKKjMpMV6VhGZ/KK657Cfk/Jgt2H/q94VHQxJIkmcICjg1KEAuCPMqU0neP4AC5ru5DitBU50qEEO4mp4qgYpLEHlrBXOcgSW1xLTYwBLhAgkjj1seCqsvMQY6D6AeuEnMKrQMaGLHxIAJxF70oPIQ1k4ecmyV47kB5OvukvwkDQwrKUXENALbireNuCrFBgx0SoXe0xqUgoeD1NkjnaS+CEA5kACpCsOs1unyqlOUQaYWbRiYM3HaHBMii8FOcAjH5oSAp0x6FGLT0IoUK2clSYDKhE1ATlskQr+kjBOPLYRSj9MS3DHJnlEu08kxCBMT1NYslzhtNOSIioQ+qSZQtRxCNKgr0StaK4BfGggREtNXcDo/0qMaNpqxr4SIYTMGrJyB1G1dLI0OP4uQ8GCJQepbQdosFgkR8DcQ4WRwXCkqlgKYGUyVrDi4bCfMoK0iKIQWo3wVxvgcJDXGX9E5oFdFfqVh0nCCrhOjDpt1IVPsQyKuNgELc6mz5gEg7tdYwgFrxAffm+gJ2v1lbQt8mtP1Q+tbKXGFoh9jwFp5bFLEeqAJaPRlbFtJ7OKYpJvR1sHnoIgNAcWryEePVvkqgAncAQ+ywgbbypHqIR6jAVklCcXQggQczilcyGaYwu34A+4vEz5WIUx8GnKG9mCSE3e8tg+Y1MMjMCan0gU8CYUIOJi5tcfsgGKE/RSlVODxYOq2/+1JasbmujiMLD8EG8c5IEUmSiyEwoP9SIB5JY2MZwGHnscvItsuLYc8bdPtsCJRuZVxpNBGvJDhmDlbZxc4EmgDJUmNtncKZtWp4LsXUepfcqdHc/VUMiDyjPRMb8hE6AgBM586JE8/zwZFpC8PaNH93ZC7Bl5XPILjS0nqtDhrmhCJiNn4d/xbXvQgUmYAadY/MU3VTqHvaSnjgpMzl31oJiaoHGzHWVFKsbCktSKEKruDYorwTJR5giQqFuYRBTQUqDPHnZBTVgmfcVDkbO+5gxLzGxglnBJXLigCpe4cF6OQAbhZDOxxFxLPcca3WSEQQStwGYQcNMR/XQgkKP/6KwYWCoBJsTAriuYKh5/IBLqMqcWHoDpW4BQyAnKt4r1QKIqjzKiD4nxOSMIYU1FA4evegFAKVLDNQ/Qwig4ob9+hEg7atMCt0zSJh1874jnI9JZUoGC9kFhfsXhnfOkCBlG1OsOSXCLOiJzsFzwKHXFuU4JLrlJK3QRTDYoRDaG0ZfH1dI3jNPEw4iQm1yh51LFSFYbgBAui4HRho00l47sMQQKJC5Eb+GbBaLgmQlOMQbZSJkPOyWZqhhhStKRBGKAAEgKwc5yYUlX6UJEpdQEjWngAscUm4IewQCFcKycVi8MuJ4NrCKJxgteEQjDsl26rxJf8gwYvGbOejCC/yQmCtc/9Zar9lGMQlSQGQ3oUIFHQBMm6WDJPtypHC/4Cp8zWtQKsRTEUgHKRALEWc7ypgF2nRQkTePZTHkYIVgM9CJAPJZAmxBEmd1iEAzwE1JpVolrEoQOYhlF496YS4p6zgQA1BA0jlMPLYgHZENKBzq0k4p1iYoLd9ToMS+2SUsMSER4OqWGEuoTmS5BKxa1qRUQBzWqgDUmrtISyKaHvp5STzhzuKOa2NCUZ6SOMUcthQVwkI0ynM4gLVRPCFBTgipgKBe14MMhUiXWcRULgTUFjWNh+gyR4VNKwrriCEZqylqpoXkb7em6opjXb+QHs+nMTMJwp9MiqY9lov+caXYU2r043CeEFAJW4jYRg5QGCgQH4CkCV6LA2mWPcs6wR3vORSeWXaMvdqRQ5QQRpWW+5qTLrNtl9NAZNfXEeU/0wx70cIRHui01HczceFIlTbyVwJueIx2A3jLRjOyNQIszxRhG2p372oOP4vwCKSzEGOwSQgACMEAB9hBYK4qhAlOKBHF4cANq1fUsoQxro5r5ADJp0jMyug3fiopP6xAJCh2xzX0rTA6gJOE0GtkU4E6qz/YM0nYdKoOQhgez6WXTLxoMxhPmcLNeoFac3/NAXAJAAAN82Mwgpol+EqwCB64YHxxjmCkI2Y9qaDEy3RvJJJ44RTmkx4F9jC//WsSRBVzQ4w/ahKR6PABggHRuLxQJWGDIk51sDldhnlyYC18Rgj9TyEKffS5irkmEuBTgzGcuwAGKxYryCNHGULocCwhpyCvdr1Z/SAMXSmljVPbFbxOmHxWFM6KD6vmzdMvijRS9Dt2Qk34A0EpEvPlkqQpWZ8TA1DPvoEFINJChQNDCMrdcCa+Y4h6nPrMBrKOEqf7FAomU1B9gYw95ycQaHkpCTU14hdDwqZp6FQIIKl0CiSENVMvwTKgJDQeSXKM/n6p0k917w58YJBkZ0N8uG5WybBqwXtY2reMmvisudBatrcSLgQeAbjMbQDzpHKwYPBBvp0iLQ5XRzBN4/5nB+fEggJWDShMeR95xs5ILs80FGpkGKOypxhoLdg9Svg2VBT6BA8JQmKa6edzfXjsiGr8MowPIAEm5aQuiTADLP+xyCfSv60poZkJGkqIh7gByGbTd6Cz0q6UhhteegZChCIiW3fbxjm6IlW2pYXWg6h1d8Knj1IPAeAdj+QyTJB1p3ahsJhSIlhIirR0ykBaiXYwsKPpIDJqih7SrXd2kKF0sgHfgHuxuVI2sa3nPAGxg6ctwCcDNG3eTkcKzchAXBk1nAdD0O2xG+BTV7Muy2ekHwT6dmPoLYd8Oc8f5zPnC4wf1iWZhx/ydBsVZwAHKzHLsWl1voe9+M4D1hv/iO6S/Xg+zTbroBQWsiUclFIK+8jo2y6gli5t2cQhMgxj/UA1vQgbt4wTxw6GnOx/skz3tCLl0mbYearcoU6WpmxGnsAK8aiV70Ir1SzeCELh02joXgotAsi/1shSIYBhiA5akgwc/8JX6ADgtChI5uYb5yiseWKxAsAHMU7RV6CR7sQAhKavDkKUKCDTTAhHRqbyWmSoXKh6fagTWezZpiafochaccYcyMwAESL/M6Bu24UL2EKqICQ8v8oOSCI/E0SKYQziCISI42BPIMJoBJBYc4YhDoaCAKAmwYLExEaRrw7RTgLQFypFuOpvuIAOKGIb1sRIfuz+uY4KqCAr/zZAM8gqnsvkJfCgjAGitHbCN3tIKgugqcbG+7UKXN+qA00A+0xAJNQktq+K+PKSPn4uHDPslkLMiQhyYk4gD/XMKkVi3K2EhdsM4JgweH5ODU9kEn2HATYQ+mVhBFgQp+FAJt0sfR+Q9lDIKGmuOraqvm0AUOBMBrQikOYCctMGeOvMhdFGlxbIVHmgqA2OYCTu+W5CYqJqajZOXbYqRruhDmCINi9mInHGjWei2J8PH2EMuM1CAHKA3vsBE4+FINupEndkHkcy0ZzyPgQC6eCAUyJkuyvmKjuGV72mJySqQDboqfkIiV+Aj4uiWoyKGdaEvZjGroekFrNC0TSGP/2LIP6PSJFJRCB05BGEZQBVwiYszHl1Sgh2APY5sobMoH9BhwZGcFxvpQiRxhR0jGoLMjAKksEtggzLylx/Jt9rbLFVCxx4TpTZMGWOsux0AC/7YDWNEG4taA6L4FRy6rPMpluwzjGeYGZ8bpskKwCu6G1VAMGZTGWUYEsAjBaDAupATuNDsITOAP+GhwQGUSGe7ob3qPi3Rl0JhEXiIkui6s4YyiNfwg676iYmapK/YiT5QvQAEhklQxN1anb5Em4eIo2c6B3XylBsRgiC7BX78BgXJC8ocHZnQJWvznbbzmQVywZT5TgXaPkdpGy7cvAYbiPprNEI4oI5aFsTok/+wWKURhBXZ0YPFQJzOIocC66i9SQ1b/AZT/AM/MROC2JCciEyt5LsA3CWfii0MBCm/0QON4TUMKcw2uATVCBJz0M6qeSQ6CCMWQL/g6o/hoTMJPdG3uMbOpDy4mxKrFC7AZM9gFNFa08nUy4bP4oUt4E8hwJ4U6bOa8ArPTA3zgjSqUSrGuDE9wgUw2C0FVYSDMak0qoOrQLEYq0hmC6MPcgYq6INQewZcMSw5MosJFZ6NMgKvAkX+2dKGcZmW8Zt++kyQwjoxCML5KsTZABVcuoZ7Sqh72FPAewjkQRtXiTvVu1FDqVPh8IQ5rA8m1Shboa1T0bMU6c8fq6R7lCT/JYA9dzo+SH2lkxsUtqASofAQibqIEyiQ+VJBNUTRzAwMn4KI78zGT2rUYBDCslkm8GQHxTkNpRlUH7WUTtiQy5mmvxyXDTQf0XmpBQET1hFTwDtM3tmoWy0eEZFTDmimP+uFRHIM0thTKkrMNbud2KqTFHgV+GrUJOpQxTwfe8OD2qGJwcCeU7opMmAcHGkmEkyTNOlPATEJsoEeAmAMG7ABT8rWvhpKJpWg9jwmzwAV9yOBXIWZKqyGVzklBjG6OLKWvCHGs5AALcCMXMUgFl1CYngE8gHPVkGGNKMKWxS7Z+jPakgczCwCL+NTx5IDX8iYPbiJo5iGgZjM5mTZ/yvlNHroO16FnWwwExizyZZtPr+Qii4BMNMY1oDwWDOdUw4NK6uVASMQW2j8FM+5OysqMHy5l+BhiZBcygB7BazpyAuoz2/YA4lZMWnQ23gKgqDBJj91Cy7UIqxSMUbrluaQAAo0lACpDFVlG8H0npRMFIShQDfcG6WMkyuDDb5xD6DKlqq8LKloMrvRjFtdMHYouo1ZJossLnIBGx+wMBiIg5kd04SgtzhyAcwVHvn4zSmSXIA1Ghg7kuGbE2bLXXwNCFtgK/cchkcozekJkDyUgafZRI5rTVAsLkm6AHkFP24ouD7oT3Sdyk5BhEaSXXAAVJrdW76tvZ8o25xKB//fHCbnoc7n2ShI5NoQZTXNDKLvrQ5GkqIJzF9LU48n9IEiS5vmkyNW4T6Y2968czBs0wT/5TPrU1Htc5v0ZUfx6ImbIQtzAFqzUcF9SFUhSYXyvQm6gCnkrA4gvcjSagXMI8vtAMHmsKeInZbVDbmy1VkH2ISmq8yfnDXTYqI7zUBaGJhRuE0V7Try9S6AI7uE6wO28MKgLTK+Co5OKgz80wXirILV4oXVRY8rTtMMRIUnIVWt9dAe3hUdVrMW7Ksn9oGpZNEzAKU2jBlNeJyC7IBaqgw5DuPEPZeQe0alsqYr4LCCcT40UhMXLh2xVFmVlcIx5g4inAG9pSAemJL/IptC8cqWxaGlxbEId9LB+1ATUTiPYWDjHMZKy4isuwKwCqRCDSItWmViwBgCZmpUDS4n4fwp2eupDauEO7M9VURkpplMx93EUHoqU8wFNyOj+w1dB94Lbsw7PR2ma4KNpCEKSuuPLslaZIJkeHUJFI4HGE4ZkFNm5CJGWz3L11XJh2hAA1tVlcqLQ9Fax6gNWqkEHkHFy6TaAbYM9CA9rVyAxDoM4COfsSVeROsZa+5XKtVHSbHbvSAF8Xsec5G9IRDURLnANQO7VbXe/OUfltCsV+BlzzgNXKJjr+MPLgkKw+lg8KAE54je2NPLEDWGUHETMTUNKdUnzYqQtMk2/+3wvO98leITnAUFgqz445K1xXDujl/dC7ahXXZ7OyT8wQi1QnrGCK5cB+r4ApYuXqmhE19zCZ5EPXhRtUvsL08uLM4a1pHgmIRYlId2K0C0CmteV9F4S1FxEBwq07QVEKnWSipT2VWeYwCdQuGAsJR1mUlOj5EeOMKoJbeBR5AoFAMbqJWoms6O4AU059iwjcOlRKsJ4u3aG/TKYZygGDCFnjEeHcE6Atk+jSoFAkQB0wdRwSZsXKkQENo1RE72ph/D4R9oTZjNIiNuQXW1ncEwY51qhTEGuttATUu7oPeNkT74DuCAQmKE16xoTJJryEQKAhywlMqd7ZDkCGMAtv9i9p3FIhCQ1LtFM7pgqQi4qFF4yVgkqKyqJF8j2Snobmnjget1OOgWPgXEtho8oEyRS2iC44r/62WKVUxM4WlWGljdWQRzLRdOvRRsEIRQq7vfTAnzQgIJrdrbFm7fxZWrwGgbLYdNlTP/vpEg+RyqBu+Bc++IbUbFFF1NnCQPiWqm4hegreDbTIX6ttmUJqHV4R1fDqjSilt3MGTlYI7eZdLVu7fQbMLSpAigaHG/E2TFPpzN5q6dtvHWLeJulNXQiZPBEyjJUklzGJ4k8tjNkDQnJxTYmbxy9SQrq022ytBB8eXhhbqK5T1I3R41cGqoEeoHxxKOEo79ZuWRDTb/E3SLK/YP57bxfiqywKCnNQRHdboWO5SmCxIMI6vbpl4bD7yR9cbp3KjPL+kgyBo6N0zNvIhxEgKweCEvvWC1xcHmsdhRqICwa4imwAVQHWvCyxtzjaRgNV7D8xAMnnFTrHHrHebaNZzXo/DXtVibIFxWnIReTYDn7hC7DKNeCkyV0eYtNaZBBp90AUFeCnMMOVAXYziWI4t2f0nLl/jOunSUbCHjKhFcXxr1TwxNUxXb9XE7Rmh1Vx9PUR6o6PBjyIlR7fxd74mKS+FGezGHe29tkgupteUIYejWjsc9KO1jpObrpxvjE9O5K4934I2eBvrZnef5nvf5nwf6oBd6VJ7vePEY+qMP+hq+FaRP902iz5l1DqbPmDS2Uam3+p8l+ZM6up6fz673+q8H+7AX+7Ene7Af17JHe7I3bD5M+39X9z7ZmLbv+j6S+7r3+psPU7CPAAA7"/>
                    <br>
                    <br>
                    Operation time: с 9.00 до 19.00, on saturday from 9.00 to 17.00, sunday - day off.<br><br>
                    <a href="mailto:easter@tut.by">easter@tut.by<a>
                </p>
        </p>
    </p>
HTML
    ),
    'title' => array(
        'ru' => 'Помощь',
        'en' => 'Help'
    ),
    'meta_desc' => array(
        'ru' => 'фотоальбом, помощь',
        'en' => 'help'
    ),
    'meta_keys' => array(
        'ru' => 'Фотоальбом',
        'en' => 'photo album, help'
    )
);


/**
 * Страница 404
 */
Micro_Init::$pages['404'] = array(
    'tpl' => <<<HTML
    404
HTML
,
    'title' => array(
        'ru' => '404',
        'en' => '404'
    ),
    'meta_desc' => array(
        'ru' => 'Microshop 404',
        'en' => 'Microshop 404'
    ),
    'meta_keys' => array(
        'ru' => 'Microshop, 404',
        'en' => 'Microshop, 404'
    )
);


/**
 * Шаблон письма используещегося при отправке заказа администратору
 */
Micro_Init::$order_email = array(
    'subject' => SITE_NAME . ' - ' . 'Новый заказ',
    'tpl' => <<<HTML
    <html>
        <header>
            <title>Заказ от [NAME]</title>
        </header>
        <body>
            <b>Заказ от:</b> [NAME]<br>
            <b>Email:</b> [EMAIL]<br>
            <b>Контактный телефон:</b> [TEL]<br>
            <b>Адрес доставки:</b> [ADRES]<br>
            <br>
            <b>Дополнительная информация:</b><br>
            [INFO]
            <br>
            <br>

            <table border="1">
                <caption>Содержание заказа</caption>
                <thead>
                    <tr>
                        <th>Заказ</th>
                        <th width="50">Цнена 1шт.</th>
                        <th width="50">Количество шт.</th>
                        <th width="50">Цнена всего</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- BEGIN order -->
                    <tr>
                        <td>[PATH]</td>
                        <td>[PRICE]</td>
                        <td>[COUNT]</td>
                        <td>[PRICE_TOTAL]</td>
                    </tr>
                    <!-- END order -->
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4" align="right"><b>Общая стоимость:</b> [GLOBAL_PRICE]</td>
                    </tr>
                </tfoot>
            </table>
        </body>
    </html>
HTML
);


/*************************
 *====== PHP секция =====*
 ************************/


/**
 * Class Micro_Pages
 */
class Micro_Pages {

    /**
     * Показ статичной страницы
     * @param string $name
     * @return Micro_Page
     */
    public function view ($name) {

        $page = new Micro_Page();

        $page->title      = Micro_Init::pageProp($name, 'title');
        $page->meta_keys  = Micro_Init::pageProp($name, 'meta_keys');
        $page->meta_desc  = Micro_Init::pageProp($name, 'meta_desc');
        $page->style      = Micro_Init::pageProp($name, 'style');
        $page->javascript = Micro_Init::pageProp($name, 'javascript');
        $page->content    = Micro_Init::pageProp($name, 'tpl');
        $page->locutions  = Micro_Init::pageProp($name, 'locutions');

        return $page;
    }


    /**
     * Страница с кодом 404
     * @return Micro_Page
     */
    public function page404 () {

        header($_SERVER['SERVER_PROTOCOL']." 404 Not Found");
        return $this->view('404');
    }


    /**
     * Страница галлереи фотографий
     * @return Micro_Page
     */
    public function gallery () {

        $tpl = new Micro_Templater();
        $tpl->setTemplate(Micro_Init::pageProp('gallery', 'tpl'));

        $lang = isset($_GET['lang']) && $_GET['lang'] ? "&lang={$_GET['lang']}" : '';
        $path = isset($_GET['path']) && $_GET['path'] != ''
            ? GALLERY_DIR . '/' . Micro_Tools::hashToPath($_GET['path'])
            : GALLERY_DIR;


        // Хлебные крошки
        $quote_gallery_dir = preg_quote(GALLERY_DIR);
        $taxonomy = preg_replace("~^{$quote_gallery_dir}~", '', $path);
        $explode_taxonomy = explode('/', trim($taxonomy, '/'));
        $steps = '';

        $tpl->taxonomy->step->assign('[IS_ACTIVE]', '');
        $tpl->taxonomy->step->assign('[STEP_URL]',  "index.php?view=gallery{$lang}");
        $tpl->taxonomy->step->assign('[STEP_NAME]', "##'Галерея'##");
        $tpl->taxonomy->step->touchBlock('divider');
        $tpl->taxonomy->step->reassign();

        foreach ($explode_taxonomy as $step) {
            $steps .= $steps == ''
                ? Micro_Tools::pathToHash($step)
                : '-' . Micro_Tools::pathToHash($step);
            $tpl->taxonomy->step->assign('[STEP_URL]',  "index.php?view=gallery&path={$steps}{$lang}");
            $tpl->taxonomy->step->assign('[STEP_NAME]', Micro_Tools::convertEncoding($step));
            if ($step != end($explode_taxonomy)) {
                $tpl->taxonomy->step->assign('[IS_ACTIVE]', '');
                $tpl->taxonomy->step->touchBlock('divider');
                $tpl->taxonomy->step->reassign();
            } else {
                $tpl->taxonomy->step->assign('[IS_ACTIVE]', 'active');
            }
        }


        if ($handle = opendir($path)) {
            $dir_content = array(
                'dir'         => array(),
                'file'        => array(),
                'total_files' => 0
            );
            while ($element_name = readdir($handle)) {
                if ($element_name != "." && $element_name != "..") {
                    if (is_dir($path . '/' .  $element_name)) {
                        $dir_content['dir'][] = $element_name;

                    } else {
                        if (count($dir_content['file']) < GALLERY_PHOTOS_ON_PAGE) {
                            $dir_content['file'][] = $element_name;
                        }
                        $dir_content['total_files']++;
                    }
                }
            }


            // Директории
            foreach ($dir_content['dir'] as $dir_name) {
                $gallery_path = isset($_GET['path']) && $_GET['path'] != ''
                    ?  $_GET['path'] . '-' . Micro_Tools::pathToHash($dir_name)
                    :  Micro_Tools::pathToHash($dir_name);

                $tpl->albums->album->assign('[GALLERY_URL]',  "index.php?view=gallery&path={$gallery_path}{$lang}");
                $tpl->albums->album->assign('[GALLERY_NAME]', Micro_Tools::convertEncoding($dir_name));
                if ($dir_name != end($dir_content['dir'])) $tpl->albums->album->reassign();
            }


            // Файлы
            foreach ($dir_content['file'] as $file_name) {
                $photo_path = isset($_GET['path']) && $_GET['path'] != ''
                    ?  $_GET['path'] . '-' . Micro_Tools::pathToHash($file_name)
                    :  Micro_Tools::pathToHash($file_name);

                $matches = array();
                if (preg_match('~^__([0-9\.,]+)__~sU', $file_name, $matches)) {
                    $file_name_cut = preg_replace('~^__[0-9\.,]+__~sU', '', $file_name);
                    $file_name_utf = Micro_Tools::convertEncoding($file_name_cut);
                    $tpl->photos->photo->pay->assign('[PHOTO_COST]', str_replace(',', '.', $matches[1]));

                    $tpl_buttons = new Micro_Templater();
                    $tpl_buttons->setTemplate(Micro_Init::pageProp('gallery', 'tpl_buttons'));
                    if ( ! isset($_SESSION['cart'][$photo_path])) {
                        $tpl_buttons->add_in_cart->assign('[PHOTO_PATH]', $photo_path);
                    } else {
                        $tpl_buttons->remove_in_cart->assign('[PHOTO_PATH]', $photo_path);
                    }

                    $tpl->photos->photo->pay->assign('[BUTTON]', $tpl_buttons->parse());

                } else {
                    $file_name_utf = Micro_Tools::convertEncoding($file_name);
                }


                $tpl->photos->photo->assign('[PHOTO_PATH]',      $photo_path);
                $tpl->photos->photo->assign('[PHOTO_BIG_URL]',   "index.php?view=photo&path={$photo_path}&size=big");
                $tpl->photos->photo->assign('[PHOTO_SMALL_URL]', "index.php?view=photo&path={$photo_path}&size=list");
                $tpl->photos->photo->assign('[PHOTO_NAME]',      substr($file_name_utf, 0, strrpos($file_name_utf, '.')));

                if ($file_name != end($dir_content['file'])) $tpl->photos->photo->reassign();
            }


            // Пагинация
            if ($dir_content['total_files'] > GALLERY_PHOTOS_ON_PAGE) {
                $dir_path = isset($_GET['path']) ? $_GET['path'] : '';
                $pagebar  = Micro_Tools::paginate(
                    '',
                    "?view=gallery&path={$dir_path}&page",
                    ceil($dir_content['total_files'] / GALLERY_PHOTOS_ON_PAGE),
                    isset($_GET['page']) ? $_GET['page'] : 1,
                    5
                );

                $tpl->photos->pagenation->assign('[PAGEBAR]', $pagebar);
            }
        }


        $page = new Micro_Page();
        $page->title      = Micro_Init::pageProp('gallery', 'title');
        $page->meta_keys  = Micro_Init::pageProp('gallery', 'meta_keys');
        $page->meta_desc  = Micro_Init::pageProp('gallery', 'meta_desc');
        $page->style      = Micro_Init::pageProp('gallery', 'style');
        $page->javascript = Micro_Init::pageProp('gallery', 'javascript');
        $page->locutions  = Micro_Init::pageProp('gallery', 'locutions');
        $page->content    = $tpl->parse();

        return $page;
    }


    /**
     * Страница корзины
     * @return Micro_Page
     */
    public function cart () {

        $tpl = new Micro_Templater();
        $tpl->setTemplate(Micro_Init::pageProp('cart', 'tpl'));


        if ( ! isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
            $tpl->touchBlock('empty_cart');

        } else {
            $orders   = $_SESSION['cart'];
            $cost_sum = 0;

            foreach ($orders as $key=>$order) {
                $file_path = Micro_Tools::hashToPath($order);
                $file_name = strstr($file_path, '/')
                    ? end(explode('/', $file_path))
                    : $file_path;

                if ($file_name) {
                    $matches = array();
                    if (preg_match('~^__([0-9\.,]+)__~sU', $file_name, $matches)) {
                        $file_name_cut = preg_replace('~^__[0-9\.,]+__~sU', '', $file_name);
                        $file_name_utf = Micro_Tools::convertEncoding($file_name_cut);
                        $cost      = str_replace(',', '.', $matches[1]);
                        $cost_sum += $cost;

                    } else {
                        $file_name_utf = Micro_Tools::convertEncoding($file_name);
                        $cost = 0;
                    }
                    
                    $tpl->orders->order->assign('[TITLE]',        substr($file_name_utf, 0, strrpos($file_name_utf, '.')));
                    $tpl->orders->order->assign('[COST]',         $cost);
                    $tpl->orders->order->assign('[PHOTO_URL]',    'index.php?view=photo&path=' . $order . '&size=cart');
                    $tpl->orders->order->assign('[PARAM_NAME]',   'orders[' . $key . '][path]');
                    $tpl->orders->order->assign('[PARAM_VALUE]',  $order);
                    $tpl->orders->order->assign('[COUNT_NAME]',   'orders[' . $key . '][count]');

                    if ($order != end($orders)) $tpl->orders->order->reassign();
                }
            }

            $tpl->orders->assign('[COST_SUM]', $cost_sum);
        }


        $page = new Micro_Page();
        $page->title      = Micro_Init::pageProp('cart', 'title');
        $page->meta_keys  = Micro_Init::pageProp('cart', 'meta_keys');
        $page->meta_desc  = Micro_Init::pageProp('cart', 'meta_desc');
        $page->style      = Micro_Init::pageProp('cart', 'style');
        $page->javascript = Micro_Init::pageProp('cart', 'javascript');
        $page->locutions  = Micro_Init::pageProp('cart', 'locutions');
        $page->content    = $tpl->parse();

        return $page;
    }


    /**
     * Добавление в корзину товара
     * @return string
     */
    public function add_in_cart () {

        if ( ! isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }

        if ( ! isset($_SESSION['cart'][$_POST['item']])) {
            $_SESSION['cart'][$_POST['item']] = $_POST['item'];
        }
        return json_encode(array('error' => 0));
    }


    /**
     * Удаление из корзины товара
     * @return string
     */
    public function remove_in_cart () {

        if (isset($_SESSION['cart'][$_POST['item']])) {
            unset($_SESSION['cart'][$_POST['item']]);
        }
        return json_encode(array('error' => 0));
    }


    /**
     * Страница с оформлением заказа
     * @return Micro_Page
     */
    public function order () {

        $tpl = new Micro_Templater();
        $tpl->setTemplate(Micro_Init::pageProp('order', 'tpl'));


        if (empty($_POST['orders'])) {
            $tpl->touchBlock('empty_order');

        } else {
            foreach ($_POST['orders'] as $k=>$order) {
                $tpl->order_form->orders->assign('[ORDER_PARAM_NAME]', "orders[{$k}][path]");
                $tpl->order_form->orders->assign('[ORDER_NAME]', $order['path']);
                $tpl->order_form->orders->assign('[ORDER_PARAM_COUNT]', "orders[{$k}][count]");
                $tpl->order_form->orders->assign('[ORDER_COUNT]', $order['count']);
                if ($order != end($_POST['orders'])) $tpl->order_form->orders->reassign();
            }
        }


        $page = new Micro_Page();
        $page->title      = Micro_Init::pageProp('order', 'title');
        $page->meta_keys  = Micro_Init::pageProp('order', 'meta_keys');
        $page->meta_desc  = Micro_Init::pageProp('order', 'meta_desc');
        $page->style      = Micro_Init::pageProp('order', 'style');
        $page->javascript = Micro_Init::pageProp('order', 'javascript');
        $page->locutions  = Micro_Init::pageProp('order', 'locutions');
        $page->content    = $tpl->parse();

        return $page;
    }


    /**
     * Отправка сообщеня о новом заказе
     * @return void
     */
    public function order_send () {

        try {
            if (empty($_POST['orders'])) throw new Exception('Нет товаров для заказа');

            $tpl_email = new Micro_Templater();
            $tpl_email->setTemplate(Micro_Init::$order_email['tpl']);

            $tpl_email->assign('[NAME]',  $_POST['name']);
            $tpl_email->assign('[EMAIL]', $_POST['email']);
            $tpl_email->assign('[TEL]',   $_POST['tel']);
            $tpl_email->assign('[ADRES]', $_POST['adres']);
            $tpl_email->assign('[INFO]',  nl2br($_POST['info']));

            $global_price = 0;
            foreach ($_POST['orders'] as $order) {
                $realpath = Micro_Tools::hashToPath($order['path']);
                $file_name = strstr($realpath, '/')
                    ? end(explode('/', $realpath))
                    : $realpath;

                if ($file_name) {
                    $matches = array();
                    $price = preg_match('~^__([0-9\.,]+)__~sU', $file_name, $matches)
                        ? str_replace(',', '.', $matches[1])
                        : 0;

                    $tpl_email->order->assign('[PATH]', Micro_Tools::convertEncoding($realpath));
                    $tpl_email->order->assign('[PRICE]', $price);
                    $tpl_email->order->assign('[COUNT]', $order['count']);
                    $tpl_email->order->assign('[PRICE_TOTAL]', $order['count'] * $price);
                    if ($order != end($_POST['orders'])) $tpl_email->order->reassign();

                    $global_price += $order['count'] * $price;
                }
            }

            $tpl_email->assign('[GLOBAL_PRICE]', $global_price);


            $is_send = Micro_Tools::sendMail(ORDER_EMAIL_TO, Micro_Init::$order_email['subject'], $tpl_email->parse(), array(
                'from'        => ORDER_EMAIL_FROM,
                'method'      => ORDER_EMAIL_METHOD,
                'smtp_host'   => EMAIL_SMTP_HOST,
                'smtp_port'   => EMAIL_SMTP_PORT,
                'smtp_secure' => EMAIL_SMTP_SECURE,
                'smtp_auth'   => EMAIL_SMTP_AUTH,
                'smtp_user'   => EMAIL_SMTP_USER,
                'smtp_pass'   => EMAIL_SMTP_PASS
            ));

            if ( ! $is_send) throw new Exception('Письмо не отправлено по неизвестной причине');

            unset($_SESSION['cart']);
            $lang = isset($_GET['lang']) && $_GET['lang'] ? '&lang=' . $_GET['lang'] : '';
            header('Location: ?view=order_result&result=success' . $lang);
            exit;

        } catch (Exception $e) {
            $lang = isset($_GET['lang']) && $_GET['lang'] ? '&lang=' . $_GET['lang'] : '';
            header('Location: ?view=order_result&result=error' . $lang);
            exit;
        }
    }


    /**
     * Страница с успешной или неудачной отправкой заказа
     * @return Micro_Page
     */
    public function order_result () {

        $tpl = new Micro_Templater();
        $tpl->setTemplate(Micro_Init::pageProp('order_result', 'tpl'));

        if ($_GET['result'] == 'success') {
            $tpl->touchBlock('success');

        } elseif ($_GET['result'] == 'error') {
            $tpl->touchBlock('error');

        } else {
            header('Location: ?view=404');
            exit;
        }

        $page = new Micro_Page();
        $page->title      = Micro_Init::pageProp('order_result', 'title');
        $page->meta_keys  = Micro_Init::pageProp('order_result', 'meta_keys');
        $page->meta_desc  = Micro_Init::pageProp('order_result', 'meta_desc');
        $page->style      = Micro_Init::pageProp('order_result', 'style');
        $page->javascript = Micro_Init::pageProp('order_result', 'javascript');
        $page->locutions  = Micro_Init::pageProp('order_result', 'locutions');
        $page->content    = $tpl->parse();

        return $page;
    }


    /**
     * Показ фотогафии
     * @return void
     * @throws Exception
     */
    public function photo () {

        if (defined('USE_CACHE') && USE_CACHE) {
            if ( ! isset($_GET['path']) || $_GET['path'] == '') {
                throw new Exception('Неверная ссылка');
            }
            if ( ! is_dir(CACHE_DIR) && ! mkdir(CACHE_DIR, 0755)) {
                throw new Exception('Не удалось создать директорию "' . CACHE_DIR . '"');
            }
            if ( ! is_writeable(CACHE_DIR)) {
                if ( ! chmod(CACHE_DIR, 0755)) {
                    throw new Exception('Директория "' . CACHE_DIR . '" не доступна для чтения');
                }
            }

            // создание названия для кэш-файла
            switch ($_GET['size']) {
                case 'big' :
                    if (defined('USE_WATERMARK_BIG_IMAGE') && USE_WATERMARK_BIG_IMAGE) {
                        $watermark_path = defined('WATERMARK_IMAGE') && file_exists(WATERMARK_IMAGE)
                            ? WATERMARK_IMAGE
                            : null;
                    } else {
                        $watermark_path = '';
                    }
                    $cache_file = CACHE_DIR . '/' . md5($_GET['path'] . MAX_HEIGHT_BIG_IMAGE . MAX_WIDTH_BIG_IMAGE . $watermark_path);
                    break;

                case 'list' :
                    if (defined('USE_WATERMARK_LIST_IMAGE') && USE_WATERMARK_LIST_IMAGE) {
                        $watermark_path = defined('WATERMARK_IMAGE') && file_exists(WATERMARK_IMAGE)
                            ? WATERMARK_IMAGE
                            : null;
                    } else {
                        $watermark_path = '';
                    }
                    $cache_file = CACHE_DIR . '/' . md5($_GET['path'] . MAX_HEIGHT_LIST_IMAGE . MAX_WIDTH_LIST_IMAGE . $watermark_path);
                    break;

                case 'cart' :
                    if (defined('USE_WATERMARK_CART_IMAGE') && USE_WATERMARK_CART_IMAGE) {
                        $watermark_path = defined('WATERMARK_IMAGE') && file_exists(WATERMARK_IMAGE)
                            ? WATERMARK_IMAGE
                            : null;
                    } else {
                        $watermark_path = '';
                    }
                    $cache_file = CACHE_DIR . '/' . md5($_GET['path'] . MAX_HEIGHT_CART_IMAGE . MAX_WIDTH_CART_IMAGE . $watermark_path);
                    break;
                default : throw new Exception('Некорректный адрес'); break;
            }

            // если кэш-файл уже существует, то ипользуем его
            if (file_exists($cache_file)) {

                $last_modified_time = filemtime($cache_file);
                $etag               = hash('crc32b', $cache_file);
                $len                = filesize($cache_file);
                header('Content-type: image/png');
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

        // создание кэша если он включен и показ картинки
        $path = GALLERY_DIR . '/' . Micro_Tools::hashToPath($_GET['path']);
        switch ($_GET['size']) {
            case 'big'   :
                if (defined('USE_WATERMARK_BIG_IMAGE') && USE_WATERMARK_BIG_IMAGE) {
                    $watermark_path = defined('WATERMARK_IMAGE') && file_exists(WATERMARK_IMAGE)
                        ? WATERMARK_IMAGE
                        : null;
                } else {
                    $watermark_path = null;
                }
                Micro_Tools::resizeImage($path, MAX_HEIGHT_BIG_IMAGE, MAX_WIDTH_BIG_IMAGE, $cache_file, $watermark_path);
                break;

            case 'list' :
                if (defined('USE_WATERMARK_LIST_IMAGE') && USE_WATERMARK_LIST_IMAGE) {
                    $watermark_path = defined('WATERMARK_IMAGE') && file_exists(WATERMARK_IMAGE)
                        ? WATERMARK_IMAGE
                        : null;
                } else {
                    $watermark_path = null;
                }
                Micro_Tools::resizeImage($path, MAX_HEIGHT_LIST_IMAGE, MAX_WIDTH_LIST_IMAGE, $cache_file, $watermark_path);
                break;

            case 'cart' :
                if (defined('USE_WATERMARK_CART_IMAGE') && USE_WATERMARK_CART_IMAGE) {
                    $watermark_path = defined('WATERMARK_IMAGE') && file_exists(WATERMARK_IMAGE)
                        ? WATERMARK_IMAGE
                        : null;
                } else {
                    $watermark_path = null;
                }
                Micro_Tools::resizeImage($path, MAX_HEIGHT_CART_IMAGE, MAX_WIDTH_CART_IMAGE, $cache_file, $watermark_path);
                break;

            default : throw new Exception('Некорректный адрес'); break;
        }
    }
}


/**
 * Class Micro_Page
 */
class Micro_Page {

    public $title = '';
    public $meta_keys = '';
    public $meta_desc = '';
    public $style = '';
    public $javascript = '';
    public $content = '';
    public $locutions = array();
}


/**
 * Class Micro_Init
 */
class Micro_Init {

    public static $pages       = array();
    public static $template    = array();
    public static $menu        = array();
    public static $order_email = array();
    public static $home_page   = 'gallery';


    public function __construct () {

        if (is_dir(PLUGINS_DIR)) {
            $h = opendir(PLUGINS_DIR);
            while ($element = readdir($h)) {
                if (
                    $element != '.' && $element != '..' &&
                    is_file(PLUGINS_DIR . '/' . $element) &&
                    substr($element, strrpos($element, '.')+1) == 'php'
                ) {
                    require_once PLUGINS_DIR . '/' . $element;
                }
            }
        }
    }


    /**
     * Ответ пользователю на запрос
     * return string
     */
    public function dispatch () {

        // проверка существует ли запрошенный язык в перечне
        if (isset($_GET['lang']) && $_GET['lang'] != '') {
            $languages = explode(',', LANGUAGES);
            foreach ($languages as $k=>$iso) if (trim($iso)) $languages[$k] = trim($iso);
            if ( ! in_array($_GET['lang'], $languages)) {
                $pages = new Micro_Pages();
                $page = $pages->page404();
            }
        }

        if ( ! isset($page)) {
            $matches = array();
            if (isset($_GET['view']) && $_GET['view']) {

                // показ страницы для которой есть логика отбражения
                $page_name = strtolower($_GET['view']);
                if (is_callable(array('Micro_pages', $page_name))) {
                    $pages = new Micro_Pages();
                    $page  = $pages->$page_name();

                // показ страницы плагина
                } elseif (isset(self::$pages[$page_name]) && isset(self::$pages[$page_name]['plugin'])) {
                    $plugin = new self::$pages[$page_name]['plugin']();
                    $page   = $plugin->$page_name();

                // показ страницы для которой нет логики отбражения
                } elseif (isset(self::$pages[$page_name]) && $page_name != '404') {
                    $pages = new Micro_Pages();
                    $page  = $pages->view($page_name);

                // показ 404
                } else {
                    $pages = new Micro_Pages();
                    $page  = $pages->page404();
                }

            // существует ли плагин Micro_Plugin_Rewrite
            } elseif (
                class_exists('Micro_Plugin_Rewrite') && Micro_Plugin_Rewrite::$is_active &&
                preg_match('~^([^?]+)(?|)~', ltrim($_SERVER['REQUEST_URI'], '/'), $matches)
            ) {
                $rewrite   = new Micro_Plugin_Rewrite();
                $page_name = $rewrite->searchPage(self::$pages, $matches[1]);

                // страница найдена
                if ($page_name != '') {
                    if (isset(self::$pages[$page_name]['plugin'])) {
                        $plugin = new self::$pages[$page_name]['plugin']();
                        $page   = $plugin->$page_name();
                    } else {
                        $pages = new Micro_Pages();
                        $page  = $pages->view($page_name);
                    }

                    // показ 404
                } else {
                    $pages = new Micro_Pages();
                    $page  = $pages->page404();
                }

            // главная страница
            } else {
                if (is_callable(array('Micro_Pages', self::$home_page))) {
                    $pages = new Micro_Pages();
                    $page = $pages->{self::$home_page}();

                } elseif (isset(self::$pages[self::$home_page]['plugin'])) {
                    $plugin = new self::$pages[self::$home_page]['plugin']();
                    $page = $plugin->{self::$home_page}();

                } elseif (isset(self::$pages[self::$home_page])) {
                    $pages = new Micro_Pages();
                    $page = $pages->view(self::$home_page);

                } else {
                    throw new Exception('Домашняя страница "' . self::$home_page . '" не найдена');
                }
            }
        }


        if ($page instanceof Micro_Page) {
            return $this->renderPage($page);

        } else {
            return $page;
        }
    }


    /**
     * @param Micro_Page $page
     * @return string
     */
    public function renderPage (Micro_Page $page) {

        $tpl = new Micro_Templater();
        $tpl->setTemplate(self::$template['tpl']);

        $tpl->assign('[TITLE]',      USE_SITE_NAME_IN_TITLE ? SITE_NAME . ' - ' . $page->title : $page->title);
        $tpl->assign('[META_KEYS]',  $page->meta_keys);
        $tpl->assign('[META_DESC]',  $page->meta_desc);
        $tpl->assign('[STYLE]',      $page->style);
        $tpl->assign('[JAVASCRIPT]', $page->javascript);
        $tpl->assign('[CONTENT]',    $page->content);
        $tpl->assign('[LANG]',       isset($_GET['lang']) && $_GET['lang'] ? $_GET['lang'] : DEFAULT_LANG);


        // Меню
        self::$menu = Micro_Tools::arraySort(self::$menu, 'position');
        foreach (self::$menu as $menu) {
            $is_active = isset($_GET['view']) && in_array($_GET['view'], $menu['active']) ? 'current' : '';
            $lang      = isset($_GET['lang']) && $_GET['lang'] ? "&lang={$_GET['lang']}" : '';

            $tpl->menu->assign('[CURRENT]',   $is_active);
            $tpl->menu->assign('[MENU_URL]',  '?view=' . $menu['view'] . $lang);
            $tpl->menu->assign('[MENU_NAME]', $menu['title']);
            if ($menu != end(self::$menu)) $tpl->menu->reassign();
        }


        // Контрол для выбора языка сайта
        $languages = explode(',', trim(LANGUAGES, ' ,'));
        if (count($languages) > 1 && $_SERVER['REQUEST_METHOD'] == 'GET') {
            foreach ($languages as $iso) {
                $tpl->select_lang->languages->assign('[LANG_ISO]', $iso);
                if (isset($_GET['lang'])) {
                    $selected = $_GET['lang'] == $iso
                        ? 'selected="selected"'
                        : '';
                } else {
                    $selected = DEFAULT_LANG == $iso
                        ? 'selected="selected"'
                        : '';
                }

                $tpl->select_lang->languages->assign('[SELECTED]', $selected);
                if ($iso != end($languages)) $tpl->select_lang->languages->reassign();
            }
        }

        $result = $tpl->parse();


        // Перевод текста
        if ( ! empty($page->locutions) && isset(self::$template['locutions'])) {
            $locutions = array_merge($page->locutions, self::$template['locutions']);
            $result = $this->replaceLocutions($result, $locutions);

        } elseif ( ! empty($page->locutions)) {
            $result = $this->replaceLocutions($result, $page->locutions);

        } elseif (isset(self::$template['locutions'])) {
            $result = $this->replaceLocutions($result, self::$template['locutions']);
        }


        return $result;
    }


    /**
     * Возвращает указанное свойство страницы.
     * Выбирает перевод свойства если это возможно.
     * @return mixed
     *      Возвраещает значение свойства
     *      или если свойство не найдено, то null
     */
    public static function pageProp () {

        $args  = func_get_args();
        $pages = self::$pages;
        $prop  = array();

        foreach ($args as $arg) {
            if (isset($pages[$arg])) {
                $pages = $pages[$arg];
                $prop  = $pages;
            } else {
                return null;
            }
        }

        if (isset($_GET['lang']) && $_GET['lang'] && is_array($prop) && isset($prop[$_GET['lang']])) {
            return $prop[$_GET['lang']];

        } elseif (is_array($prop) && isset($prop[DEFAULT_LANG])) {
            return $prop[DEFAULT_LANG];

        } else {
            return $prop;
        }
    }


    /**
     * Замена слов в тексте обернутых в $embrace на на тот язык,
     * который сейчас выбран или на язык по умолчанию.
     * @param $str
     * @param array $locutions
     * @param string $embrace
     * @return mixed
     */
    public function replaceLocutions ($str, $locutions = array(), $embrace = "##''##") {

        if ((strlen($embrace) % 2) == 0) {
            $i = strlen($embrace) / 2;
            $embrace_start = preg_quote(substr($embrace, 0, $i));
            $embrace_end   = preg_quote(substr($embrace, $i));

        } else {            trigger_error('Embrace error', E_USER_WARNING);
            return $str;
        }
        $this->locutions = $locutions;

        return preg_replace_callback("~($embrace_start(.+)$embrace_end)~mU", array($this, 'replaceLocutionCondition'), $str);
    }

    private $locutions = array();
    private function replaceLocutionCondition ($matches) {
        if (isset($this->locutions[$matches[2]])) {
            if (
                isset($_GET['lang']) && $_GET['lang'] != '' &&
                is_array($this->locutions[$matches[2]]) && isset($this->locutions[$matches[2]][$_GET['lang']])
            ) {
                return $this->locutions[$matches[2]][$_GET['lang']];

        } elseif (is_array($this->locutions[$matches[2]]) && isset($this->locutions[$matches[2]][DEFAULT_LANG])) {
            return $this->locutions[$matches[2]][DEFAULT_LANG];

        } else {
            return $matches[2];
        }

        } else {
            return $matches[2];
        }
    }
}


/**
 * Class Micro_Tools
 */
class Micro_Tools {


    /**
     * Отправка письма
     * @param string $to Email поучателя. Могут содержать несколько адресов разделенных зяпятой.
     * @param string $subject Тема письма
     * @param string $message Тело письма
     * @param array $options
     *      Опциональные значения для письма.
     *      Может содержать такие ключи как
     *      charset - Кодировка сообщения. По умолчанию содержет - utf-8
     *      content_type - Тип сожержимого. По умолчанию содержет - text/html
     *      from - Адрес отправителя. По умолчанию содержет - noreply@$_SERVER['SERVER_NAME']
     *      cc - Адреса вторичных получателей письма, к которым направляется копия. По умолчанию содержет - false
     *      bcc - Адреса получателей письма, чьи адреса не следует показывать другим получателям. По умолчанию содержет - false
     *      method - Метод отправки. Может принимать значения smtp и mail. По умолчанию содержет - mail
     *      smtp_host - Хост для smtp отправки. По умолчанию содержет - $_SERVER['SERVER_NAME']
     *      smtp_port - Порт для smtp отправки. По умолчанию содержет - 25
     *      smtp_auth - Признак аутентификации для smtp отправки. По умолчанию содержет - false
     *      smtp_secure - Название шифрования, TLS или SSL. По умолчанию без шифрования
     *      smtp_user - Пользователь при использовании аутентификации для smtp отправки. По умолчанию содержет пустую строку
     *      smtp_pass - Пароль при использовании аутентификации для smtp отправки. По умолчанию содержет пустую строку
     *      smtp_timeout - Таймаут для smtp отправки. По умолчанию содержет - 15
     * @return bool Успешна либо нет отправка сообщения
     * @throws Exception Исключение с текстом произошедшей ошибки
     */
    public static function sendMail ($to, $subject, $message, array $options = array()) {

        $options['charset']      = isset($options['charset']) && trim($options['charset']) != '' ? $options['charset'] : 'utf-8';
        $options['content_type'] = isset($options['content_type']) && trim($options['content_type']) != '' ? $options['content_type'] : 'text/html';
        $options['from']         = isset($options['from']) && trim($options['from']) != '' ? $options['from'] : 'noreply@' . $_SERVER['SERVER_NAME'];
        $options['cc']           = isset($options['cc']) && trim($options['cc']) != '' ? $options['cc'] : false;
        $options['bcc']          = isset($options['bcc']) && trim($options['bcc']) != '' ? $options['bcc'] : false;
        $subject                 = $subject != null && trim($subject) != '' ? $subject : '(No Subject)';


        $headers = array(
            "MIME-Version: 1.0",
            "Content-type: {$options['content_type']}; charset={$options['charset']}",
            "From: {$options['from']}",
            "Content-Transfer-Encoding: base64",
            "X-Mailer: PHP/" . phpversion()
        );

        if ($options['cc']) $headers[] = $options['cc'];
        if ($options['bcc']) $headers[] = $options['bcc'];


        if (isset($options['method']) && strtoupper($options['method']) == 'SMTP') {

            $options['smtp_host']    = isset($options['smtp_host']) && trim($options['smtp_host']) != '' ? $options['smtp_host'] : $_SERVER['SERVER_NAME'];
            $options['smtp_port']    = isset($options['smtp_port']) && (int)($options['smtp_port']) > 0  ? $options['smtp_port'] : 25;
            $options['smtp_secure']  = isset($options['smtp_secure']) ? $options['smtp_secure'] : '';
            $options['smtp_auth']    = isset($options['smtp_auth']) ? (bool)$options['smtp_auth'] : false;
            $options['smtp_user']    = isset($options['smtp_user']) ? $options['smtp_user'] : '';
            $options['smtp_pass']    = isset($options['smtp_pass']) ? $options['smtp_pass'] : '';
            $options['smtp_timeout'] = isset($options['smtp_timeout']) && (int)($options['smtp_timeout']) > 0 ? $options['smtp_timeout'] : 15;

            $headers[] = "Subject: {$subject}";
            $headers[] = "To: <" . implode('>, <', explode(',', $to)) . ">";
            $headers[] = "\r\n";
            $headers[] = wordwrap(base64_encode($message), 75, "\n", true);
            $headers[] = "\r\n";

            $recipients = explode(',', $to);
            $errno      = '';
            $errstr     = '';


            if (strtoupper($options['smtp_secure']) == 'SSL') {
                $options['smtp_host'] = 'ssl://' . preg_replace('~^([a-zA-Z0-9]+:|)//~', '', $options['smtp_host']);
            }


            if ( ! ($socket = fsockopen($options['smtp_host'], $options['smtp_port'], $errno, $errstr, $options['smtp_timeout']))) {
                throw new Exception("Error connecting to '{$options['smtp_host']}': {$errno} - {$errstr}");
            }

            if (substr(PHP_OS, 0, 3) != "WIN") socket_set_timeout($socket, $options['smtp_timeout'], 0);

            self::serverParse($socket, '220');

            fwrite($socket, 'EHLO ' . $options['smtp_host'] . "\r\n");
            self::serverParse($socket, '250');

            if (strtoupper($options['smtp_secure']) == 'TLS') {
                fwrite($socket, 'STARTTLS' . "\r\n");
                self::serverParse($socket, '250');
            }


            if ($options['smtp_auth']) {
                fwrite($socket, 'AUTH LOGIN' . "\r\n");
                self::serverParse($socket, '334');

                fwrite($socket, base64_encode($options['smtp_user']) . "\r\n");
                self::serverParse($socket, '334');

                fwrite($socket, base64_encode($options['smtp_pass']) . "\r\n");
                self::serverParse($socket, '235');
            }

            fwrite($socket, "MAIL FROM: <{$options['from']}>\r\n");
            self::serverParse($socket, '250');


            foreach ($recipients as $email) {
                fwrite($socket, 'RCPT TO: <' . $email . '>' . "\r\n");
                self::serverParse($socket, '250');
            }

            fwrite($socket, 'DATA' . "\r\n");
            self::serverParse($socket, '354');

            fwrite($socket, implode("\r\n", $headers));
            fwrite($socket, '.' . "\r\n");
            self::serverParse($socket, '250');

            fwrite($socket, 'QUIT' . "\r\n");
            fclose($socket);

            return true;

        } else {

            return mail($to, $subject, wordwrap(base64_encode($message), 75, "\n", true), implode("\r\n", $headers));
        }
    }


    /**
     * Получение ответа от сервера
     * @param resource $socket
     * @param string $expected_response
     * @throws Exception
     */
    private static function serverParse ($socket, $expected_response) {

        $server_response = '';
        while (substr($server_response, 3, 1) != ' ') {
            if ( ! ($server_response = fgets($socket, 256)))  {
                throw new Exception('Error while fetching server response codes.');
            }
        }
        if (substr($server_response, 0, 3) != $expected_response) {
            throw new Exception("Unable to send e-mail: {$server_response}");
        }
    }


    /**
     * Создание изображения
     * @param string $image_path
     * @param int $max_height
     * @param int $max_width
     * @param null|string $save_path
     * @param null|string $watermark_path
     * @throws Exception
     */
    public static function resizeImage ($image_path, $max_height, $max_width, $save_path = null, $watermark_path = null) {

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


        // оригинальное изображение
        if (file_exists($image_path)) {
            list($image_width, $image_height, $image_type) = getimagesize($image_path);
            switch ($image_type) {
                case IMAGETYPE_GIF  : $image_resource = imagecreatefromgif($image_path);  break;
                case IMAGETYPE_JPEG : $image_resource = imagecreatefromjpeg($image_path); break;
                case IMAGETYPE_PNG  : $image_resource = imagecreatefrompng($image_path);  break;
                case IMAGETYPE_BMP  : $image_resource = imagecreatefromwbmp($image_path); break;
                default: $image_resource = imagecreatefromjpeg($image_path); break;
            }

            // если не удалось создать изображение
            if ($image_resource === false) {
                throw new Exception('Файл "' . $image_path . '" поврежден или имеет неверный формат');
            }
        } else {
            throw new Exception('Файл "' . $image_path . '" не найден');
        }

        $ratio_orig = $image_width/$image_height;

        if ($max_width/$max_height > $ratio_orig) {
            $max_width = $max_height*$ratio_orig;
        } else {
            $max_height = $max_width/$ratio_orig;
        }

        $convas = imagecreatetruecolor($max_width, $max_height);

        if ($image_type == IMAGETYPE_GIF || $image_type == IMAGETYPE_PNG){
            imagecolortransparent($convas, imagecolorallocatealpha($convas, 0, 0, 0, 127));
            imagealphablending($convas, false);
            imagesavealpha($convas, true);
        }

        imagecopyresampled($convas, $image_resource, 0, 0, 0, 0, $max_width, $max_height, $image_width, $image_height);


        if ($watermark_path !== null) {
            imagecopymerge($convas, $watermark_resource, 0, 0, 0, 0, $max_width, $max_height, 10);
        }


        header('content-type: image/png');
        if ($save_path === null) {
            imagepng($convas);
        } else {
            imagepng($convas, $save_path);
            imagepng($convas);
        }

        // освобождаем память
        imagedestroy($convas);
        if ($watermark_path !== null) {
            imagedestroy($watermark_resource);
        }
    }


    /**
     * Конвертирование строки в нужную кодировку
     * @param string $str
     * @param string $to
     * @param string|null $from
     * @return string
     */
    public static function convertEncoding ($str, $to = 'utf-8', $from = null) {

        if ($from === null) {
            $from = self::detectEncoding($str);
        }

        return mb_convert_encoding($str, $to, $from);
    }


    /**
     * Определение кодировки
     * @param string $string
     * @param int $pattern_size
     * @return string
     */
    public static function detectEncoding ($string, $pattern_size = 50) {

        $list = array('cp1251', 'utf-8', 'ascii', '855', 'KOI8R', 'ISO-IR-111', 'CP866', 'KOI8U');
        $c = strlen($string);
        if ($c > $pattern_size) {
            $string = substr($string, floor(($c - $pattern_size) / 2), $pattern_size);
            $c = $pattern_size;
        }

        $reg1 = '/(\xE0|\xE5|\xE8|\xEE|\xF3|\xFB|\xFD|\xFE|\xFF)/i';
        $reg2 = '/(\xE1|\xE2|\xE3|\xE4|\xE6|\xE7|\xE9|\xEA|\xEB|\xEC|\xED|\xEF|\xF0|\xF1|\xF2|\xF4|\xF5|\xF6|\xF7|\xF8|\xF9|\xFA|\xFC)/i';

        $mk = 10000;
        $enc = 'ascii';
        foreach ($list as $item) {
            $sample1 = @iconv($item, 'cp1251', $string);
            $gl = @preg_match_all($reg1, $sample1, $arr);
            $sl = @preg_match_all($reg2, $sample1, $arr);
            if (!$gl || !$sl) continue;
            $k = abs(3 - ($sl / $gl));
            $k += $c - $gl - $sl;
            if ($k < $mk) {
                $enc = $item;
                $mk = $k;
            }
        }
        return $enc;
    }


    /**
     * Конвертирует настоящий путь в хэшированный
     * @param string $path
     * @param string $algo
     * @return string
     */
    public static function pathToHash ($path, $algo = 'crc32b') {

        $explode_path = explode('/', $path);
        $path         = array();
        foreach ($explode_path as $dir_hash) {
            if ($dir_hash != '.' && $dir_hash != '') {
                $path[] = hash($algo, $dir_hash);
            }
        }
        return implode('-', $path);
    }


    /**
     * Конвертирует хэшированный путь в настоящий
     * TODO добавить статическую переменную для хранения полученого содержимого директорий
     * @param string $hash_path
     * @param string $algo
     * @return string
     */
    public static function hashToPath ($hash_path, $algo = 'crc32b') {

        $explode_path = explode('-', $hash_path);
        $real_path    = array();

        foreach ($explode_path as $hash_dir) {
            $path = empty($real_path)
                ? GALLERY_DIR
                : GALLERY_DIR . '/' . implode('/', $real_path);

            if (
                $hash_dir != '.' && $hash_dir != '' &&
                $handle = opendir($path)
            ) {
                while ($element_name = readdir($handle)) {
                    if (
                        $element_name != "." && $element_name != ".." &&
                        hash($algo, $element_name) == $hash_dir
                    ) {
                        $real_path[] = $element_name;
                        break;
                    }
                }
            }
        }

        return implode('/', $real_path);
    }


    /**
     * Сортировка подмассивов по указанному ключу
     * @param array $array
     * @param string $on
     * @param int $order
     * @return array
     */
    public function arraySort (array $array, $on, $order = SORT_ASC) {
        $new_array      = array();
        $sortable_array = array();

        if (count($array) > 0) {
            foreach ($array as $k => $v) {
                if (is_array($v)) {
                    foreach ($v as $k2 => $v2) {
                        if ($k2 == $on) {
                            $sortable_array[$k] = $v2;
                        }
                    }
                } else {
                    $sortable_array[$k] = $v;
                }
            }

            switch ($order) {
                case SORT_ASC:
                    asort($sortable_array);
                    break;
                case SORT_DESC:
                    arsort($sortable_array);
                    break;
            }

            foreach ($sortable_array as $k => $v) {
                $new_array[$k] = $array[$k];
            }
        }

        return $new_array;
    }

    /**
     * Создание массива с пагинацией
     * @param string $base_url
     * @param string $query_str
     * @param int $total_pages
     * @param int $current_page
     * @param int $paginate_limit
     * @return string
     */
    public static function paginate ($base_url, $query_str, $total_pages, $current_page, $paginate_limit) {

        $pagebar = '';
        $break   = true;

        if ($current_page > 1) {
            $pagebar .= '<a class="text_page" href="' . $base_url . $query_str . '=1">##\'В начало\'##</a>';
            $pagebar .= '<a class="text_page" href="' . $base_url . $query_str . '=' . ($current_page - 1) . '">##\'Предыдущая\'##</a>';
        }

        for ( $i = 1; $i <= $total_pages; $i++ ) {
            if (
                $i == 1 || $i == $total_pages ||
               ($i >= $current_page - $paginate_limit && $i <= $current_page + $paginate_limit)
            ) {
                $break = true;
                if ($i != $current_page) {
                    $url      = $base_url . $query_str . "=" . $i;
                    $pagebar .= '<a href="' . $url . '">' . $i . '</a>';
                } else {
                    $pagebar .= '<span>' . $i . '</span>';
                }
            } elseif ($break == true) {
                $break    = false;
                $pagebar .= '<span class="break">&hellip;</span>';
            }
        }


        if ($current_page < $total_pages) {
            $pagebar .= '<a class="text_page" href="' . $base_url . $query_str . '=' . ($current_page + 1) . '">##\'Следующая\'##</a>';
            $pagebar .= '<a class="text_page" href="' . $base_url . $query_str . '=' . $total_pages . '">##\'В конец\'##</a>';
        }

        return $pagebar;
    }
}


/**
 * Class Micro_Templater
 */
class Micro_Templater {

    private $blocks = array();
    private $vars = array();
    private $html = '';
    private $owner = '';
    private $selects = array();
    private $loopHTML = array();
    private $embrace = array('', '');
    private $_p = array();


    function __construct ($tpl = '') {
        if ($tpl) $this->loadTemplate($tpl);
    }


    public function __isset ($k) {
        return isset($this->_p[$k]);
    }


    /**
     * nested blocks will be stored inside $_p
     * @param $k
     * @return Common|null
     */
    public function __get ($k) {
        $v = NULL;
        if (array_key_exists($k, $this->_p)) {
            $v = $this->_p[$k];
        } else {
            $temp = new Micro_Templater();
            $temp->owner = $k;
            $temp->setTemplate($this->getBlock($k));
            $temp->setEmbrace(implode('', $this->embrace));
            $v = $this->{$k} = $temp;
        }
        return $v;
    }


    public function __set ($k, $v) {
        $this->_p[$k] = $v;
        return $this;
    }


    public function setEmbrace ($em) {
        $arr = array();
        if ((strlen($em) % 2) == 0) {
            $i = strlen($em) / 2;
            $arr[] = substr($em, 0, $i);
            $arr[] = substr($em, $i);
        }
        $this->embrace = $arr;
    }


    /**
     * @param $block
     * @param $text
     */
    public function prependToBlock ($block, $text) {
        $this->newBlock($block);
        $this->blocks[$block]['PREPEND'] = $text;
    }


    /**
     * @param $block
     * @param $text
     */
    public function appendToBlock ($block, $text) {
        $this->newBlock($block);
        $this->blocks[$block]['APPEND'] = $text;
    }


    /**
     * @param $block
     */
    private function newBlock ($block) {
        if (!isset($this->blocks[$block])) {
            $this->blocks[$block] = array('PREPEND' => '',
                'APPEND' => '',
                'GET' => false,
                'REASSIGN' => false,
                'REPLACE' => false,
                'TOUCHED' => false
            );
        }
    }


    /**
     * @param $block
     */
    public function touchBlock ($block) {
        $this->newBlock($block);
        $this->blocks[$block]['TOUCHED'] = true;
    }


    /**
     * @param $path
     * @param bool $strip
     */
    public function loadTemplate ($path, $strip = true) {
        $this->html = $this->getTemplate($path, $strip);
    }


    /**
     * @param $path
     * @param bool $strip
     * @return bool|mixed|string
     */
    public function getTemplate ($path, $strip = true) {
        if (!is_file($path)) {
            return false;
        }
        $temp = file_get_contents($path);
        if ($strip) {
            $temp = str_replace("\r", "", $temp);
            $temp = str_replace("\t", "", $temp);
        }
        return $temp;
    }


    /**
     * set the HTML to parse
     * @param $html
     */
    public function setTemplate ($html) {
        $this->html = $html;
        $this->blocks = array();
        $this->vars = array();
    }


    /**
     * the final render
     * @return string
     */
    public function parse () {
        $html = $this->html;
        $this->autoSearch($html);

        foreach ($this->blocks as $block => $data) {
            if (array_key_exists($block, $this->_p)) {
                $data['REPLACE'] = $this->_p[$block]->parse();
            }
            $temp = array();
            preg_match("/(.*)<!--\s*BEGIN\s$block\s*-->(.+)<!--\s*END\s$block\s*-->(.*)/sm", $html, $temp);
            if (isset($temp[1])) {
                if (!empty($data['REPLACE'])) {
                    $data['GET'] = true;
                }
                if ($data['TOUCHED']) {
                    $html = $temp[1] . $data['PREPEND'] . $temp[2] . $data['APPEND'] . $temp[3];
                } else if ($data['GET']) {
                    $html = $temp[1] . "<!--$block-->" . $temp[3];
                } else {
                    $html = $temp[1] . $temp[3];
                }
                if (!empty($data['REPLACE'])) {
                    $html = str_replace("<!--$block-->", $data['REPLACE'], $html);
                }
            }
        }
        $html = implode('', $this->loopHTML) . str_replace(array_keys($this->vars), $this->vars, $html);
        $this->loopHTML = array();
        return $html;
    }


    /**
     * @param $html
     */
    private function autoSearch ($html) {
        $temp = array();
        preg_match_all("/<!--\s*BEGIN\s(.+?)\s*-->/sm", $html, $temp);
        if (isset($temp[1]) && count($temp[1])) {
            foreach ($temp[1] as $block) {
                $this->newBlock($block);
            }
        }
    }


    /**
     * Fill SELECT items on page
     *
     * @param string $inID
     * @param array $inOptions
     * @param string $inVal
     */
    public function fillDropDown ($inID, array $inOptions, $inVal = '') {
        if (is_array(current($inOptions))) {
            $opt = array();
            foreach ($inOptions as $val) {
                $opt[current($val)] = next($val);
            }
        } else {
            $opt = $inOptions;
        }

        $tmp = "";
        if ($inVal) {
            $inVal = explode(',', $inVal);
        } else {
            $inVal = array();
        }
        foreach ($inOptions as $key => $val) {
            $sel = '';
            if (in_array($key, $inVal)) $sel = "selected=\"selected\"";
            $tmp .= "<option $sel value=\"$key\">$val</option>";
        }
        $inOptions = $tmp;
        $arrayOfSelect = array();
        $reg = "/(<select\s*.*id\s*=\s*[\"|']{$inID}[\"|'][^>]*>).*?(<\/select>)/msi";
        $this->html = preg_replace($reg, "$1[[$inID]]$2", $this->html);
        $this->assign("[[$inID]]", $inOptions, true);
    }


    /**
     * @param $var
     * @param string $value
     * @param bool $avoidEmbrace
     * @return mixed
     */
    public function assign ($var, $value = '', $avoidEmbrace = false) {
        if (is_array($var)) {
            foreach ($var as $key => $val) {
                $this->assign($key, $val, $avoidEmbrace);
            }
        }
        if ($avoidEmbrace) {
            $this->vars[$var] = $value;
        } else {
            $this->vars[$this->embrace[0] . $var . $this->embrace[1]] = $value;
        }

    }

    private function clear() {
        $this->blocks = array();
        $this->vars = array();
        foreach ($this->_p as $obj => $data) {
            $this->_p[$obj]->clear();
        }
    }


    /**
     * Reset the current instance's variables and make them able to assign again
     */
    public function reassign () {
        $this->loopHTML[] = $this->parse();
        $this->clear();
    }


    /**
     * @param $block
     * @param string $html
     * @return string
     */
    public function getBlock ($block, $html = '') {
        if (!$html) {
            $html = $this->html;
        }
        $temp = array();
        preg_match("/(.*)<!--\s*BEGIN\s$block\s*-->(.+)<!--\s*END\s$block\s*-->(.*)/sm", $html, $temp);
        if (isset($temp[2]) && $temp[2]) {
            $html = $temp[2];
        }
        $this->newBlock($block);
        $this->blocks[$block]['GET'] = true;
        return $html;
    }
}


/**
 * Interface Micro_Plugins_Interface
 */
interface Micro_Plugin_Interface {


}

abstract class Micro_Plugin {

    protected  $is_active = false;

    public abstract function install ();
}


try {
    ini_set('display_errors', 1);
    session_start();
    $init = new Micro_Init();
    echo $init->dispatch();

} catch (Exception $e) {
    ini_set('display_errors', 1);
    echo '<pre>';
    throw new Exception($e->getMessage());
}