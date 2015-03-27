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
 * Название магазина.
 * @see http://microshop.by/docs/settings#shop-name
 */
define('SHOP_NAME', 'Microshop');

/**
 * Адрес электронной почты на который будут приходить заказы.
 * А так же отбратный адрес который будет указан в письмах
 * отправляемых заказчику на указанный им email.
 * @see http://microshop.by/docs/settings#emails
 */
define('ORDER_EMAIL_TO',     'yourmail@domain.com');
define('ORDER_EMAIL_FROM',   'noreply@domain.com');

/**
 * Названия валют на сайте для разных языков
 * @see http://microshop.by/docs/settings#currency
 */
define('CURRENCY_RU', 'руб');
define('CURRENCY_EN', 'publes');

/**
 * Язык сайта по умолчанию и активные языки
 * @see http://microshop.by/docs/settings#languages
 */
define('DEFAULT_LANG', 'ru');
define('LANGUAGES',    'ru,en');

/**
 * Будет ли название сайта отображаться в загаловке страницы.
 * @see http://microshop.by/docs/settings#shop-name-in-title
 */
define('USE_SHOP_NAME_IN_TITLE', true);

/**
 * Директории используемые приложением.
 * @see http://microshop.by/docs/settings#dirs
 */
define('GALLERY_DIR', 'gallery');
define('PLUGINS_DIR', 'plugins');
define('CACHE_DIR',   'cache');

/**
 * Использовать кэширование или нет
 * @see http://microshop.by/docs/settings#use-cache
 */
define('USE_CACHE', true);

/**
 * Метод отправки писем - по умолчанию равен MAIL
 * Так же можно указать SMTP
 * @see http://microshop.by/docs/settings#email-method
 */
define('ORDER_EMAIL_METHOD', 'MAIL');

/**
 * Параметры для отправки писем при помощи метода SMTP
 * @see http://microshop.by/docs/settings#email-smtp-auth
 */
define('EMAIL_SMTP_HOST',   'localhost');
define('EMAIL_SMTP_PORT',   25);
define('EMAIL_SMTP_SECURE', '');
define('EMAIL_SMTP_AUTH',   false);
define('EMAIL_SMTP_USER',   '');
define('EMAIL_SMTP_PASS',   '');

/**
 * Количество товаров на странице.
 * @see http://microshop.by/docs/settings#products-rep-page
 */
define('NUMBER_PRODUCTS_PER_PAGE', 18);

/**
 * Путь до изображение с водяным знаком.
 * @see http://microshop.by/docs/settings#watermark
 */
define('WATERMARK_IMAGE', '');

/**
 *  Настройки для каких изображений будет применен водяной знак
 * @see http://microshop.by/docs/settings#use-watermark
 */
define('USE_WATERMARK_BIG_IMAGE',  true);
define('USE_WATERMARK_LIST_IMAGE', false);
define('USE_WATERMARK_CART_IMAGE', false);

/**
 * Размеры для картинок
 * @see http://microshop.by/docs/settings#image-sizes
 */
define('MAX_WIDTH_BIG_IMAGE',   640);
define('MAX_HEIGHT_BIG_IMAGE',  480);
define('MAX_WIDTH_LIST_IMAGE',  205);
define('MAX_HEIGHT_LIST_IMAGE', 180);
define('MAX_WIDTH_CART_IMAGE',  100);
define('MAX_HEIGHT_CART_IMAGE', 100);

/**
 * Режим отладки приложения
 * @see http://microshop.by/docs/settings#debug
 */
define('DEBUG', true);


/**
 * Меню
 */
Micro_Init::$_menu = array(
    'gallery' => 'Галерея',
    'cart'    => 'Ваш заказ'
);



/**
 * Маршрутизатор
 */
Micro_Init::$_router = array(
    'home' => array(
        'menu'    => array( 'Micro_MainMenu' ),
        'content' => array( 'Micro_Gallery' ),
        'sidebar' => array( 'Micro_Categories' )
    ),
    'gallery' => array(
        'menu'    => array( 'Micro_MainMenu' ),
        'content' => array( 'Micro_Gallery' ),
        'sidebar' => array( 'Micro_Categories' )
    ),
    'cart' => array(
        'menu'    => array( 'Micro_MainMenu' ),
        'content' => array( 'Micro_Cart' )
    )
);


/**
 * Переводы
 */
Micro_Init::$_locutions = array(
    'en' => array(
        'Цена'                      => 'Price',
        'Галерея'                   => 'Gallery',
        'Ваш заказ'                 => 'Your order',
        'Меню'                      => 'Menu',
        'В корзину'                 => 'Add to cart',
        'Отмена'                    => 'Cancel',
        'Предыдущая'                => 'Previous',
        'Следующая'                 => 'Next',
        'Ошибка'                    => 'Error',
        'Категории'                 => 'Categories',
        'Категории отсутствуют'     => 'Categories are missing',
        'Информация о вашем заказе' => 'Information about your order',
        'Нет заказов'               => 'No orders',
        'Вид'                       => 'View',
        'Название'                  => 'Title',
        'Количество'                => 'Quantity',
        'Общая сумма'               => 'Total amount',
        'Продолжить'                => 'Continue',
        'удалить'                   => 'remove',
        'Заказ'                     => 'Order',
        'Имя и Фамилия'             => 'Name and Surname',
        'Контактный телефон'        => 'Contact phone',
        'Ваш email'                 => 'Your email',
        'Адрес доставки'            => 'Delivery Address',
        'Дополнительная информация' => 'Additional information',
        'Отправить заказ'           => 'Send order',
        'назад'                     => 'back',
        'Новый заказ'               => 'New order',
        'Заказ от'                  => 'Order from',
        'Содержание заказа'         => 'Contents of order',
        'Цена 1шт.'                 => 'Price 1pc.',
        'Количество шт.'            => 'Number of pieces.',
        'Цена всего'                => 'Price total',
        'Общая стоимость'           => 'The total cost',
        'Заказ отправлен'           => 'Orders sent',
        'Назад в галерею'           => 'Back to gallery',
        'Страница не найдена'       => 'Page Not Found',
        'Добавьте в папку'          => 'Add to folder',
        'изображения ваших товаров' => 'images of your products',
        'Директория галереи пуста'  => 'Gallery folder empty',
        'Директория с галереей товаров отсутствует'      => 'Gallery folder do not exist',
        'Необходимо создать директорию'                  => 'You must create a directory',
        'Как это сделать?'                               => 'How to do it?',
        'Укажите пожалуйста адрес доставки'              => 'Please specify the delivery address',
        'Укажите пожалуйста контактный телефон'          => 'Please fill in contact phone number',
        'Укажите пожалуйста ваше имя'                    => 'Please fill in your name',
        'поля, обязательные для заполнения'              => 'fields are required',
        'Для оформления заказа нужен хотя бы один товар' => 'Ordering need at least one item',
        'Спасибо за ваш заказ. Скоро с вами свяжутся для подтверждения.' => 'Thank you for your inquiry. Soon you will be contacted for confirmation.',
        'Во время отправки заказа что-то пошло не так. Пожалуйста попробуйте повторить заказ.' => 'While sending order something went wrong. Please try to repeat the order.',
        'Извините, но страница которую вы пытаетесь просмотреть, не существует.' => 'Sorry, but the page you were trying to view does not exist.',
    ),
);


/***************************
 *====== HTML секция ======*
 **************************/



/**
 * Планировка страницы
 */
