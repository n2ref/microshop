<?php
/**
 * Microshop - application for fast and easy placement of their products on the internet.
 *
 * Copyright (C) 2014  Shabunin Igor, Stepovich Pavel
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
 *
 * @author: Shabunin Igor
 * @author: Stepovich Pavel
 * @email: info@microshop.by
 * @see: microshop.by
 * @version: 1.0.0
 */

/**
 * Название сайта.
 * И будет ли оно отображаться в загаловке страницы.
 */
define('SITE_NAME',              'Microshop');
define('USE_SITE_NAME_IN_TITLE', true);


/**
 * Названия валют сайта
 */
define('CURRENCY_RU', 'руб');
define('CURRENCY_EN', 'publes');


/**
 * Адрес электронной почты на который будет приходить заказы.
 * А так же отбратный адрес который будет указан в письмах
 * TODO отправляемых заказчику на указанный им адрес.
 * Метод отправки писем - по умолчанию равен MAIL
 */
define('ORDER_EMAIL_TO',     'yourmail@domain.com');
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
define('USE_WATERMARK_BIG_IMAGE',  true);
define('USE_WATERMARK_LIST_IMAGE', false);
define('USE_WATERMARK_CART_IMAGE', false);


/**
 * Размеры для картинок
 */
define('MAX_WIDTH_BIG_IMAGE',   640);
define('MAX_HEIGHT_BIG_IMAGE',  480);
define('MAX_WIDTH_LIST_IMAGE',  205);
define('MAX_HEIGHT_LIST_IMAGE', 180);
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
<html>
<head>
    <title>[TITLE]</title>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="content-type"       content="text/META; charset=utf-8"/>
    <meta name="robots"             content="all"/>
    <meta name="revisit-afte"       content="7 days"/>
    <meta name="distributionrobots" content="global"/>
    <meta name="description"        content="[META_DESC]"/>
    <meta name="keywords"           content="[META_KEYS]"/>
    <meta name="viewport"           content="width=device-width, initial-scale=1"/>

    <style type="text/css">
        html,body,div,span,applet,object,iframe,
        h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,
        address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,
        samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,
        dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,
        tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,
        embed,figure,figcaption,footer,header,hgroup,menu,nav,
        output,ruby,section,summary,time,mark,audio,video {
            border:0;
            font:inherit;
            font-size:100%;
            margin:0;
            padding:0;
            vertical-align:baseline;
        }
        body {
            -webkit-tap-highlight-color:#ea4c88;
            color:#888;
            font-family:Helvetica, Arial, sans-serif;
            font-size:13px;
            line-height:1;
        }
        ol,ul {
            list-style:none;
        }
        blockquote, q {
            quotes:none;
        }
        blockquote:before,
        blockquote:after,
        q:before,
        q:after {
            content:none;
        }
        table {
            border-collapse:collapse;
            border-spacing:0;
        }
        .pull-right { float:right; }
        .pull-left { float:left; }
        .clearfix { clear:both; }
        .clearfix:after,
        .pull-right:after {
            clear:both;
            content:".";
            display:block;
            height:0;
            line-height:0;
            visibility:hidden;
        }
        .wrapper {
            margin:0 auto;
            position:relative;
            width:940px;
            -webkit-text-size-adjust: 100%;
        }
        body p {
            margin-bottom:21px;
            text-indent: 20px;
            text-align: justify;
        }
        body a {
            -moz-transition:color .3s ease;
            -o-transition:color .3s ease;
            -webkit-transition:color .3s ease;
            color:#444;
            text-decoration:none;
            transition:color .3s ease;
        }
        b,strong {
            font-weight: bold;
            color: #757575;
        }
        h1,h2,h3,h4,h5,h6 {
            color:#444;
            font-family:Arial, sans-serif;
            font-weight:400;
        }
        h1 { font-size:48px; }
        h2 { font-size:36px; }
        h3 { font-size:24px; }
        h4 { font-size:21px; }
        h5 { font-size:18px; }
        h6 { font-size:14px; }
        body,.home-block-heading span,.page-heading span {
            background:#ebebe8;
        }
        body a:hover,#top-widget-holder a:hover,#nav>li>a:hover,.project-heading .launch:hover {
            color:#ea4c88;
        }
        header { background:#444 bottom left repeat-x; }
        #logo {
            color:#E2E0D7;
            display:inline-block;
            font-size:27px;
            font-weight:700;
            padding-bottom:30px;
            padding-top:40px;
        }
        #logo:hover { opacity:0.8; }
        #main {
            background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAICAYAAAAx8TU7AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAADFJREFUeNpifPXqlTEDEggICGBgAhHIYMOGDQxMIAJdggkmiyzBhKwNJsFImUUAAQYA5dgZ0UtKh+cAAAAASUVORK5CYII=) repeat-x;
            margin-bottom:60px;
            padding-top:40px;
        }
        #main,footer,aside {
            line-height:1.5em;
        }
        #top-widget-holder,footer,aside {
            font-size:12px;
            line-height:1.5em;
        }
        .page-heading {
            margin-bottom:15px;
            text-align:left;
        }
        .page-heading span {
            margin-left:20px;
            padding:0 20px;
        }
        nav {
            height:30px;
            margin-top:0;
        }
        nav a {
            color:#E2E0D7;
            text-decoration:none;
        }
        #nav li {
            display:inline-block;
            margin-right:20px;
        }
        #nav>li>a {
            font-size:18px;
            font-weight:300;
            overflow:hidden;
            padding:0 0 7px;
            text-shadow:2px 2px 0 rgba(0,0,0,.6);
        }
        #nav>li.current>a {
            border-bottom:solid #ebebe8 5px;
        }
        #comboNav {
            display: none;
            width: 100%;
        }
        footer { min-height: 100px; }
        footer .wrapper {
            background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAOCAYAAAAWo42rAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAFRJREFUeNpifPXqlTEDEAQEBDBs2LCBARkgizHBBEECIAlkgCzGCDMRmynIYoxWVlbG+KyEASZCVsIVEuM+GnkGSKMoxAUY////zzDYFRLrGYAAAwBmmUERGMSYkwAAAABJRU5ErkJggg==) repeat-x top center;
            padding-top:45px;
        }
        article,aside,details,figcaption,figure,footer,header,hgroup,
        menu,nav,section,article,aside,canvas,figure,figure img,
        figcaption,hgroup,footer,header,nav,section,audio,video {
            display:block;
        }
        ::selection,
        ::-moz-selection {
            background:#ea4c88;
            color:#fff;
        }
        img::selection,img::-moz-selection {
            background:transparent;
        }
        #sidebar {
            background: none repeat scroll 0 0 #E2E0D7;
            box-shadow: 2px 2px 0 rgba(0, 0, 0, 0.2);
            float: left;
            padding: 20px 10px;
            margin-bottom: 25px;
            position: relative;
            width: 200px;
        }
        #sidebar h4 { margin-bottom: 20px; }
        #select_lang {
            float: right;
            margin-left: 10px;
            margin-right: 10px;
        }
        input[type=text], input[type=number], input[type=password],
        input[type=tel], input[type=search], input[type=email], textarea {
            background: none repeat scroll 0 0 #fbfbfb;
            border: 1px solid #CCCCCC;
            color: #484848;
            font-family: Helvetica,Arial;
            font-size: 13px;
            line-height: 1.5em;
            overflow: auto;
            padding: 5px 10px;
            width: 200px;
        }
        label {
            color: #484848;
            padding-left: 7px;
        }
        .pagebar {
            display: block;
            font-size: 11px;
            margin: 0;
            overflow: hidden;
            padding-bottom: 70px;
        }
        .pagebar li {
            display: block;
            float: left;
            margin-right: 5px;
        }
        .pagebar li a,
        .pagebar li span {
            border: 1px solid #ccc;
            display: block;
            line-height: 20px;
            text-align: center;
            text-decoration: none;
            transition: all 0.3s ease 0s;
            min-width: 20px;
        }
        .pagebar li.active {
            background: none repeat scroll 0 0 #444;
            color: #fff;
        }
        .pagebar li:hover a {
            background: none repeat scroll 0 0 #ea4c88;
            color: #fff;
        }
         .pagebar .next, .pagebar .prev {
            padding-left: 3px;
            padding-right: 3px;
        }
        .btn {
            background: none repeat scroll 0 0 #EAEAEA;
            border: 1px solid #A9A9A9;
            border-radius: 2px;
            box-shadow: 0 0 1px rgba(0, 0, 0, 0.5);
            color: #444444;
            cursor: pointer;
            font-size: 11px;
            padding: 3px 10px;
            transition: all 0.3s ease 0s;
            width: auto;
        }
        .btn:hover {
            background: none repeat scroll 0 0 #EA4C88;
            color: #FFFFFF;
        }
        .btn-success {
            background-color: #5BB75B;
            background-image: linear-gradient(to bottom, #62C462, #51A351);
            background-repeat: repeat-x;
            border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
            color: #FFFFFF;
            text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
        }
        .btn-link {
            border: 0 none;
            box-shadow: none;
            display: inline;
            color: inherit;
            padding: 0;
            background: none;
        }
        .btn-link:hover {
            text-decoration: underline;
            color: #444;
            background: none;
        }
        .btn-link.btn-preloader {
            padding-left: 25px;
            padding-top: 3px;
        }
        .btn-preloader { padding-left: 12px; }
        .btn-preloader, .btn-preloader.btn-link:hover  {
            background-image: url("data:image/gif;base64,R0lGODlhEAAQAPIAAP///wAAAMLCwkJCQgAAAGJiYoKCgpKSkiH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAEAAQAAADMwi63P4wyklrE2MIOggZnAdOmGYJRbExwroUmcG2LmDEwnHQLVsYOd2mBzkYDAdKa+dIAAAh+QQJCgAAACwAAAAAEAAQAAADNAi63P5OjCEgG4QMu7DmikRxQlFUYDEZIGBMRVsaqHwctXXf7WEYB4Ag1xjihkMZsiUkKhIAIfkECQoAAAAsAAAAABAAEAAAAzYIujIjK8pByJDMlFYvBoVjHA70GU7xSUJhmKtwHPAKzLO9HMaoKwJZ7Rf8AYPDDzKpZBqfvwQAIfkECQoAAAAsAAAAABAAEAAAAzMIumIlK8oyhpHsnFZfhYumCYUhDAQxRIdhHBGqRoKw0R8DYlJd8z0fMDgsGo/IpHI5TAAAIfkECQoAAAAsAAAAABAAEAAAAzIIunInK0rnZBTwGPNMgQwmdsNgXGJUlIWEuR5oWUIpz8pAEAMe6TwfwyYsGo/IpFKSAAAh+QQJCgAAACwAAAAAEAAQAAADMwi6IMKQORfjdOe82p4wGccc4CEuQradylesojEMBgsUc2G7sDX3lQGBMLAJibufbSlKAAAh+QQJCgAAACwAAAAAEAAQAAADMgi63P7wCRHZnFVdmgHu2nFwlWCI3WGc3TSWhUFGxTAUkGCbtgENBMJAEJsxgMLWzpEAACH5BAkKAAAALAAAAAAQABAAAAMyCLrc/jDKSatlQtScKdceCAjDII7HcQ4EMTCpyrCuUBjCYRgHVtqlAiB1YhiCnlsRkAAAOwAAAAAAAAAAAA==");
            background-repeat: no-repeat;
            background-position: 3px 50%;
        }
        .ms-table thead {
            background-color: #c2c2c2;
            color: #fff;
        }
        .ms-table thead tr { border: 1px solid #c6c6c6; }
        .ms-table thead th {
            padding-bottom: 2px;
            padding-top: 2px;
        }
        .ms-table tbody tr { border: 1px solid #c6c6c6; }
        .ms-table tbody td {
          background: none repeat scroll 0 0 #fff;
          font-weight: bold;
          padding: 5px;
          vertical-align: middle;
        }
        @media only screen and (min-width: 768px) and (max-width: 991px) {
            #nav { display: block; }
            #comboNav { display: none; }
            .wrapper { width: 712px;}
        }
        @media only screen and (max-width: 767px) {
            #nav { display: none; }
            #comboNav { display: block; }
            .wrapper { width: 252px; }
            #nav>li{
                display: block;
                width: 252px;
                margin-right: 15px;
            }
            #nav>li a{
                border-bottom: solid #333 1px;
                padding: 10px 0px;
                text-align: center;
            }
            #nav>li.current>a,
            #nav>li.current>a{
                border-bottom: solid #333 1px;
                background: rgba(0,0,0,.2);
            }
            #nav>li ul{
                float:left;
                position:relative;
                width: 100%;
            }
        }
        @media only screen and (min-width: 480px) and (max-width: 767px) {
            .wrapper { width: 436px; }
            #nav>li{ width: 436px; }
        }
    </style>
    [STYLE]

    <script type="text/javascript">
        function selectNav (select) {
            document.location.href = select.value;
        }
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
<body lang="[LANG]">

    <header class="clearfix">

        <div class="wrapper clearfix">

            <a href="index.php" id="logo">[SITE_NAME]</a>

            <nav>
                <ul id="nav">
                    <!-- BEGIN menu -->
                    <li class="[CURRENT]">
                        <a href="[MENU_URL]">##'[MENU_NAME]'##</a>
                    </li>
                    <!-- END menu -->
                </ul>

                <select id="comboNav" onchange="selectNav(this)">
                    <option value="" selected="selected">##'Меню'##</option>
                    <!-- BEGIN combonav -->
                    <option value="[MENU_URL]">##'[MENU_NAME]'##</option>
                    <!-- END combonav -->
                </select>
            </nav>
        </div>
    </header>

    <div id="main">
        <div class="wrapper">
            [CONTENT]
        </div>
    </div>

    <footer>
        <div class="wrapper">
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
    </footer>

