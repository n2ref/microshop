<?php

define('FEEDBACK_IS_ACTIVE',    true);

/**
 * Если не указаны, то используются настройки по умолчинию
 */
define('FEEDBACK_EMAIL_TO',     '');
define('FEEDBACK_EMAIL_FROM',   '');
define('FEEDBACK_EMAIL_METHOD', '');



/**
 * Добаление плагина в маршрутизатор
 */
Micro_Plugin_Feedback::$router = array(
    'feedback' => array(
        'menu'    => array( 'Micro_MainMenu' ),
        'content' => array( 'Micro_Plugin_Feedback' )
    )
);


/**
 *
 */
Micro_Plugin_Feedback::$menu = array('feedback' => 'Обратная связь');


/**
 * Переводы
 */
Micro_Plugin_Feedback::$locutions = array(
    'en' => array(
        'Обратная связь' => 'Feedback',
        'Ваше имя' => 'Your name',
        'Ваш email' => 'Your email',
        'Дополнительная информация' => 'Additional information',
        'Сообщение успешно отправлено' => 'Message sent successfully',
        'При отправке сообщения произошла неизвестная ошибка. Приносим свои извинения.' => 'When you send an unknown error occurred. We apologize.',
        'Укажите пожалуйста ваше имя' => 'Please fill in your name',
        'Укажите пожалуйста ваш email. Он нужен для связи с вами' => 'Please fill in your email. He needs to contact you',
        'поля, обязательные для заполнения' => 'fields are required',
    )
);



/***************************
 *====== HTML секция ======*
 **************************/



/**
 * Планировка страницы
 */
Micro_Plugin_Feedback::$meta = array(
    'form' => array(
        'tpl' => <<<HTML
            <h1>##'Обратная связь'##</h1>

            <!-- BEGIN send_result_success -->
            <div class="send_result_success">
                <span class="message">
                    ##'Сообщение успешно отправлено'##
                </span>
            </div>
            <!-- END send_result_success -->

            <!-- BEGIN send_result_error -->
            <div class="send_result_error">
                <span class="messagge">
                    ##'При отправке сообщения произошла неизвестная ошибка. Приносим свои извенения.'##
                </span>
            </div>
            <!-- END send_result_error -->

            <form action="?view=feedback&action=send&lang=[LANG]" method="post"
                  onsubmit="return validate_form(this);" id="feedback-form">
                <div class="ms-field-container">
                    <div class="ms-field-label">
                        <label for="field_name">
                            <span class="red-star">*</span>
                            ##'Ваше имя'##:
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
                        <label for="field_email">
                            <span class="red-star">*</span>
                            ##'Ваш email'##:
                        </label>
                    </div>
                    <div class="ms-field-input">
                        <input type="email" name="email" id="field_email"
                               required="required"
                               data-required-message="##'Укажите пожалуйста ваш email. Он нужен для связи с вами'##">
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="ms-field-container">
                    <div class="ms-field-label">
                        <label for="field_message">
                            <span class="red-star">*</span>
                            ##'Дополнительная информация'##:
                        </label>
                    </div>
                    <div class="ms-field-input">
                        <textarea name="message" rows="4" id="field_message" required="required"></textarea>
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
HTML
        ,
        'javascript' => <<<HTML
            <script type="text/javascript">
                function validate_form(form) {
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
                #feedback-form { margin-top: 35px; }
                .send_result_success {
                    background: none repeat scroll 0 0 #bfe4a6;
                    border: 1px solid #aacb93;
                    border-radius: 4px;
                    margin-top: 35px;
                    padding: 10px;
                    width: 396px;
                }
                .send_result_error {
                    background: none repeat scroll 0 0 #ffc8c8;
                    border: 1px solid #d5a6a6;
                    border-radius: 4px;
                    margin-top: 35px;
                    padding: 10px;
                    width: 396px;
                }
                .send_result_success .message {
                    font-size: 21px;
                    color: #000;
                }
                .send_result_error .message {
                    font-size: 16px;
                    color: #000;
                }
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
                    .send_result_success,
                    .send_result_error {
                        width: 200px
                    }
                    .send_result_success .message { font-size: 18px }
                    .send_result_error .message { font-size: 13px }
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
            'ru' => 'Обратная связь',
            'en' => 'Feedback'
        ),
        'meta_desc' => array(
            'ru' => 'Обратная связь',
            'en' => 'Feedback'
        ),
        'meta_keys' => array(
            'ru' => 'Обратная связь',
            'en' => 'Feedback'
        )
    ),
    'message' => array(
        'subject' => SITE_NAME . ' - ' . 'Сообщение с формы обратной связи',
        'tpl' => <<<HTML
<!DOCTYPE html>
<html>
    <header>
        <title>Сообщение от [NAME]</title>
    </header>
    <body>
        <b>Сообщение от:</b> [NAME]<br>
        <b>Email:</b> [EMAIL]<br>
        <br>
        <b>Сообщение:</b><br>
        [MESSAGE]
    </body>
</html>
HTML
    )
);