Micro_Layout::$meta = array(
    'tpl' => <<<HTML
<!DOCTYPE html>
<html>
<head>
    <title>[TITLE]</title>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="content-type"       content="text/META; charset=utf-8"/>
    <meta name="robots"             content="all"/>
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
        embed,figure,figcaption,footer,header,menu,nav,
        output,ruby,section,summary,time,mark,audio,video {
            border:0;
            font:inherit;
            font-size:100%;
            margin:0;
            padding:0;
            vertical-align:baseline;
        }
        html, body { height: 100%;}
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
        .wrapper h2 { margin-bottom: 10px; }
        body p {
            margin-bottom:21px;
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
            line-height: 100%;
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
        header {
            background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAICAYAAAAx8TU7AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAADFJREFUeNpifPXqlTEDEggICGBgAhHIYMOGDQxMIAJdggkmiyzBhKwNJsFImUUAAQYA5dgZ0UtKh+cAAAAASUVORK5CYII=");
            background-position: center bottom;
            background-repeat: repeat-x;
            margin-bottom: 32px;
            padding-bottom: 8px;
        }
        header > #h-wrap { background-color:#444; }
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
            min-height: 100%;
            height: auto !important;
            height: 100%;
            padding: 0;
        }
        #main > .wrapper {
          padding-bottom: 160px;
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
        footer {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAOCAYAAAAWo42rAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAFRJREFUeNpifPXqlTEDEAQEBDBs2LCBARkgizHBBEECIAlkgCzGCDMRmynIYoxWVlbG+KyEASZCVsIVEuM+GnkGSKMoxAUY////zzDYFRLrGYAAAwBmmUERGMSYkwAAAABJRU5ErkJggg==);
            background-repeat: repeat-x;
            background-position: top center;
            margin-top: -160px;
            min-height: 100px;
        }
        footer .wrapper {
            padding-top:45px;
            margin-top:60px;
        }
        article,aside,details,figcaption,figure,footer,header,
        menu,nav,section,article,aside,canvas,figure,figure img,
        figcaption,footer,header,nav,section,audio,video {
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
        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .wrapper { width: 712px;}
        }
        @media only screen and (max-width: 767px) {
            #nav { display: none; }
            .wrapper { width: 252px; }
            h1 { font-size: 40px }
        }
        @media only screen and (min-width: 480px) and (max-width: 767px) {
            .wrapper { width: 436px; }
        }
    </style>
    [STYLE]

    <script type="text/javascript">
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
    <div id="main">
        <header class="clearfix">
            <div id="h-wrap">
                <div class="wrapper clearfix">
                    <a href="[FILE_NAME]" id="logo">[SHOP_NAME]</a>
                    <!-- BEGIN position_header -->
                    [HEADER]
                    <!-- END position_header -->
                    <!-- BEGIN position_menu -->
                    [MENU]
                    <!-- END position_menu -->
                </div>
            </div>
        </header>

        <div class="wrapper">
            <!-- BEGIN taxonomy -->
            <ul class="taxonomy">
                <!-- BEGIN step -->
                <li class="[IS_ACTIVE]">
                    <a href="[STEP_URL]">[STEP_TITLE]</a>

                    <!-- BEGIN divider -->
                    <span class="divider">/</span>
                    <!-- END divider -->
                </li>
                <!-- END step -->
            </ul>
            <!-- END taxonomy -->

            <!-- BEGIN position_top -->
            [TOP]
            <!-- END position_top -->

            <!-- BEGIN position_sidebar -->
            <aside id="sidebar">
                [SIDEBAR]
            </aside>
            <!-- END position_sidebar -->

            <!-- BEGIN position_content -->
            [CONTENT]
            <!-- END position_content -->
        </div>
    </div>

    <footer>
        <div class="wrapper">
            <!-- BEGIN position_footer -->
            [FOOTER]
            <!-- END position_footer -->

            <!-- BEGIN lang_switcher -->
            [CONTROL]
            <!-- END lang_switcher -->
        </div>
    </footer>

</body>
</html>
HTML
);


/**
 * Языки
 */
Micro_Lang::$meta = array(
    'tpl' => <<<HTML
        <div id="lang-switcher">
            <select onchange="selectLang(this.value)" name="lang">
                <!-- BEGIN languages -->
                <option value="[LANG_ISO]" [SELECTED]>[LANG_ISO]</option>
                <!-- END languages -->
            </select>
        </div>
HTML
    ,
    'javascript' => <<<HTML
        <script type="text/javascript">
            function selectLang(lang) {
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
        </script>
HTML
    ,
    'style' => <<<HTML
        <style>
            #lang-switcher {
                float: right;
                margin-left: 10px;
                margin-right: 10px;
            }
        </style>
HTML
);


/**
 * Меню
 */
Micro_MainMenu::$meta = array(
    'tpl' => <<<HTML
        <nav>
            <ul id="nav">
                <!-- BEGIN menu -->
                <li class="[CURRENT]">
                    <a href="[MENU_URL]">##'[MENU_NAME]'##</a>
                </li>
                <!-- END menu -->
            </ul>

            <select id="combonav" onchange="selectNav(this)">
                <option value="" selected="selected">##'Меню'##</option>
                <!-- BEGIN combonav -->
                <option value="[MENU_URL]">##'[MENU_NAME]'##</option>
                <!-- END combonav -->
            </select>
        </nav>
HTML
    ,
    'javascript' => <<<HTML
        <script type="text/javascript">
            function selectNav(select) {
                document.location.href = select.value;
            }
        </script>
HTML
    ,
    'style' => <<<HTML
        <style>
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
            #nav>li.current>a { border-bottom:solid #ebebe8 5px; }
            #combonav {
                display: none;
                width: 100%;
            }
            @media only screen and (min-width: 768px) and (max-width: 991px) {
                #nav { display: block; }
                #combonav { display: none; }
            }
            @media only screen and (max-width: 767px) {
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
                #combonav { display: block; }
            }
            @media only screen and (min-width: 480px) and (max-width: 767px) {
                #nav>li{ width: 436px; }
                #combonav { display: block; }
            }
        </style>
HTML
);


/**
 * Категории
 */