</body>
</html>
HTML
,
    'locutions' => array(
        'Галерея'   => array('ru' => 'Галерея', 'en' => 'Gallery'),
        'Ваш заказ' => array('ru' => 'Ваш заказ', 'en' => 'Your order'),
        'Помощь'    => array('ru' => 'Помощь', 'en' => 'Help'),
        'Меню'      => array('ru' => 'Меню', 'en' => 'Menu'),
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

    <aside id="sidebar">
        <h4>##'Категории'##</h4>
        <!-- BEGIN albums -->
        <ul id="albums">
            <!-- BEGIN album -->
            <li>
                <a href="[GALLERY_URL]">[GALLERY_NAME]</a>
            </li>
            <!-- END album -->
        </ul>
        <select id="combo-albums" name="albums" onchange="selectAlbum(this)">
            <option value="">--</option>
            <!-- BEGIN comboalbum -->
            <option value="[GALLERY_URL]">[GALLERY_NAME]</option>
            <!-- END comboalbum -->
        </select>
        <!-- END albums -->

        <!-- BEGIN no_albums -->
        <p>
            ##'Категории отсутствуют'##
        </p>
        <!-- END no_albums -->
    </aside>

    <!-- BEGIN photos -->
    <div id="photo_wrapper">
        <!-- BEGIN photo -->
        <div class="photo">
            <div class="image-container">
                <div class="div-img">
                    <a href="[PHOTO_BIG_URL]" target="_blank">
                        <img class="photo_img" src="[PHOTO_SMALL_URL]" alt="[PHOTO_NAME]" title="[PHOTO_NAME]"/>
                    </a>
                </div>
            </div>
            <div class="div-name">
                [PHOTO_NAME]
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
        <div class="div-data">
            <div class="currency">
                ##'Цена'## [PHOTO_COST] [CURRENCY]
            </div>
            <div class="choose">
                <!-- BEGIN add_in_cart -->
                <input class="btn add_in_cart" type="button" onclick="gallery.order(this)"
                       data-photo-path="[PHOTO_PATH]" value="##'В корзину'##">
                <!-- END add_in_cart -->

                <!-- BEGIN remove_in_cart -->
                <input class="btn remove_in_cart" type="button" onclick="gallery.order(this)"
                       data-photo-path="[PHOTO_PATH]" value="##'Отмена'##">
                <!-- END remove_in_cart -->
            </div>
        </div>
HTML
,
    'style' => <<<HTML
    <style>
        #photo_wrapper {
            float: right;
            width: 700px;
        }
        .photo {
            overflow: hidden;
            float: left;
            text-align: center;
            width: 205px;
            height: 260px;
            margin-bottom: 20px;
            margin-left: 20px;
            border: 1px solid #C2C2C2;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            background: #DEDEDE;
            background: linear-gradient(to top, #DEDEDE, #ffffff, #ffffff, #ffffff);
        }
        .photo_img{
            cursor:pointer;
            transition: all 0.3s ease 0s;
        }
        .photo .image-container {
            width: 100%;
            text-align: center;
            height: 180px;
        }
        .photo .div-img {
            display: inline-block;
            line-height: 0;
        }
        .photo .div-img > a {
            line-height: 180px;
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
            background-color: #B3B3B3;
            padding-top: 7px;
            padding-bottom: 7px;
        }
        .div-name {
            color: #222222;
            font-weight: bold;
            height: 35px;
            overflow: hidden;
            padding: 5px;
            z-index: 999;
        }
        .conteiner_img .div-data {
            margin-top: 5px;
            padding-bottom: 10px;
            text-align: center;
            width: 100%;
        }
        .currency {
            float: left;
            font-weight: bold;
            padding-right: 6px;
            padding-left: 14px;
            color: #FFF;
            border-top-right-radius: 8px;
            border-bottom-right-radius: 2px;
            text-shadow: 1px 1px 0px #777;
        }
        .choose {
            text-align: center;
        }
        .bottom {
            margin-top: 5px;
        }
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
    'javascript' => <<<HTML
    <script type="text/javascript">
        function selectAlbum (select) {
            document.location.href = select.value;
        }
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
        'ru' => 'Галерея',
        'en' => 'Gallery'
    ),
    'meta_desc' => array(
        'ru' => 'Галерея товаров',
        'en' => 'Gallery items'
    ),
    'meta_keys' => array(
        'ru' => 'галерея, магазин, сайт, каталог',
        'en' => 'gallery, shop, site, catalog'
    ),
    'locutions' => array(
        'Цена'       => array('ru' => 'Цена', 'en' => 'Price'),
        'В корзину'  => array('ru' => 'В корзину', 'en' => 'Add to cart'),
        'Отмена'     => array('ru' => 'Отмена', 'en' => 'Cancel'),
        'Предыдущая' => array('ru' => 'Предыдущая', 'en' => 'Previous'),
        'Следующая'  => array('ru' => 'Следующая', 'en' => 'Next'),
        'Ошибка'     => array('ru' => 'Ошибка', 'en' => 'Error'),
        'Категории'  => array('ru' => 'Категории', 'en' => 'Сategories'),
        'Категории отсутствуют'  => array('ru' => 'Категории отсутствуют', 'en' => 'Categories are missing')
    ),
);

