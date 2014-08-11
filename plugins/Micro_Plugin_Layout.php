<?php


define('LAYOUT_IS_ACTIVE',  false);


/**
 * Новый Маршрутизатор
 */
//Micro_Init::$router = array(
//    'home' => array(
//        'content' => array( 'Micro_Plugin_Catalog' ),
//    ),
//    '~^/photo/(?P<photo>[0-9]+)$~' => array(
//        'content' => array( 'Micro_Plugin_Catalog ),
//    ),
//    '~^/(?P<category>[a-z0-9\-]+)$~' => array(
//        'content' => array( 'Micro_Plugin_Catalog' ),
//    ),
//    '~^/(?P<category>[a-z0-9\-]+)/(?P<item>[0-9]+)$~' => array(
//        'content' => array( 'Micro_Plugin_Catalog' ),
//    )
//);



/**
 * Планировка страницы
 */
Micro_Init::$_components['Micro_Plugin_Layout'] = array(
    'tpl' => <<<HTML
<!DOCTYPE html>
<html>
<head>
    <title>[TITLE]</title>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="content-type"       content="text/META; charset=utf-8"/>
    <meta name="robots"             content="all"/>
    <meta name="revisit-after"      content="7 days"/>
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
            color:#c8c8c8;
            font-family: Helvetica, sans-serif, Verdana, Arial;
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
            text-align: justify;
        }
        body a {
            -moz-transition:color .3s ease;
            -o-transition:color .3s ease;
            -webkit-transition:color .3s ease;
            color:#c8c8c8;
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
            background:#3c3c3c;
        }
        body a:hover,#top-widget-holder a:hover,#nav>li>a:hover,.project-heading .launch:hover {
            color:#ea4c88;
        }
        header {
            background: linear-gradient(to bottom, #cb4044, #a3000e) repeat scroll 0 0 rgba(0, 0, 0, 0);
            border-bottom: 1px solid #636363;
        }
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
        footer { min-height: 100px; }
        footer .wrapper {
            border-top: 3px solid #BBBBBB;
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
            background: none repeat scroll 0 0 #B3B3B3;
            color: #2f2f2f;
        }
        .pagebar li a {
            background: none repeat scroll 0 0 #B3B3B3;
            color: #2f2f2f;
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
            text-shadow: 0 1px 0 #000000;
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

    <header class="clearfix">
        <div class="wrapper clearfix">
            <a href="/[LANG]" id="logo">[SITE_NAME]</a>
            <!-- BEGIN position_header -->
            [HEADER]
            <!-- END position_header -->
            <!-- BEGIN position_menu -->
            [MENU]
            <!-- END position_menu -->
        </div>
    </header>

    <div id="main">
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



/*************************
 *====== PHP секция =====*
 ************************/



/**
 * Class Micro_Plugin_Layout
 */
class Micro_Plugin_Layout extends Micro_Layout {

    public static $is_active = LAYOUT_IS_ACTIVE;


    public function __construct() {
        $this->install();
        parent::__construct();
    }


    /**
     * Установка плагина
     */
    public function install () {

        $file_name = ltrim(
            dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR . '.htaccess',
            DIRECTORY_SEPARATOR
        );
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
            header('Location: ' . $_SERVER['REQUEST_URI']);
            exit;
        }
    }


    protected function getTemplate() {
        return $this->getComponent('Micro_Plugin_Layout', 'tpl');
    }
} 