Micro_Categories::$meta = array(
    'tpl' => <<<HTML
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
HTML
    ,
    'style' => <<<HTML
    <style>
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
        @media only screen and (min-width: 480px) and (max-width: 767px) {
            #albums { display: none; }
            #combo-albums { display: inline; }
        }
        @media only screen and (max-width: 480px) {
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
    </script>
HTML
);


/**
 * Галлерея товаров
 */
Micro_Gallery::$meta = array(
    'tpl' => <<<HTML

    <!-- BEGIN photos -->
    <div id="photo_wrapper">
        <!-- BEGIN photo -->
        <div class="photo">
            <div class="image-container">
                <div class="div-img">
                    <a href="[PHOTO_BIG_URL]">
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
                [PHOTO_COST] [CURRENCY]
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
            margin-right: 15px;
            text-align: right;
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
        var gallery = {
            order : function (obj) {
                var photo_path = obj.getAttribute("data-photo-path");
                obj.classList.add('btn-preloader');

                if (obj.classList.contains('add_in_cart')) {
                    doPost('[FILE_NAME]?view=cart&action=add_in_cart', {item : photo_path}, function (data) {
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
                    doPost('[FILE_NAME]?view=cart&action=remove_in_cart', {item : photo_path}, function (data) {
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
);


/**
 * Корзина пользователя
 */
Micro_Cart::$meta = array(
    'cart' => array(
        'tpl' => <<<HTML
            <h2>##'Информация о вашем заказе'##</h2>

            <!-- BEGIN empty_cart -->
            <h3>##'Нет заказов'##!</h3>
            <!-- END empty_cart -->


            <!-- BEGIN orders -->
            <br>
            <form action="?view=cart&action=order&lang=[LANG]" method="post">
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
                                <a href="[PHOTO_BIG_URL]">
                                    <img src="[PHOTO_URL]" alt="[TITLE]">
                                </a>
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

                <input class="btn btn-success pull-right" value="##'Продолжить'##" type="submit">
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
                                    break;
                                }
                            }
                        }

                        return result;
                    }
                }

                function removeInCart (obj) {
                    var photo_path = obj.getAttribute("data-photo-path");
                    obj.classList.add('btn-preloader');
                    obj.classList.remove('btn-delete');

                    doPost('?view=cart&action=remove_in_cart', {item : photo_path}, function (data) {
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
        )
    ),
    'order' => array(
        'tpl' => <<<HTML
            <!-- BEGIN empty_order -->
            <h3>##'Для оформления заказа нужен хотя бы один товар'##</h3>
            <br>
            <a href="javascript:window.history.back()">##'назад'##</a>
            <!-- END empty_order -->

            <!-- BEGIN order_form -->
            <form method="post" action="?view=cart&action=order_send&lang=[LANG]"
                  onsubmit="return ValidateForm(this)">

                <!-- BEGIN orders -->
                <input type="hidden" name="[ORDER_PARAM_NAME]" value="[ORDER_NAME]">
                <input type="hidden" name="[ORDER_PARAM_COUNT]" value="[ORDER_COUNT]">
                <!-- END orders -->

                <div class="ms-field-container">
                    <div class="ms-field-label">
                        <label for="field_name">
                            <span class="red-star">*</span>
                            ##'Имя и Фамилия'##:
                        </label>
                    </div>
                    <div class="ms-field-input">
                        <input type="text" name="name" id="field_name"
                               required="required"
                               data-required-message="##'Укажите пожалуйста ваше имя'##">
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="ms-field-container">
                    <div class="ms-field-label">
                        <label for="field_tel">
                            <span class="red-star">*</span>
                            ##'Контактный телефон'##:
                        </label>
                    </div>
                    <div class="ms-field-input">
                        <input type="tel" name="tel" id="field_tel"
                               required="required"
                               data-required-message="##'Укажите пожалуйста контактный телефон'##">
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="ms-field-container">
                    <div class="ms-field-label">
                        <label for="field_email">
                            ##'Ваш email'##:
                        </label>
                    </div>
                    <div class="ms-field-input">
                        <input type="email" id="field_email" name="email">
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="ms-field-container">
                    <div class="ms-field-label">
                        <label for="field_adres">
                            <span class="red-star">*</span>
                            ##'Адрес доставки'##:
                        </label>
                    </div>
                    <div class="ms-field-input">
                        <input type="text" name="adres" id="field_adres"
                               required="required"
                               data-required-message="##'Укажите пожалуйста адрес доставки'##">
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="ms-field-container">
                    <div class="ms-field-label">
                        <label for="field_info">
                            ##'Дополнительная информация'##:
                        </label>
                    </div>
                    <div class="ms-field-input">
                        <textarea name="info" rows="4" id="field_info"></textarea>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="ms-field-container">
                    <div class="ms-field-label"></div>
                    <div class="ms-field-input">
                        <input type="submit" class="btn btn-success" value="##'Отправить заказ'##">
                    </div>
                    <div class="clearfix"></div>
                </div>

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
                .ms-field-container {
                    margin-bottom: 14px;
                }
                .ms-field-label {
                    float: left;
                    margin-right: 5px;
                    text-align: right;
                    width: 190px;
                    height: 20px;
                }
                .ms-field-input {
                    width: 225px;
                    float: left;
                }
                @media only screen and (max-width: 480px) {
                    .ms-field-label {
                        width: 190px;
                        text-align: left;
                    }
                    .ms-field-input { width: 225px }
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
        )
    ),
    'order_result' => array(
        'tpl' => <<<HTML
    <!-- BEGIN success -->
    <h3>##'Заказ отправлен'##</h3>
    <br>
    <p>##'Спасибо за ваш заказ. Скоро с вами свяжутся для подтверждения заказа.'##</p>
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
        )
    ),
    'order_email_admin' => array(
        'subject' => SHOP_NAME . ' - ##\'Новый заказ\'##',
        'tpl' => <<<HTML
    <html>
        <header>
            <title>##'Заказ от'## [NAME]</title>
        </header>
        <body>
            <b>##'Заказ от'##:</b> [NAME]<br>
            <b>Email:</b> [EMAIL]<br>
            <b>##'Контактный телефон'##:</b> [TEL]<br>
            <b>##'Адрес доставки'##:</b> [ADRES]<br>
            <br>
            <b>##'Дополнительная информация'##:</b><br>
            [INFO]
            <br>
            <br>

            <table border="1">
                <caption>##'Содержание заказа'##</caption>
                <thead>
                    <tr>
                        <th>##'Заказ'##</th>
                        <th width="50">##'Цена 1шт.'##</th>
                        <th width="50">##'Количество шт.'##</th>
                        <th width="50">##'Цена всего'##</th>
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
                        <td colspan="4" align="right"><b>##'Общая стоимость'##:</b> [GLOBAL_PRICE]</td>
                    </tr>
                </tfoot>
            </table>
        </body>
    </html>
HTML
    ),
    'order_email_client' => array(
        'subject' => SHOP_NAME . ' - ##\'Ваш заказ\'##',
        'tpl' => <<<HTML
    <html>
        <body>
            ##'Спасибо за ваш заказ. Скоро с вами свяжутся для подтверждения.'##
        </body>
    </html>
HTML
    )
);


/**
 * Страница 404
 */
Micro_Page404::$meta = array(
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
                width: 325px;
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
        <h1>##'Страница не найдена'##</h1>
        <p>##'Извините, но страница которую вы пытаетесь просмотреть, не существует.'##</p>
    </body>
</html>
<!-- IE needs 512+ bytes: http://blogs.msdn.com/b/ieinternals/archive/2010/08/19/http-error-pages-in-internet-explorer.aspx -->
HTML
    ,
    'title' => array(
        'ru' => 'Страница не найдена',
        'en' => 'Page Not Found'
    )
);


/**
 * Общие мета данные
 */
Micro_Init::$_meta = array(
    'empty_gallery' => array(
        'tpl' => <<<HTML
<!doctype html>
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
                margin: -43px 0 0 -265px;
                position: absolute;
                top: 50%;
                width: 530px;
            }
            h1 {
                color: #555;
                font-size: 2em;
                font-weight: 400;
            }
            a { color: #666 }
            p { line-height: 1.2; }
            .help {cursor: help}
            .label {
                background-color: #ececec;
                border-radius: 0.25em;
                color: #7f7f7f;
                display: inline;
                font-size: 75%;
                font-weight: 700;
                line-height: 1;
                padding: 0.2em 0.6em 0.3em;
                text-align: center;
                vertical-align: baseline;
                white-space: nowrap;
            }
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
        <h1>##'Директория галереи пуста'##</h1>
        <p>
            ##'Добавьте в папку'## <span class="label help" title="[REAL_GALLERY_DIR]">[GALLERY_DIR]</span> ##'изображения ваших товаров'##.
            <br/><a href="http://microshop.by/docs/using">##'Как это сделать?'##</a>
        </p>
    </body>
</html>
HTML
        ,
        'title' => array(
            'ru' => 'Директория галереи пуста',
            'en' => 'Gallery folder empty'
        )
    ),
    'no_gallery' => array(
        'tpl' => <<<HTML
<!doctype html>
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
                margin: -43px 0 0 -265px;
                position: absolute;
                top: 50%;
                width: 530px;
            }
            h1 {
                color: #555;
                font-size: 2em;
                font-weight: 400;
            }
            p { line-height: 1.2; }
            a { color: #666 }
            .help {cursor: help}
            .label {
                background-color: #ececec;
                border-radius: 0.25em;
                color: #7f7f7f;
                display: inline;
                font-size: 75%;
                font-weight: 700;
                line-height: 1;
                padding: 0.2em 0.6em 0.3em;
                text-align: center;
                vertical-align: baseline;
                white-space: nowrap;
            }
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
        <h1>##'Директория с галереей товаров отсутствует'##</h1>
        <p>
            ##'Необходимо создать директорию'## <span class="label help" title="[REAL_GALLERY_DIR]">[GALLERY_DIR]</span>
            <br/><a href="http://microshop.by/docs/settings/#dirs">##'Как это сделать?'##</a>
        </p>
    </body>
</html>
HTML
        ,
        'title' => array(
            'ru' => 'Директория с галереей товаров отсутствует',
            'en' => 'Gallery folder do not exist'
        )
    )
);


/*************************
 *====== PHP секция =====*
 ************************/



/**
 * Class Micro_Init
 */
class Micro_Init {

    public static $_router     = array();
    public static $_menu       = array();
    public static $_locutions  = array();
    public static $_components = array();
    public static $_meta       = array();


    private static $_taxonomy = array();
    private static $_registry = array();
    private static $_plugins  = array();


    /**
     * Получает список активных плагинов
     * @return array Список активных плагинов
     */
    protected function getPlugins() {

        if (empty(self::$_plugins) && is_dir(PLUGINS_DIR)) {
            $h = opendir(PLUGINS_DIR);
            while ($element = readdir($h)) {
                if ($element != '.' && $element != '..' &&
                    is_file(PLUGINS_DIR . '/' . $element) &&
                    substr($element, strrpos($element, '.')+1) == 'php'
                ) {
                    require_once PLUGINS_DIR . '/' . $element;

                    $plugin_name = substr($element, 0, strrpos($element, '.'));
                    if (class_exists($plugin_name)) {
                        $plugin_vars = get_class_vars($plugin_name);
                        $parents     = class_parents($plugin_name);
                        if ((in_array('Micro_Plugin_Abstract', $parents) || in_array('Micro_Component_Abstract', $parents)) &&
                            isset($plugin_vars['is_active']) && $plugin_vars['is_active']
                        ) {
                            $this->addRoute($plugin_name);
                            $this->addMenu($plugin_name);
                            $this->addLocutions($plugin_name);

                            $extend_class                 = current($parents);
                            self::$_plugins[$plugin_name] = $extend_class == 'Micro_Plugin_Abstract' ||
                            $extend_class == 'Micro_Component_Abstract'
                                ? $plugin_name
                                : $extend_class;
                        }
                    }

                } elseif ($element != '.' && $element != '..' &&
                          is_dir(PLUGINS_DIR . '/' . $element) &&
                          is_file(PLUGINS_DIR . "/{$element}/{$element}.php")
                ) {
                    require_once PLUGINS_DIR . "/{$element}/{$element}.php";

                    $plugin_name = '\\Plugins\\' . $element;
                    if (class_exists($plugin_name)) {
                        $plugin_vars = get_class_vars($plugin_name);
                        $parents     = class_parents($plugin_name);
                        if ((in_array('Micro_Plugin_Abstract', $parents) || in_array('Micro_Component_Abstract', $parents)) &&
                            isset($plugin_vars['is_active']) && $plugin_vars['is_active']
                        ) {
                            $this->addRoute($plugin_name);
                            $this->addMenu($plugin_name);
                            $this->addLocutions($plugin_name);

                            $extend_class                 = current($parents);
                            self::$_plugins[$plugin_name] = $extend_class == 'Micro_Plugin_Abstract' ||
                            $extend_class == 'Micro_Component_Abstract'
                                ? $plugin_name
                                : $extend_class;
                        }
                    }

                } elseif ($element != '.' && $element != '..' &&
                    is_file(PLUGINS_DIR . '/' . $element) &&
                    substr($element, strrpos($element, '.')+1) == 'phar'
                ) {
                    require_once 'phar://plugins/Micro_Plugin_Gallery.phar';

                    $plugin_name = '\\Plugins\\' . substr($element, 0, strrpos($element, '.'));
                    if (class_exists($plugin_name)) {
                        $plugin_vars = get_class_vars($plugin_name);
                        $parents     = class_parents($plugin_name);
                        if ((in_array('Micro_Plugin_Abstract', $parents) || in_array('Micro_Component_Abstract', $parents)) &&
                            isset($plugin_vars['is_active']) && $plugin_vars['is_active']
                        ) {
                            $this->addRoute($plugin_name);
                            $this->addMenu($plugin_name);
                            $this->addLocutions($plugin_name);

                            $extend_class                 = current($parents);
                            self::$_plugins[$plugin_name] = $extend_class == 'Micro_Plugin_Abstract' ||
                            $extend_class == 'Micro_Component_Abstract'
                                ? $plugin_name
                                : $extend_class;
                        }
                    }
                }
            }
        }

        return self::$_plugins;
    }


    /**
     * Соединяет в основным маршрутизатором внутренний маршрутизатор указанного плагина
     * @param string $plugin Название плагина
     * @return void
     */
    private function addRoute($plugin) {

        $plugin_vars = get_class_vars($plugin);
        if ( ! empty($plugin_vars['router'])) {
            foreach ($plugin_vars['router'] as $page=>$content) {
                if ( ! empty($content)) {
                    foreach ($content as $place=>$classes) {
                        if ( ! empty($classes)) {
                            foreach ($classes as $class) {
                                self::$_router[$page][$place][] = $class;
                            }
                        }
                    }
                }
            }
        }
    }


    /**
     * Соединяет в основным меню внутреннем меню указанного плагина
     * @param string $plugin Название плагина
     * @return void
     */
    private function addMenu($plugin) {

        $plugin_vars = get_class_vars($plugin);
        if ( ! empty($plugin_vars['menu'])) {
            foreach ($plugin_vars['menu'] as $path=>$title) {
                self::$_menu[$path] = $title;
            }
        }
    }


    /**
     * Добаяляет в основной список переводов, переводы из плагина
     * @param string $plugin Название плагина
     * @return void
     */
    private function addLocutions($plugin) {

        $plugin_vars = get_class_vars($plugin);
        if ( ! empty($plugin_vars['locutions'])) {
            foreach ($plugin_vars['locutions'] as $lang=>$locutions) {
                if ( ! empty($locutions)) {
                    foreach ($locutions as $locution=>$translate) {
                        self::$_locutions[$lang][$locution] = $translate;
                    }
                }
            }
        }
    }


    /**
     * Получение из реестра значение ранее помещенное под указанным именем
     * @param string $name Имя содержимого
     * @return mixed Любое значение ранее помещенное под указанным именем.
     */
    protected function getRegistry($name) {
        return isset(self::$_registry[$name])
            ? self::$_registry[$name]
            : null;
    }


    /**
     * Помещает в реестор какое-либо значение под указанным именем.
     * Если под указанным именем уже что-то есть, то его содержимое будет изменено.
     * @param string $name Имя содержимого
     * @param mixed $var Любое значение, которое нужно поместить под указанным именем
     * @return void
     */
    protected function setRegistry($name, $var) {
        self::$_registry[$name] = $var;
    }


    /**
     * Добавление пути в таксонамию
     * @param string $title Название страницы
     * @param string $url Адрес страницы
     * @return void
     */
    protected function addTaxonomy($title, $url) {
        self::$_taxonomy[] = array('title' => $title, 'url' => $url);
    }


    /**
     * Получение содержимого таксономии
     * @return array Сформированный ранее путь
     */
    protected function getTaxonomy() {
        return self::$_taxonomy;
    }


    /**
     * Возвращает текст страницы 404 для вставки его на страницу.
     * @return string Текст страницы 404
     */
    protected function page404() {

        if ( ! ($page404 = self::getRegistry('page404'))) {
            $plugins = self::getPlugins();

            foreach ($plugins as $plugin) {
                if ($plugin == 'Micro_Page404') {
                    $page404 = new $plugin();
                    break;
                }
            }

            if ( ! isset($page404)) {
                $page404 = new Micro_Page404();
            }
            self::setRegistry('page404', $page404);
        }

        return $page404->index();
    }


    /**
     * Получение переводов
     * @param string $lang Язык переводов
     * @return array|null Массив с переводами
     */
    protected function getLocutions($lang = '') {

        if ($lang == '') $lang = $this->getLang();
        $locutions = self::$_locutions;

        if (isset($locutions[$lang]) && is_array($locutions[$lang])) {
            return $locutions[$lang];
        }

        return null;
    }


    /**
     * Возвращает текущий язык на странице
     * @return string Двухбуквенное обозначение языка
     */
    protected function getLang() {

        if ( ! ($micro_lang = self::getRegistry('lang'))) {
            $plugins = self::getPlugins();
            foreach ($plugins as $plugin=>$extend) {
                if ($extend == 'Micro_Lang') {
                    $micro_lang = new $plugin();
                    break;
                }
            }

            if ( ! isset($micro_lang)) {
                $micro_lang = new Micro_Lang();
            }
            self::setRegistry('lang', $micro_lang);
        }

        return $micro_lang->index();
    }


    /**
     * Получение общих мета данных
     * @return array|null
     */
    protected function getMeta() {

        $args = func_get_args();
        $meta = self::$_meta;
        $prop = array();

        foreach ($args as $arg) {
            if (isset($meta[$arg])) {
                $meta = $meta[$arg];
                $prop  = $meta;
            } else {
                return null;
            }
        }

        if (is_array($prop)) {
            $lang = $this->getLang();
            if (isset($prop[$lang])) return $prop[$lang];
        }

        return $prop;
    }
}


/**
 * Class Micro_Component_Abstract
 */
abstract class Micro_Component_Abstract extends Micro_Init {

    public static $is_active = true;
    abstract public function index();


    /**
     * Получение мета данных компонента
     * @return array|null
     */
    protected function getComponent() {

        $args       = func_get_args();
        $components = self::$_components;
        $prop       = array();

        foreach ($args as $arg) {
            if (isset($components[$arg])) {
                $components = $components[$arg];
                $prop  = $components;
            } else {
                return null;
            }
        }

        if (is_array($prop)) {
            $lang = $this->getLang();
            if (isset($prop[$lang])) return $prop[$lang];
        }

        return $prop;
    }
}



/**
 * Class Micro_Plugin_Abstract
 */
abstract class Micro_Plugin_Abstract extends Micro_Init {

    public static $is_active = true;
    public static $router    = array();
    public static $locutions = array();
    public static $meta      = array();
    public static $menu      = array();

    abstract public function index();
}


/**
 * Class Micro_Layout
 */
class Micro_Layout extends Micro_Component_Abstract {

    protected $title          = '';
    protected $meta_desc      = '';
    protected $meta_keys      = '';
    protected $lang           = '';
    protected $style          = array();
    protected $javascript     = array();
    protected $positions      = array();
    protected $page_structure = array();
    public static $meta       = array();

    public function __construct() {

        $this->lang           = $this->getLang();
        $this->page_structure = $this->getPageStructure();
        $this->plugins        = $this->getPlugins();
    }


    /**
     * @return string
     */
    public function index() {

        if ($this->page_structure === false) return $this->page404();

        foreach ($this->page_structure as $position => $classes) {
            foreach ($classes as $class) {
                if (in_array($class, $this->plugins)) {
                    $class = array_search($class, $this->plugins);
                    $p_class = new $class();
                } else {
                    $p_class = new $class();
                }

                $page = $p_class->index();

                if ($page instanceof stdClass) {
                    if (isset($page->title))      $this->title = $page->title;
                    if (isset($page->meta_desc))  $this->meta_desc = $page->meta_desc;
                    if (isset($page->meta_keys))  $this->meta_keys = $page->meta_keys;
                    if (isset($page->style))      $this->style[] = $page->style;
                    if (isset($page->javascript)) $this->javascript[] = $page->javascript;
                    if (isset($page->content)) {

                        $this->setPosition($position, $page->content);
                    }
                }
            }
        }


        $tpl = new Micro_Templater();
        $tpl->setTemplate(self::$meta['tpl']);

        $positions = $this->getPositions();
        foreach ($positions as $position => $content) {
            $uc_position = strtoupper($position);
            if ($content != '')  $tpl->{"position_{$position}"}->assign("[{$uc_position}]", $content);
        }


        $tpl->assign('[LANG]',       $this->lang);
        $tpl->assign('[SHOP_NAME]',  SHOP_NAME);
        $tpl->assign('[FILE_NAME]',  basename(__FILE__));


        $taxonomy = $this->getTaxonomy();

        if ( ! empty($taxonomy)) {
            foreach ($taxonomy as $step) {
                $tpl->taxonomy->step->assign('[STEP_URL]',   $step['url']);
                $tpl->taxonomy->step->assign('[STEP_TITLE]', "##'{$step['title']}'##");
                if ($step != end($taxonomy)) {
                    $tpl->taxonomy->step->touchBlock('divider');
                    $tpl->taxonomy->step->reassign();
                }
            }
        }


        // Контрол для выбора языка сайта
        $class_lang    = $this->getRegistry('lang');
        $lang_switcher = $class_lang->getLangSwitcher();

        if ($lang_switcher instanceof stdClass) {
            if (isset($lang_switcher->style))$this->style[] = $lang_switcher->style;
            if (isset($lang_switcher->javascript))$this->javascript[] = $lang_switcher->javascript;

            $tpl->lang_switcher->assign('[CONTROL]', $lang_switcher->content);
        }


        $tpl->assign('[TITLE]',      $this->getTitle());
        $tpl->assign('[META_KEYS]',  $this->meta_keys ? $this->meta_keys : '');
        $tpl->assign('[META_DESC]',  $this->meta_desc ? $this->meta_desc : '');
        $tpl->assign('[STYLE]',      implode("\n", $this->style));
        $tpl->assign('[JAVASCRIPT]', implode("\n", $this->javascript));


        $result = $tpl->render();

        // Перевод и вывод финальной страницы
        return Micro_Tools::replaceLocutions($result, $this->getLocutions());
    }


    /**
     * Получение структуры текущей (запрашиваемой) страницы
     * @return array|bool Массив структуры, либо false если найти запрашиваемую страницу не удалось
     */
    protected function getPageStructure() {

        $matches = array();
        preg_match('~^([^?]+)(?|)~', $_SERVER['REQUEST_URI'], $matches);
        $current_url = $matches[1];
        foreach (self::$_router as $page=>$structure) {
            if ((isset($_GET['view']) && $_GET['view'] == $page && $_GET['view'] != 'home') ||
                $page == 'home' && ! isset($_GET['view']) ||
                preg_match('~^[\~`/].*[\~`/]*$~', $page) && preg_match($page, $current_url)
            ) {
                return $structure;
            }
        }
        return false;
    }


    /**
     * @param $content
     */
    protected function addToMenu($content) {

        $this->positions['menu'][] = $content;
    }


    /**
     * @param string $content
     */
    protected function addToHeader($content) {

        $this->positions['header'][] = $content;
    }


    /**
     * @param string $position
     * @param string $content
     */
    protected function setPosition($position, $content) {
        $this->positions[$position][] = $content;
    }


    /**
     * @return array
     */
    protected function getPositions() {

        $tmp_positions = array();
        foreach ($this->positions as $place=>$contents) {
            $tmp_positions[$place] = implode('', $contents);
        }
        return $tmp_positions;
    }


    /**
     * Пполучение загаловка страницы
     * @return string
     */
    protected function getTitle() {

        if (is_array($this->title) && isset($this->title[$this->lang])) {
            $this->title = $this->title[$this->lang];
        }

        return USE_SHOP_NAME_IN_TITLE
            ? ($this->title != '' ? SHOP_NAME . ' - ' . $this->title : SHOP_NAME)
            : $this->title;
    }
}



/**
 * Class Micro_MainMenu
 */
class Micro_MainMenu extends Micro_Component_Abstract {

    public static $meta = array();

    public function index() {

        $tpl= new Micro_Templater();
        $tpl->setTemplate(self::$meta['tpl']);

        $menu = $this->getMenu();

        foreach ($menu as $page_name => $title) {
            $is_current = $this->getCurrentPage() == $page_name ? 'current' : '';
            $lang       = $this->getLang();

            $tpl->menu->assign('[CURRENT]',   $is_current);
            $tpl->menu->assign('[MENU_URL]',  '?view=' . $page_name . "&lang={$lang}");
            $tpl->menu->assign('[MENU_NAME]', $title);
            if ($title != end($menu)) $tpl->menu->reassign();

            $tpl->combonav->assign('[MENU_URL]',  '?view=' . $page_name . "&lang={$lang}");
            $tpl->combonav->assign('[MENU_NAME]', $title);
            if ($title != end($menu)) $tpl->combonav->reassign();
        }

        $page = new stdClass();
        $page->style      = self::$meta['style'];
        $page->javascript = self::$meta['javascript'];
        $page->content    = $tpl->render();

        return $page;
    }


    /**
     * Получение массива содержащего меню
     * @return array
     */
    protected function getMenu() {
        return self::$_menu;
    }


    /**
     * @return bool|string
     */
    public function getCurrentPage() {

        if (isset($_GET['view'])) {
            return $_GET['view'];
        }

        return false;
    }
}



/**
 * Class Micro_Categories
 */
class Micro_Categories extends Micro_Component_Abstract  {

    public static $meta = array();

    public function index() {

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

        $dirs = array();

        if ($handle = opendir($path)) {
            while ($element_name = readdir($handle)) {
                if ($element_name != "." && $element_name != ".." && is_dir($path . '/' . $element_name)) {
                    $dirs[] = $element_name;
                }
            }

            natsort($dirs);
        }


        $lang = $this->getLang();
        $tpl  = new Micro_Templater();
        $tpl->setTemplate(self::$meta['tpl']);


        // Директории
        if (empty($dirs)) {
            $tpl->touchBlock('no_albums');

        } else {
            foreach ($dirs as $dir_name) {
                $gallery_path = isset($_GET['path']) && $_GET['path'] != ''
                    ?  $_GET['path'] . '-' . Micro_Tools::pathToHash($dir_name)
                    :  Micro_Tools::pathToHash($dir_name);

                $tpl->albums->album->assign('[GALLERY_URL]',  "?view=gallery&path={$gallery_path}&lang={$lang}");
                $tpl->albums->album->assign('[GALLERY_NAME]', Micro_Tools::convertEncoding($dir_name));
                if ($dir_name != end($dirs)) $tpl->albums->album->reassign();

                $tpl->albums->comboalbum->assign('[GALLERY_URL]',  "?view=gallery&path={$gallery_path}&lang={$lang}");
                $tpl->albums->comboalbum->assign('[GALLERY_NAME]', Micro_Tools::convertEncoding($dir_name));
                if ($dir_name != end($dirs)) $tpl->albums->comboalbum->reassign();
            }
        }

        $page = new stdClass();
        $page->style      = self::$meta['style'];
        $page->javascript = self::$meta['javascript'];
        $page->content    = $tpl->render();

        return $page;
    }
}



/**
 * Class Micro_Gallery
 */
class Micro_Gallery extends Micro_Component_Abstract {

    public static $meta = array();

    /**
     * @return int|stdClass
     */
    public function index() {

        $action = isset($_GET['action'])
            ? $_GET['action']
            : false;

        switch ($action) {
            case 'photo' : $this->photo(); break;
            case 'gallery' :
            default : return $this->gallery(); break;
        }
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

        $this->addTaxonomy('Галерея', "?view=gallery&lang={$lang}");

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
        $tpl->setTemplate(self::$meta['tpl']);


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
                    $fh = fopen($filename,'rb');
                    if ($fh) {
                        $bytes6 = fread($fh,6);
                        fclose($fh);
                        if ($bytes6 === false) return false;
                        if (substr($bytes6,0,3) == "\xff\xd8\xff") return 'image/jpeg';
                        if ($bytes6 == "\x89PNG\x0d\x0a") return 'image/png';
                        if ($bytes6 == "GIF87a" || $bytes6 == "GIF89a") return 'image/gif';
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
                            ($page * NUMBER_PRODUCTS_PER_PAGE) - NUMBER_PRODUCTS_PER_PAGE <= $dir_content['total_files'] &&
                            count($dir_content['file']) < NUMBER_PRODUCTS_PER_PAGE)
                        {
                            $dir_content['file'][] = $element_name;
                        }
                        $dir_content['total_files']++;
                    }
                }
            }


            // Проверка на существование запрошенной строницы
            if (($page * NUMBER_PRODUCTS_PER_PAGE) - NUMBER_PRODUCTS_PER_PAGE > $dir_content['total_files']) {
                return $this->page404();
            }


            // Файлы
            foreach ($dir_content['file'] as $file_name) {
                $photo_path = isset($_GET['path']) && $_GET['path'] != ''
                    ?  $_GET['path'] . '-' . Micro_Tools::pathToHash($file_name)
                    :  Micro_Tools::pathToHash($file_name);

                $matches = array();
                if (preg_match('~^_([0-9\.,]+)_~sU', $file_name, $matches)) {

                    $tpl_pay = new Micro_Templater();
                    $tpl_pay->setTemplate(self::$meta['tpl_pay']);

                    $file_name_cut = preg_replace('~^_[0-9\.,]+_~sU', '', $file_name);
                    $file_name_utf = Micro_Tools::convertEncoding($file_name_cut);

                    $tpl_pay->assign('[PHOTO_COST]', str_replace(',', '.', $matches[1]));

                    if ( ! isset($_SESSION['cart'][SHOP_NAME][$photo_path])) {
                        $tpl_pay->add_in_cart->assign('[PHOTO_PATH]', $photo_path);
                    } else {
                        $tpl_pay->remove_in_cart->assign('[PHOTO_PATH]', $photo_path);
                    }

                    $tpl->photos->photo->assign('[PAY]', $tpl_pay->render());

                } else {
                    $tpl->photos->photo->assign('[PAY]', '');
                    $file_name_utf = Micro_Tools::convertEncoding($file_name);
                }


                $tpl->photos->photo->assign('[PHOTO_PATH]',      $photo_path);
                $tpl->photos->photo->assign('[PHOTO_BIG_URL]',   "?view=gallery&action=photo&path={$photo_path}&size=big");
                $tpl->photos->photo->assign('[PHOTO_SMALL_URL]', "?view=gallery&action=photo&path={$photo_path}&size=list");
                $tpl->photos->photo->assign('[PHOTO_NAME]',      substr($file_name_utf, 0, strrpos($file_name_utf, '.')));

                $tpl->photos->photo->reassign();
            }


            // Пагинация
            if ($dir_content['total_files'] > NUMBER_PRODUCTS_PER_PAGE) {
                $dir_path = isset($_GET['path']) ? $_GET['path'] : '';
                $pagebar  = Micro_Tools::paginate(
                    "?view=gallery&path={$dir_path}&lang=[LANG]&page",
                    ceil($dir_content['total_files'] / NUMBER_PRODUCTS_PER_PAGE),
                    isset($_GET['page']) ? $_GET['page'] : 1,
                    3
                );

                $tpl->photos->pagenation->assign('[PAGEBAR]', $pagebar);
            }
        }


        $page = new stdClass();
        $page->style      = self::$meta['style'];
        $page->javascript = str_replace('[FILE_NAME]', basename(__FILE__), self::$meta['javascript']);
        $page->content    = $tpl->render();

        return $page;
    }


    /**
     * Показ фотогафии
     * @return void
     * @throws Exception
     */
    protected function photo() {

        if (defined('USE_CACHE') && USE_CACHE) {
            try {
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
            } catch (Exception $e) {
                $cache_file = null;
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
 * Class Micro_Cart
 */
class Micro_Cart extends Micro_Component_Abstract {

    public static $meta = array();

    public function index() {

        if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                case 'remove_in_cart' : return $this->removeInCart(); break;
                case 'add_in_cart' :    return $this->addInCart(); break;
                case 'order' :          return $this->order(); break;
                case 'order_send' :     return $this->orderSend(); break;
                case 'order_result' :   return $this->orderResult(); break;
                default :               return $this->cart(); break;
            }

        } else {
            return $this->cart();
        }
    }


    /**
     * Страница корзины
     * @return stdClass
     */
    protected function cart() {

        $tpl = new Micro_Templater();
        $tpl->setTemplate(self::$meta['cart']['tpl']);

        if ( ! isset($_SESSION['cart'][SHOP_NAME]) || empty($_SESSION['cart'][SHOP_NAME])) {
            $tpl->touchBlock('empty_cart');

        } else {
            $orders   = $_SESSION['cart'][SHOP_NAME];
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

                    $tpl->orders->order->assign('[TITLE]',         substr($file_name_utf, 0, strrpos($file_name_utf, '.')));
                    $tpl->orders->order->assign('[COST]',          $cost);
                    $tpl->orders->order->assign('[PHOTO_URL]',     '?view=gallery&action=photo&path=' . $order . '&size=cart');
                    $tpl->orders->order->assign('[PHOTO_BIG_URL]', '?view=gallery&action=photo&path=' . $order . '&size=big');
                    $tpl->orders->order->assign('[PARAM_NAME]',    'orders[' . $key . '][path]');
                    $tpl->orders->order->assign('[PARAM_VALUE]',   $order);
                    $tpl->orders->order->assign('[COUNT_NAME]',    'orders[' . $key . '][count]');

                    $tpl->orders->order->reassign();
                }
            }

            $tpl->orders->assign('[COST_SUM]', $cost_sum);
        }

        // Валюта
        $lang = $this->getLang();
        $tpl->assign('[CURRENCY]', defined(strtoupper('CURRENCY_' . $lang))
            ? constant(strtoupper('CURRENCY_' . $lang))
            : '');

        $page = new stdClass();
        $page->title      = isset(self::$meta['order']['title'][$lang]) ? self::$meta['order']['title'][$lang] : current(self::$meta['order']['title']);
        $page->meta_desk  = isset(self::$meta['order']['meta_desc'][$lang]) ? self::$meta['order']['meta_desc'][$lang] : current(self::$meta['order']['meta_desc']);
        $page->meta_keys  = isset(self::$meta['order']['meta_keys'][$lang]) ? self::$meta['order']['meta_keys'][$lang] : current(self::$meta['order']['meta_keys']);
        $page->style      = self::$meta['cart']['style'];
        $page->javascript = self::$meta['cart']['javascript'];
        $page->content    = $tpl->render();

        return $page;
    }


    /**
     * Удаление из корзины товара
     * @return string
     */
    protected function removeInCart() {

        if (isset($_POST['item']) && isset($_SESSION['cart'][SHOP_NAME][$_POST['item']])) {
            unset($_SESSION['cart'][SHOP_NAME][$_POST['item']]);
        }
        echo json_encode(array('error' => 0));
        exit;
    }


    /**
     * Добавление в корзину товара
     * @return string
     */
    protected function addInCart() {

        if ( ! isset($_SESSION['cart'][SHOP_NAME])) {
            $_SESSION['cart'][SHOP_NAME] = array();
        }

        if (isset($_POST['item']) && ! isset($_SESSION['cart'][SHOP_NAME][$_POST['item']])) {
            $_SESSION['cart'][SHOP_NAME][$_POST['item']] = $_POST['item'];
        }
        echo json_encode(array('error' => 0));
        exit;
    }


    /**
     * Страница с оформлением заказа
     * @return stdClass
     */
    protected function order() {

        $tpl = new Micro_Templater();
        $tpl->setTemplate(self::$meta['order']['tpl']);

        if (empty($_POST['orders'])) {
            $tpl->touchBlock('empty_order');

        } else {
            foreach ($_POST['orders'] as $k => $order) {
                $tpl->order_form->orders->assign('[ORDER_PARAM_NAME]', "orders[{$k}][path]");
                $tpl->order_form->orders->assign('[ORDER_NAME]', $order['path']);
                $tpl->order_form->orders->assign('[ORDER_PARAM_COUNT]', "orders[{$k}][count]");
                $tpl->order_form->orders->assign('[ORDER_COUNT]', $order['count']);
                $tpl->order_form->orders->reassign();
            }
        }

        $lang = $this->getLang();
        $page = new stdClass();
        $page->title      = isset(self::$meta['order']['title'][$lang]) ? self::$meta['order']['title'][$lang] : current(self::$meta['order']['title']);
        $page->meta_keys  = isset(self::$meta['order']['meta_keys'][$lang]) ? self::$meta['order']['meta_keys'][$lang] : current(self::$meta['order']['meta_keys']);
        $page->meta_desc  = isset(self::$meta['order']['meta_desc'][$lang]) ? self::$meta['order']['meta_desc'][$lang] : current(self::$meta['order']['meta_desc']);
        $page->style      = self::$meta['order']['style'];
        $page->javascript = self::$meta['order']['javascript'];
        $page->content    = $tpl->render();

        return $page;
    }


    /**
     * Отправка сообщеня о новом заказе
     * @return void
     */
    protected function orderSend() {

        try {
            if (empty($_POST['orders'])) throw new Exception('Нет товаров для заказа');

            $tpl_email = new Micro_Templater();
            $tpl_email->setTemplate(self::$meta['order_email_admin']['tpl']);

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

                    $tpl_email->order->assign('[PATH]', Micro_Tools::convertEncoding(GALLERY_DIR . '/' . $realpath));
                    $tpl_email->order->assign('[PRICE]', $price);
                    $tpl_email->order->assign('[COUNT]', $order['count']);
                    $tpl_email->order->assign('[PRICE_TOTAL]', $order['count'] * $price);
                    $tpl_email->order->reassign();

                    $global_price += $order['count'] * $price;
                }
            }

            $tpl_email->assign('[GLOBAL_PRICE]', $global_price);


            $admin_subject = self::$meta['order_email_admin']['subject'];
            $admin_tpl     = $tpl_email->render();
            $is_send_admin = Micro_Tools::sendMail(
                ORDER_EMAIL_TO,
                isset(Micro_Init::$_locutions[DEFAULT_LANG])
                    ? Micro_Tools::replaceLocutions($admin_subject, Micro_Init::$_locutions[DEFAULT_LANG])
                    : Micro_Tools::replaceLocutions($admin_subject),
                isset(Micro_Init::$_locutions[DEFAULT_LANG])
                    ? Micro_Tools::replaceLocutions($admin_tpl, Micro_Init::$_locutions[DEFAULT_LANG])
                    : Micro_Tools::replaceLocutions($admin_tpl),
                array(
                    'from'        => ORDER_EMAIL_FROM,
                    'method'      => ORDER_EMAIL_METHOD,
                    'smtp_host'   => EMAIL_SMTP_HOST,
                    'smtp_port'   => EMAIL_SMTP_PORT,
                    'smtp_secure' => EMAIL_SMTP_SECURE,
                    'smtp_auth'   => EMAIL_SMTP_AUTH,
                    'smtp_user'   => EMAIL_SMTP_USER,
                    'smtp_pass'   => EMAIL_SMTP_PASS
                )
            );
            if ( ! $is_send_admin) throw new Exception('Письмо не отправлено по неизвестной причине');


            if (isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $client_subject = self::$meta['order_email_client']['subject'];
                $client_tpl     = self::$meta['order_email_client']['tpl'];
                Micro_Tools::sendMail(
                    $_POST['email'],
                    isset(Micro_Init::$_locutions[DEFAULT_LANG])
                        ? Micro_Tools::replaceLocutions($client_subject, Micro_Init::$_locutions[DEFAULT_LANG])
                        : Micro_Tools::replaceLocutions($client_subject),
                    isset(Micro_Init::$_locutions[DEFAULT_LANG])
                        ? Micro_Tools::replaceLocutions($client_tpl, Micro_Init::$_locutions[DEFAULT_LANG])
                        : Micro_Tools::replaceLocutions($client_tpl),
                    array(
                        'from'        => ORDER_EMAIL_FROM,
                        'method'      => ORDER_EMAIL_METHOD,
                        'smtp_host'   => EMAIL_SMTP_HOST,
                        'smtp_port'   => EMAIL_SMTP_PORT,
                        'smtp_secure' => EMAIL_SMTP_SECURE,
                        'smtp_auth'   => EMAIL_SMTP_AUTH,
                        'smtp_user'   => EMAIL_SMTP_USER,
                        'smtp_pass'   => EMAIL_SMTP_PASS
                    )
                );
            }


            unset($_SESSION['cart'][SHOP_NAME]);
            $lang = $this->getLang();
            header('Location: ?view=cart&action=order_result&result=success&lang=' . $lang);
            exit;

        } catch (Exception $e) {
            $lang = $this->getLang();
            header('Location: ?view=cart&action=order_result&result=error&lang=' . $lang);
            exit;
        }
    }


    /**
     * Страница с успешной или неудачной отправкой заказа
     * @return stdClass
     */
    protected function orderResult() {

        $tpl = new Micro_Templater();
        $tpl->setTemplate(self::$meta['order_result']['tpl']);

        if ($_GET['result'] == 'success') {
            $tpl->touchBlock('success');

        } elseif ($_GET['result'] == 'error') {
            $tpl->touchBlock('error');

        } else {
            return $this->page404();
        }

        $lang = $this->getLang();
        $page = new stdClass();
        $page->title      = isset(self::$meta['order_result']['title'][$lang]) ? self::$meta['order_result']['title'][$lang] : current(self::$meta['order_result']['title']);
        $page->meta_keys  = isset(self::$meta['order_result']['meta_keys'][$lang]) ? self::$meta['order_result']['meta_keys'][$lang] : current(self::$meta['order_result']['meta_keys']);
        $page->meta_desc  = isset(self::$meta['order_result']['meta_desc'][$lang]) ? self::$meta['order_result']['meta_desc'][$lang] : current(self::$meta['order_result']['meta_desc']);
        $page->content    = $tpl->render();

        return $page;
    }
}