/**
 * Корзина пользователя
 */
Micro_Init::$pages['cart'] = array(
    'tpl' => <<<HTML
        <h3>##'Информация о вашем заказе'##</h3>

        <!-- BEGIN empty_cart -->
        <h3>##'Нет заказов'##!</h3>
        <!-- END empty_cart -->


        <!-- BEGIN orders -->
        <br>
        <br>
        <form action="?view=order&lang=[LANG]" method="post">
            <table width="100%" class="ms-table">
                <thead>
                    <tr>
                        <th colspan="2" align="center">##'Заказ'##</th>
                        <th>##'Цена'##</th>
                        <th>##'Количество'##</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- BEGIN order -->
                    <tr>
                        <td width="85" align="center">
                            <img src="[PHOTO_URL]" alt="[TITLE]">
                        </td>
                        <td>
                            [TITLE]
                        </td>
                        <td width="100" align="center">
                            [COST] [CURRENCY]
                        </td>
                        <td width="90" align="center">
                            <input type="hidden" name="[PARAM_NAME]" value="[PARAM_VALUE]">
                            <input min="1" step="1" type="number" name="[COUNT_NAME]" value="1"
                                   data-cost="[COST]" class="product-count" onchange="recalculation()">
                        </td>
                        <td width="50" align="center">
                            <span class="btn btn-link" data-photo-path="[PARAM_VALUE]"
                                  onclick="removeInCart(this)">##'удалить'##</span>
                        </td>
                    </tr>
                    <!-- END order -->
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5" align="right">
                            <br>
                            <b>##'Общая сумма'##: <span id="cost-sum">[COST_SUM]</span> [CURRENCY]</b>
                            <br>
                            <br>
                        </td>
                    </tr>
                </tfoot>
            </table>
            <br>

            <input class="btn pull-right" value="##'Продолжить'##" type="submit">
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
                var cost = parseFloat(elements[i].getAttribute('data-cost'));
                sum += parseFloat(elements[i].value) * cost;

            }

            document.getElementById('cost-sum').innerHTML = +sum.toFixed(10);
        }
    </script>