/*************************
 *====== PHP секция =====*
 ************************/



/**
 * Class Micro_Plugin_Feedback
 */
class Micro_Plugin_Feedback extends Micro_Plugin_Abstract {

    public static $is_active = FEEDBACK_IS_ACTIVE;
    public static $router    = array();
    public static $locutions = array();
    public static $menu      = array();
    public static $meta      = array();

    public function index() {

        $tpl = new Micro_Templater();
        $tpl->setTemplate(self::$meta['form']['tpl']);


        if (isset($_GET['action']) && $_GET['action'] == 'send' &&
            $_SERVER['REQUEST_METHOD'] == 'POST'
        ) {
            $is_send = $this->send();
            if ($is_send) {
                $this->redirectToSuccess();
            } else {
                $this->redirectToError();
            }
        }


        // FIXME когда страница обновляется еще раз после отправки сообщения, то сообщение остается
        if (isset($_GET['send_result'])) {
            if ($_GET['send_result'] == 'success') {
                $tpl->touchBlock('send_result_success');
            } else {
                $tpl->touchBlock('send_result_error');
            }
        }


        $lang = $this->getLang();
        $page = new stdClass();
        $page->title      = $lang == 'en' ? self::$meta['form']['title']['en'] : self::$meta['form']['title']['ru'];
        $page->meta_keys  = $lang == 'en' ? self::$meta['form']['meta_keys']['en'] : self::$meta['form']['meta_keys']['ru'];
        $page->meta_desc  = $lang == 'en' ? self::$meta['form']['meta_desc']['en'] : self::$meta['form']['meta_desc']['ru'];
        $page->style      = self::$meta['form']['style'];
        $page->javascript = self::$meta['form']['javascript'];
        $page->content    = $tpl->parse();

        return $page;
    }


    /**
     * Отправка сообщеня
     * @return bool
     */
    protected function send() {

        $tpl_email = new Micro_Templater();
        $tpl_email->setTemplate(self::$meta['message']['tpl']);

        $tpl_email->assign('[NAME]',    $_POST['name']);
        $tpl_email->assign('[EMAIL]',   $_POST['email']);
        $tpl_email->assign('[MESSAGE]', nl2br($_POST['message']));

        $subject = self::$meta['message']['subject'];
        $is_send = Micro_Tools::sendMail(
            FEEDBACK_EMAIL_TO ? FEEDBACK_EMAIL_TO : ORDER_EMAIL_TO,
            $subject,
            $tpl_email->parse(),
            array(
                'from'        => FEEDBACK_EMAIL_FROM ? FEEDBACK_EMAIL_FROM : ORDER_EMAIL_FROM,
                'method'      => FEEDBACK_EMAIL_METHOD ? FEEDBACK_EMAIL_METHOD : ORDER_EMAIL_METHOD,
                'smtp_host'   => EMAIL_SMTP_HOST,
                'smtp_port'   => EMAIL_SMTP_PORT,
                'smtp_secure' => EMAIL_SMTP_SECURE,
                'smtp_auth'   => EMAIL_SMTP_AUTH,
                'smtp_user'   => EMAIL_SMTP_USER,
                'smtp_pass'   => EMAIL_SMTP_PASS
            )
        );

        return $is_send;
    }


    protected function redirectToSuccess() {
        header('Location: ?view=feedback&send_result=success');
        exit;
    }

    protected function redirectToError() {
        header('Location: ?view=feedback&send_result=error');
        exit;
    }
}