/**
 * Class Micro_Page404
 */
class Micro_Page404 extends Micro_Component_Abstract {

    public static $meta = array();

    /**
     * Отправлять загаловки при вызове методов или нет
     * @var bool
     */
    public $send_headers = true;


    /**
     * Возвращает страницу 404
     * @return string
     */
    public function index() {

        if ($this->send_headers) {
            header($_SERVER['SERVER_PROTOCOL']." 404 Not Found");
        }

        $template  = self::$meta['Micro_Page404']['tpl'];
        $title     = self::$meta['Micro_Page404']['title'];
        $locutions = $this->getLocutions();

        $tpl = new Micro_Templater();
        $tpl->setTemplate($template);

        $tpl->assign('[TITLE]', USE_SHOP_NAME_IN_TITLE ? SHOP_NAME . ' - ' . $title : $title);

        return Micro_Tools::replaceLocutions($tpl->render(), $locutions);
    }
}



/**
 * Class Micro_Lang
 */
class Micro_Lang extends Micro_Component_Abstract {

    public static $meta = array();

    /**
     * Возвращает двухбуквенное обозначение текущего языка
     * @return string
     */
    public function index() {

        // проверка существует ли запрошенный язык в перечне
        if (isset($_GET['lang']) && $_GET['lang'] != '') {
            $languages = explode(',', LANGUAGES);
            $languages = array_map('trim', $languages);
            if ( ! in_array($_GET['lang'], $languages)) {
                return DEFAULT_LANG;
            }

            return $_GET['lang'];

        } else {
            return DEFAULT_LANG;
        }
    }