HTML
,
    'style' => <<<HTML
    <style>
        th { font-weight: bold; }
        td {
            padding: 5px;
            vertical-align: middle;
        }
        input[type=number] {
            width: 40px;
            height: 20px;
        }
    </style>
HTML
,
    'title' => array(
        'ru' => 'Корзина',
        'en' => 'Cart'
    ),
    'meta_desc' => array(
        'ru' => 'Корзина пользователя с его заказом',
        'en' => 'Users basket with his order'
    ),
    'meta_keys' => array(
        'ru' => 'магазин, сайт, каталог, карзина',
        'en' => 'site, catalog, cart, basket'
    ),
    'locutions' => array(
        'Информация о вашем заказе' => array('ru' => 'Информация о вашем заказе', 'en' => 'Information about your order'),
        'Нет заказов'               => array('ru' => 'Нет заказов', 'en' => 'No orders'),
        'Вид'                       => array('ru' => 'Вид', 'en' => 'View'),
        'Название'                  => array('ru' => 'Название', 'en' => 'Title'),
        'Цена'                      => array('ru' => 'Цена', 'en' => 'Price'),
        'Количество'                => array('ru' => 'Количество', 'en' => 'Quantity'),
        'Общая сумма'               => array('ru' => 'Общая сумма', 'en' => 'Total amount'),
        'Продолжить'                => array('ru' => 'Продолжить', 'en' => 'Continue'),
        'удалить'                   => array('ru' => 'удалить', 'en' => 'remove'),
        'Заказ'                     => array('ru' => 'Заказ', 'en' => 'Order'),
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
                            <span class="red-star">*</span>
                            ##'Имя и Фамилия'##:
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
                            <span class="red-star">*</span>
                            ##'Контактный телефон'##:
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
                            <span class="red-star">*</span>
                            ##'Адрес доставки'##:
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
                        <textarea name="info" rows="4" id="field_info"></textarea>
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
        td {
            padding: 5px;
            vertical-align: top;
        }
        .red-star { color: red; }
    </style>
HTML
,
    'title' => array(
        'ru' => 'Оформление заказа',
        'en' => 'Like to order'
    ),
    'meta_desc' => array(
        'ru' => 'Оформление заказа пользователем',
        'en' => 'Like to order user'
    ),
    'meta_keys' => array(
        'ru' => 'магазин, сайт, заказ, карзина',
        'en' => 'shop, site, cart, basket, order'
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
    'title' => array(
        'ru' => 'Завершение заказа',
        'en' => 'Сompletion order'
    ),
    'meta_desc' => array(
        'ru' => 'Завершение заказа',
        'en' => 'Сompletion order'
    ),
    'meta_keys' => array(
        'ru' => 'магазин, сайт, заказ, карзина, завершение заказа',
        'en' => 'site, cart, basket, order, completion order'
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
        Для того чтобы заказать товар, нажмите кнопку <b>"В корзину"</b> находящейся под картинкой.
        Если вы кликните мышкой на изображение, вы увидите его в увеличенном виде. Затем в разделе <b>"Ваш заказ"</b> уточните количество.
        Внизу списка товаров вы увидите общую стоимость.
        Если вы уверены в правильности заказа, нажмите на кнопку <b>"Продолжить"</b>.
        Вы увидите форму для отправки заказа нашему администратору. После правильного заполнения формы нажмите кнопку <b>"Отправить заказ"</b>.
    </p>
HTML
    ,
        'en' => <<<HTML
    <p>
        To order a product, click <b>"Add to Cart"</b> under the picture.
        If you click the mouse on the image, you will see it in a larger size. Then under <b>"Your order"</b> specify the amount.
        Bottom of the list of goods you will see the total cost.
        If you are unsure of the order, click <b>"Continue"</b>.
        You will see a form to order our administrator. After filling out the form correctly, click <b>"Submit Order"</b>.
    </p>
HTML
    ),
    'title' => array(
        'ru' => 'Помощь',
        'en' => 'Help'
    ),
    'meta_desc' => array(
        'ru' => 'Помощь пользователю в работе с сайтом',
        'en' => 'Help the user to work with the site'
    ),
    'meta_keys' => array(
        'ru' => 'магазин, сайт, помощь',
        'en' => 'shop, site, help'
    )
);


/**
 * Страница 404
 */
Micro_Init::$pages['404'] = array(
    'tpl' => <<<HTML
<!doctype html>
<!--
This content is licensed under Creative Commons Attribution 4.0. The full text of the license can be located at http://creativecommons.org/licenses/by/4.0/legalcode
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>[TITLE]</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
        <style>
            * {
                line-height: 1.5;
                margin: 0;
            }
            html {
                color: #888;
                font-family: sans-serif;
                text-align: center;
            }
            body {
                left: 50%;
                margin: -43px 0 0 -150px;
                position: absolute;
                top: 50%;
                width: 320px;
            }
            h1 {
                color: #555;
                font-size: 2em;
                font-weight: 400;
            }
            p { line-height: 1.2; }
            @media only screen and (max-width: 270px) {
                body {
                    margin: 10px auto;
                    position: static;
                    width: 95%;
                }
                h1 { font-size: 1.5em; }
            }
        </style>
    </head>
    <body>
        <h1>##'Page Not Found'##</h1>
        <p>##'Sorry, but the page you were trying to view does not exist.'##</p>
    </body>
</html>
<!-- IE needs 512+ bytes: http://blogs.msdn.com/b/ieinternals/archive/2010/08/19/http-error-pages-in-internet-explorer.aspx -->
HTML
,
    'title' => array(
        'ru' => 'Страница не найдена',
        'en' => 'Page Not Found'
    ),
    'locutions' => array(
        'Page Not Found' => array(
            'ru' => 'Страница не найдена',
            'en' => 'Page Not Found'
        ),
        'Sorry, but the page you were trying to view does not exist.' => array(
            'ru' => 'Извините, но страница которую вы пытаетесь просмотреть, не существует.',
            'en' => 'Sorry, but the page you were trying to view does not exist.'
        ),
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
    public function view($name) {

        $page = new Micro_Page($name);

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
    public function page404() {

        header($_SERVER['SERVER_PROTOCOL']." 404 Not Found");

        $template  = Micro_Init::pageProp('404', 'tpl');
        $title     = Micro_Init::pageProp('404', 'title');
        $locutions = Micro_Init::pageProp('404', 'locutions');

        $tpl = new Micro_Templater();
        $tpl->setTemplate($template);

        $tpl->assign('[TITLE]', USE_SITE_NAME_IN_TITLE ? SITE_NAME . ' - ' . $title : $title);

        return Micro_Tools::replaceLocutions($tpl->parse(), $locutions);
    }


    /**
     * Страница галлереи фотографий
     * @return Micro_Page
     */
    public function gallery() {

        $tpl = new Micro_Templater();
        $tpl->setTemplate(Micro_Init::pageProp('gallery', 'tpl'));

        $lang = isset($_GET['lang']) && $_GET['lang'] ? "&lang={$_GET['lang']}" : '';


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
            $page            = isset($_GET['page']) && $_GET['page'] > 0 ? (int)$_GET['page'] : 1;
            $available_types = array(
                'image/gif',  'image/png', 'image/jpg',
                'image/jpeg', 'image/bmp',
            );
            $dir_content = array(
                'dir'         => array(),
                'file'        => array(),
                'total_files' => 0
            );
            while ($element_name = readdir($handle)) {
                if ($element_name != "." && $element_name != "..") {
                    if (is_dir($path . '/' .  $element_name)) {
                        $dir_content['dir'][] = $element_name;

                    } elseif (in_array(mime_content_type($path . '/' . $element_name), $available_types)) {
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


            // Проверка ну сеществование зхапрошенной строницы
            if (($page * GALLERY_PHOTOS_ON_PAGE) - GALLERY_PHOTOS_ON_PAGE > $dir_content['total_files']) {
                return $this->page404();
            }


            // Директории
            if (empty($dir_content['dir'])) {
                $tpl->touchBlock('no_albums');

            } else {
                foreach ($dir_content['dir'] as $dir_name) {
                    $gallery_path = isset($_GET['path']) && $_GET['path'] != ''
                        ?  $_GET['path'] . '-' . Micro_Tools::pathToHash($dir_name)
                        :  Micro_Tools::pathToHash($dir_name);

                    $tpl->albums->album->assign('[GALLERY_URL]',  "index.php?view=gallery&path={$gallery_path}{$lang}");
                    $tpl->albums->album->assign('[GALLERY_NAME]', Micro_Tools::convertEncoding($dir_name));
                    if ($dir_name != end($dir_content['dir'])) $tpl->albums->album->reassign();

                    $tpl->albums->comboalbum->assign('[GALLERY_URL]',  "index.php?view=gallery&path={$gallery_path}{$lang}");
                    $tpl->albums->comboalbum->assign('[GALLERY_NAME]', Micro_Tools::convertEncoding($dir_name));
                    if ($dir_name != end($dir_content['dir'])) $tpl->albums->comboalbum->reassign();
                }
            }


            // Файлы
            foreach ($dir_content['file'] as $file_name) {
                $photo_path = isset($_GET['path']) && $_GET['path'] != ''
                    ?  $_GET['path'] . '-' . Micro_Tools::pathToHash($file_name)
                    :  Micro_Tools::pathToHash($file_name);

                $matches = array();
                if (preg_match('~^__([0-9\.,]+)__~sU', $file_name, $matches)) {

                    $tpl_pay = new Micro_Templater();
                    $tpl_pay->setTemplate(Micro_Init::pageProp('gallery', 'tpl_pay'));

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
                    "?view=gallery&path={$dir_path}&lang=[LANG]&page",
                    ceil($dir_content['total_files'] / GALLERY_PHOTOS_ON_PAGE),
                    isset($_GET['page']) ? $_GET['page'] : 1,
                    3
                );

                $tpl->photos->pagenation->assign('[PAGEBAR]', $pagebar);
            }
        }


        $page = new Micro_Page('gallery');
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
    public function cart() {

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


        $page = new Micro_Page('cart');
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
    public function add_in_cart() {

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
    public function remove_in_cart() {

        if (isset($_SESSION['cart'][$_POST['item']])) {
            unset($_SESSION['cart'][$_POST['item']]);
        }
        return json_encode(array('error' => 0));
    }


    /**
     * Страница с оформлением заказа
     * @return Micro_Page
     */
    public function order() {

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


        $page = new Micro_Page('order');
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
    public function order_send() {

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
    public function order_result() {

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

        $page = new Micro_Page('order_result');
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
    public function photo() {

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

    public function __construct($name = '') {
        $this->name = $name;
    }

    public $name = '';
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


    public function __construct() {

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
    public function dispatch() {

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
                preg_match('~^([^?]+)(?|)~', ltrim($_SERVER['REQUEST_URI'], '/'), $matches) &&
                $matches[1] != 'index.php'
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
    public function renderPage(Micro_Page $page) {

        $tpl = new Micro_Templater();
        $tpl->setTemplate(self::$template['tpl']);

        $lang = isset($_GET['lang']) && $_GET['lang'] ? $_GET['lang'] : DEFAULT_LANG;

        $tpl->assign('[TITLE]',      USE_SITE_NAME_IN_TITLE ? SITE_NAME . ' - ' . $page->title : $page->title);
        $tpl->assign('[META_KEYS]',  $page->meta_keys);
        $tpl->assign('[META_DESC]',  $page->meta_desc);
        $tpl->assign('[STYLE]',      $page->style);
        $tpl->assign('[JAVASCRIPT]', $page->javascript);
        $tpl->assign('[CONTENT]',    $page->content);
        $tpl->assign('[LANG]',       $lang);
        $tpl->assign('[SITE_NAME]',  SITE_NAME);

        // Валюта
        $tpl->assign('[CURRENCY]', defined(strtoupper('CURRENCY_' . $lang))
            ? constant(strtoupper('CURRENCY_' . $lang))
            : '');


        // Меню
        self::$menu = Micro_Tools::arraySort(self::$menu, 'position');
        foreach (self::$menu as $menu) {
            $is_active = in_array($page->name, $menu['active']) ? 'current' : '';
            $lang      = isset($_GET['lang']) && $_GET['lang'] ? "&lang={$_GET['lang']}" : '';

            $tpl->menu->assign('[CURRENT]',   $is_active);
            $tpl->menu->assign('[MENU_URL]',  '?view=' . $menu['view'] . $lang);
            $tpl->menu->assign('[MENU_NAME]', $menu['title']);
            if ($menu != end(self::$menu)) $tpl->menu->reassign();

            $tpl->combonav->assign('[MENU_URL]',  '?view=' . $menu['view'] . $lang);
            $tpl->combonav->assign('[MENU_NAME]', $menu['title']);
            if ($menu != end(self::$menu)) $tpl->combonav->reassign();
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
            $result = Micro_Tools::replaceLocutions($result, $locutions);

        } elseif ( ! empty($page->locutions)) {
            $result = Micro_Tools::replaceLocutions($result, $page->locutions);

        } elseif (isset(self::$template['locutions'])) {
            $result = Micro_Tools::replaceLocutions($result, self::$template['locutions']);
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
    public static function pageProp() {

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
    public static function sendMail($to, $subject, $message, array $options = array()) {

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
     * Замена слов в тексте обернутых в $embrace на на тот язык,
     * который сейчас выбран или на язык по умолчанию.
     * @param $str
     * @param array $locutions
     * @param string $embrace
     * @return mixed
     */
    public static function replaceLocutions($str, $locutions = array(), $embrace = "##''##") {

        global $global_locutions;
        $global_locutions = $locutions;

        if ((strlen($embrace) % 2) == 0) {
            $i = strlen($embrace) / 2;
            $embrace_start = preg_quote(substr($embrace, 0, $i));
            $embrace_end   = preg_quote(substr($embrace, $i));

        } else {            trigger_error('Embrace error', E_USER_WARNING);
            return $str;
        }

        if ( ! function_exists('replaceLocutionCondition')) {
            function replaceLocutionCondition ($matches) {
                global $global_locutions;
                if (isset($global_locutions[$matches[2]])) {
                    if (
                        isset($_GET['lang']) && $_GET['lang'] != '' &&
                        is_array($global_locutions[$matches[2]]) && isset($global_locutions[$matches[2]][$_GET['lang']])
                    ) {
                        return $global_locutions[$matches[2]][$_GET['lang']];

                    } elseif (is_array($global_locutions[$matches[2]]) && isset($global_locutions[$matches[2]][DEFAULT_LANG])) {
                        return $global_locutions[$matches[2]][DEFAULT_LANG];

                    } else {
                        return $matches[2];
                    }

                } else {
                    return $matches[2];
                }
            }
        }

        return preg_replace_callback("~($embrace_start(.+)$embrace_end)~mU", 'replaceLocutionCondition', $str);
    }


    /**
     * Получение ответа от сервера
     * @param resource $socket
     * @param string $expected_response
     * @throws Exception
     */
    private static function serverParse($socket, $expected_response) {

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
    public static function resizeImage($image_path, $max_height, $max_width, $save_path = null, $watermark_path = null) {

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
            list($orig_width, $orig_height, $image_type) = getimagesize($image_path);
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
    public static function convertEncoding($str, $to = 'utf-8', $from = null) {

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
    public static function detectEncoding($string, $pattern_size = 50) {

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
    public static function pathToHash($path, $algo = 'crc32b') {

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
    public static function hashToPath($hash_path, $algo = 'crc32b') {

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
    public function arraySort(array $array, $on, $order = SORT_ASC) {
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
    public static function paginate($base_url, $query_str, $total_pages, $current_page, $paginate_limit) {

        $pagebar = '';
        $break   = true;

        if ($current_page > 1) {
            $pagebar .= '<li><a class="prev" href="' . $base_url . $query_str . '=' . ($current_page - 1) . '">##\'Предыдущая\'##</a></li>';
        }

        for ( $i = 1; $i <= $total_pages; $i++ ) {
            if (
                $i == 1 || $i == $total_pages ||
                ($i >= $current_page - $paginate_limit && $i <= $current_page + $paginate_limit)
            ) {
                $break = true;
                if ($i != $current_page) {
                    $url      = $base_url . $query_str . "=" . $i;
                    $pagebar .= '<li><a href="' . $url . '">' . $i . '</a></li>';
                } else {
                    $pagebar .= '<li class="active"><span>' . $i . '</span></li>';
                }
            } elseif ($break == true) {
                $break    = false;
                $pagebar .= '<li class="break">&hellip;</li>';
            }
        }


        if ($current_page < $total_pages) {
            $pagebar .= '<li><a class="next" href="' . $base_url . $query_str . '=' . ($current_page + 1) . '">##\'Следующая\'##</a></li>';
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


    function __construct($tpl = '') {
        if ($tpl) $this->loadTemplate($tpl);
    }


    public function __isset($k) {
        return isset($this->_p[$k]);
    }


    /**
     * nested blocks will be stored inside $_p
     * @param $k
     * @return Common|null
     */
    public function __get($k) {
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


    public function __set($k, $v) {
        $this->_p[$k] = $v;
        return $this;
    }


    public function setEmbrace($em) {
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
    public function prependToBlock($block, $text) {
        $this->newBlock($block);
        $this->blocks[$block]['PREPEND'] = $text;
    }


    /**
     * @param $block
     * @param $text
     */
    public function appendToBlock($block, $text) {
        $this->newBlock($block);
        $this->blocks[$block]['APPEND'] = $text;
    }


    /**
     * @param $block
     */
    private function newBlock($block) {
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
    public function touchBlock($block) {
        $this->newBlock($block);
        $this->blocks[$block]['TOUCHED'] = true;
    }


    /**
     * @param $path
     * @param bool $strip
     */
    public function loadTemplate($path, $strip = true) {
        $this->html = $this->getTemplate($path, $strip);
    }


    /**
     * @param $path
     * @param bool $strip
     * @return bool|mixed|string
     */
    public function getTemplate($path, $strip = true) {
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
    public function setTemplate($html) {
        $this->html = $html;
        $this->blocks = array();
        $this->vars = array();
    }


    /**
     * the final render
     * @return string
     */
    public function parse() {
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
    private function autoSearch($html) {
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
    public function fillDropDown($inID, array $inOptions, $inVal = '') {
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
    public function assign($var, $value = '', $avoidEmbrace = false) {
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
    public function reassign() {
        $this->loopHTML[] = $this->parse();
        $this->clear();
    }


    /**
     * @param $block
     * @param string $html
     * @return string
     */
    public function getBlock($block, $html = '') {
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

    public abstract function install();
}


try {
    session_start();
    $init = new Micro_Init();
    echo $init->dispatch();

} catch (Exception $e) {
    ini_set('display_errors', 1);
    echo '<pre>';
    throw new Exception($e->getMessage());
}