    /**
     * Возвращает переключатель языков
     * для вставки его на страницу
     * @return string
     */
    public function getLangSwitcher() {

        $languages = explode(',', trim(LANGUAGES, ' ,'));
        if (count($languages) > 1 && $_SERVER['REQUEST_METHOD'] == 'GET') {
            $tpl = new Micro_Templater();
            $tpl->setTemplate(self::$meta['tpl']);

            foreach ($languages as $iso) {
                $tpl->languages->assign('[LANG_ISO]', $iso);
                if (isset($_GET['lang'])) {
                    $selected = $_GET['lang'] == $iso
                        ? 'selected="selected"'
                        : '';
                } else {
                    $selected = DEFAULT_LANG == $iso
                        ? 'selected="selected"'
                        : '';
                }

                $tpl->languages->assign('[SELECTED]', $selected);
                $tpl->languages->reassign();
            }

            $page = new stdClass();
            $page->style      = self::$meta['style'];
            $page->javascript = self::$meta['javascript'];
            $page->content    = $tpl->render();
            return $page;
        }

        return '';
    }
}


/**
 * Class Micro
 */
class Micro extends Micro_Init {


    /**
     * Ответ пользователю на запрос
     * @return string
     */
    public function dispatch() {

        // Если директории для галлереи нет и создать ее не получилось, то сообщение об этом
        if ( ! is_dir(GALLERY_DIR) && ! mkdir(GALLERY_DIR, 0777, true)) {
            return $this->getNoGallery();

        // Если директори галлереи пуста, то сообщение об этом
        } elseif ($handle = opendir(GALLERY_DIR)) {
            $empty_gallery = true;
            while ($element_name = readdir($handle)) {
                if ($element_name != "." && $element_name != "..") {
                    $empty_gallery = false;
                    break;
                }
            }
            closedir($handle);
            if ($empty_gallery) {
                return $this->getEmptyGallery();
            }
        }


        $plugins = $this->getPlugins();
        foreach ($plugins as $plugin => $extend) {
            if ($extend == 'Micro_Layout') {
                $layout = new $plugin();
                break;
            }
        }

        if ( ! isset($layout)) {
            $layout = new Micro_Layout();
        }

        $this->setRegistry('layout', $layout);
        return $layout->index();
    }


    /**
     * Страница сообщающая о том, что галерея не создана
     * @return string
     */
    public function getNoGallery() {
        $tpl = new Micro_Templater();
        $tpl->setTemplate($this->getMeta('no_gallery', 'tpl'));
        $tpl->assign('[TITLE]', $this->getMeta('no_gallery', 'title'));
        $tpl->assign('[REAL_GALLERY_DIR]', realpath(dirname(GALLERY_DIR)) . DIRECTORY_SEPARATOR . basename(GALLERY_DIR));
        $tpl->assign('[GALLERY_DIR]', GALLERY_DIR);

        return Micro_Tools::replaceLocutions($tpl->render(), $this->getLocutions());
    }


    /**
     * Страница сообщающая о том, что галерея пуста
     * @return string
     */
    public function getEmptyGallery() {
        $tpl  = new Micro_Templater();
        $tpl->setTemplate($this->getMeta('empty_gallery', 'tpl'));
        $tpl->assign('[TITLE]', $this->getMeta('empty_gallery', 'title'));
        $tpl->assign('[REAL_GALLERY_DIR]', realpath(GALLERY_DIR));
        $tpl->assign('[GALLERY_DIR]', GALLERY_DIR);

        return Micro_Tools::replaceLocutions($tpl->render(), $this->getLocutions());
    }
}


/**
 * Class Micro_Tools
 */
class Micro_Tools {

    private static $hash_to_path = array();

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
     * Замена слов в тексте обернутых в $embrace на указанный языковой массив $locutions
     * @param string $str Строка с исходныйм значением. Та, отдельные значения которой нужно перевести.
     * @param array $locutions Массив содержащий элементы вида 'переводимое слово' => 'перевод'. Напрмер 'язык' => 'language'.
     * @param string $embrace Обертка переводимых слов
     * @return string Переведенный текст
     */
    public static function replaceLocutions($str, $locutions = array(), $embrace = "##''##") {

        global $global_locutions;
        $global_locutions = $locutions;

        if ((strlen($embrace) % 2) == 0) {
            $i = strlen($embrace) / 2;
            $embrace_start = preg_quote(substr($embrace, 0, $i));
            $embrace_end   = preg_quote(substr($embrace, $i));

        } else {
            trigger_error('Embrace error', E_USER_WARNING);
            return $str;
        }

        if ( ! function_exists('replaceLocutionCondition')) {
            function replaceLocutionCondition ($matches) {
                global $global_locutions;
                if (isset($global_locutions[$matches[2]])) {
                    return $global_locutions[$matches[2]];

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
     * Создание изображения с другим размером
     * @param string $image_path Путь до файла исходного изображения
     * @param int $max_height Максимальная высота результируемого изображения
     * @param int $max_width Максимальная ширина результируемого изображения
     * @param null|string $save_path Путь до файла в который должно сохраняться результирующее изображение. Если не указано, то отправка в буфер вывода
     * @param null|string $watermark_path Путь до изображения которое будет использоваться как водяной знак
     * @return void
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
     * @param string $str Исходная строка
     * @param string $to Имя кодировки в которую нужно конвертировать строку
     * @param string|null $from Имя кодировки из которой нужно конвертировать строку
     * @return string Строка с новой кодировкой
     */
    public static function convertEncoding($str, $to = 'utf-8', $from = null) {

        if ($from === null) {
            $from = self::detectEncoding($str);
        }

        return mb_convert_encoding($str, $to, $from);
    }


    /**
     * Определение кодировки строки
     * @param string $string Исходная строка
     * @param int $pattern_size Размер части строки по которой определяется кодировка
     * @return string Название кодировки
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
     * @param string $path Путь к чему либо
     * @param string $algo Алгоритм хэштрования
     * @return string Хэшированный путь
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
     * @param string $hash_path Хэшированный путь к чему либо
     * @param string $algo Алгоритм шифрования
     * @return string Настоящий путь
     */
    public static function hashToPath($hash_path, $algo = 'crc32b') {

        if (isset(self::$hash_to_path[$hash_path])) {
            return self::$hash_to_path[$hash_path];
        }

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

        return self::$hash_to_path[$hash_path] = implode('/', $real_path);
    }


    /**
     * Создание пагинации для вставки на страницу
     * @param string $base_url Базовый адрес страницы
     * @param int $total_pages Всего страниц
     * @param int $current_page Текущая страница
     * @param int $paginate_limit Ограничение количества показываемых страниц
     * @return string Сформированный HTML для вставки его на страницу
     */
    public static function paginate($base_url, $total_pages, $current_page, $paginate_limit = 3) {

        $paginate = '';
        $break    = true;

        if ($current_page > 1) {
            $paginate .= '<li><a class="prev" href="' . $base_url . '=' . ($current_page - 1) . '">##\'Предыдущая\'##</a></li>';
        }

        for ( $i = 1; $i <= $total_pages; $i++ ) {
            if (
                $i == 1 || $i == $total_pages ||
                ($i >= $current_page - $paginate_limit && $i <= $current_page + $paginate_limit)
            ) {
                $break = true;
                if ($i != $current_page) {
                    $url       = $base_url . "=" . $i;
                    $paginate .= '<li><a href="' . $url . '">' . $i . '</a></li>';
                } else {
                    $paginate .= '<li class="active"><span>' . $i . '</span></li>';
                }
            } elseif ($break == true) {
                $break     = false;
                $paginate .= '<li class="break">&hellip;</li>';
            }
        }


        if ($current_page < $total_pages) {
            $paginate .= '<li><a class="next" href="' . $base_url . '=' . ($current_page + 1) . '">##\'Следующая\'##</a></li>';
        }

        return $paginate;
    }
}


/**
 * Class Micro_Templater
 * @see https://github.com/shinji00/Micro_Templater
 */
class Micro_Templater {

    protected $blocks   = array();
    protected $vars     = array();
    protected $_p       = array();
    protected $reassign = false;
    protected $loop     = '';
    protected $html     = '';


    /**
     * @param  string    $template_file
     * @throws Exception
     */
    public function __construct($template_file = '') {
        if ($template_file) $this->loadTemplate($template_file);
    }


    /**
     * Isset block
     * @param  string $block
     * @return bool
     * @throws Exception
     */
    public function __isset($block) {
        $begin_pos = strpos($this->html, "<!-- BEGIN {$block} -->");
        $end_pos   = strrpos($this->html, "<!-- END {$block} -->");

        return $begin_pos !== false && $end_pos !== false && $end_pos >= $begin_pos;
    }


    /**
     * Nested blocks will be stored inside $_p
     * @param  string               $block
     * @return Micro_Templater|null
     * @throws Exception
     */
    public function __get($block) {

        if ($this->reassign) $this->startReassign();
        $this->touchBlock($block);

        if ( ! array_key_exists($block, $this->_p)) {
            $tpl = new Micro_Templater();
            $tpl->setTemplate($this->getBlock($block));
            $this->_p[$block] = $tpl;
        }

        return $this->_p[$block];
    }


    /**
     * Load the HTML file to parse
     * @param  string     $filename
     * @throws Exception
     */
    public function loadTemplate($filename) {
        if ( ! file_exists($filename)) {
            throw new Exception("File not found '{$filename}'");
        }
        $this->setTemplate(file_get_contents($filename));
    }


    /**
     * Set the HTML to parse
     * @param $html
     */
    public function setTemplate($html) {
        $this->html = preg_replace("~<\!--\s*(BEGIN|END)\s+([a-zA-Z0-9_]+?)\s*-->~s", '<!-- $1 $2 -->', $html);
        $this->clear();
    }


    /**
     * Assign variable
     * @param string $var
     * @param string $value
     */
    public function assign($var, $value = '') {
        if ($this->reassign) $this->startReassign();
        $this->vars[$var] = $value;
    }


    /**
     * Reset the current instance's variables and make them able to assign again
     */
    public function reassign() {
        $this->reassign = true;
    }


    /**
     * Touched block
     * @param string $block
     */
    public function touchBlock($block) {
        $this->blocks[$block]['TOUCHED'] = true;
    }


    /**
     * Get html block
     * @param  string      $block
     * @return string|bool
     * @throws Exception
     */
    public function getBlock($block) {
        $begin_pos = strpos($this->html, "<!-- BEGIN {$block} -->")  + strlen("<!-- BEGIN {$block} -->");
        $end_pos   = strrpos($this->html, "<!-- END {$block} -->");

        if ($end_pos >= $begin_pos) {
            return substr($this->html, $begin_pos, $end_pos - $begin_pos);
        } else {
            throw new Exception("Block '{$block}' not found");
        }
    }


    /**
     * The final render
     * @return string
     */
    public function render() {
        $html = $this->html;

        if (strpos($html, 'BEGIN')) {
            $matches = array();
            preg_match_all("~<\!-- BEGIN ([a-zA-Z0-9_]+?) -->~s", $html, $matches);
            if (isset($matches[1]) && count($matches[1])) {
                foreach ($matches[1] as $block) {
                    if ( ! isset($this->blocks[$block])) {
                        $this->blocks[$block] = array('TOUCHED' => false);
                    }
                }
            }

            foreach ($this->blocks as $block => $data) {
                $block_begin = "<!-- BEGIN {$block} -->";
                $block_end   = "<!-- END {$block} -->";

                $begin_pos = strpos($html, $block_begin);
                $end_pos   = strrpos($html, $block_end);

                if ($begin_pos !== false && $end_pos !== false && $end_pos >= $begin_pos) {
                    $after_html  = substr($html, 0, $begin_pos);
                    $inside_html = substr($html, $begin_pos + strlen($block_begin), $end_pos - ($begin_pos + strlen($block_begin)));
                    $before_html = substr($html, $end_pos + strlen($block_end));

                    if (isset($data['TOUCHED']) && $data['TOUCHED']) {
                        $block_tpl = array_key_exists($block, $this->_p) ? $this->_p[$block] : null;
                        if ($block_tpl instanceof Micro_Templater) {
                            $parsed = $block_tpl->render();
                            $html = $after_html . $parsed . $before_html;
                        } else {
                            $html = $after_html . $inside_html . $before_html;
                        }

                    } else {
                        $html = $after_html . $before_html;
                    }
                }
            }
        }


        $assigned   = str_replace(array_keys($this->vars), $this->vars, $html);
        $html       = $this->loop . $assigned;
        $this->loop = '';

        return $html;
    }


    /**
     * Fill SELECT items on page
     * @param string       $id
     * @param array        $options
     * @param string|array $selected
     */
    public function fillDropDown($id, array $options, $selected = null) {

        if ($this->reassign) $this->startReassign();
        $html = "";
        foreach ($options as $value => $option) {
            if (is_array($option)) {
                $html .= "<optgroup label=\"{$value}\">";
                foreach ($option as $val => $opt) {
                    $sel = $selected !== null && ((is_array($selected) && in_array((string)$val, $selected)) || (string)$val === (string)$selected)
                        ? 'selected="selected" '
                        : '';
                    $html .= "<option {$sel}value=\"{$val}\">{$opt}</option>";
                }
                $html .= '</optgroup>';

            } else {
                $sel = $selected !== null && ((is_array($selected) && in_array((string)$value, $selected)) || (string)$value === (string)$selected)
                    ? 'selected="selected" '
                    : '';
                $html .= "<option {$sel}value=\"{$value}\">{$option}</option>";
            }
        }
        if ($html) {
            $id = preg_quote($id);
            $reg = "~(<select.*?id\s*=\s*[\"']{$id}[\"'][^>]*>).*?(</select>)~si";
            $this->html = preg_replace($reg, "$1[[$id]]$2", $this->html);
            $this->assign("[[$id]]", $html, true);
        }
    }


    /**
     * Clear vars & blocks
     */
    protected function clear() {
        $this->blocks = array();
        $this->vars   = array();
        foreach ($this->_p as $obj) {
            if ($obj instanceof Micro_Templater) {
                $obj->clear();
            }
        }
    }


    /**
     * Start reassign
     */
    protected function startReassign() {
        $this->loop = $this->render();
        $this->clear();
        $this->reassign = false;
    }
}



try {
    session_start();
    $init = new Micro();
    echo $init->dispatch();

} catch (Exception $e) {
    if (defined('DEBUG') && DEBUG) {
        echo '<pre>';
        echo $e->getMessage(), "\n";
        echo '<b>', $e->getFile(), ': ', $e->getLine(), "</b>\n\n";
        echo $e->getTraceAsString();
        echo '</pre>';
    }
}