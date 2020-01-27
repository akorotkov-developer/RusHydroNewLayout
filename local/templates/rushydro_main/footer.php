<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);

use RusHydro\Config;
use Bitrix\Main\Page\Asset;
?>
                        <?if ($APPLICATION->GetCurPage() != "/") {?>
                            </div>
                        <?}
                    $APPLICATION->IncludeComponent("bitrix:menu","rightmenu",
                        [
                            "ROOT_MENU_TYPE" => "right",
                            "MAX_LEVEL" => "1",
                            "CHILD_MENU_TYPE" => "",
                            "USE_EXT" => "Y",
                            "DELAY" => "N",
                            "ALLOW_MULTI_SELECT" => "Y",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_CACHE_GET_VARS" => ""
                        ]
                    );?>
                </div>

            </div>
            <script src="https://www.google.com/recaptcha/api.js"></script>
            <script src="<?=Config::RUSHYDRO_TEMPLATE_PATH?>js/main.min.js"></script>
            <script src="<?=Config::RUSHYDRO_TEMPLATE_PATH?>js/vendor.min.js"></script>
            <script src="<?=Config::RUSHYDRO_TEMPLATE_PATH?>js/script.js"></script>
        </div>
    </div>

    <div class="dm-overlay" id="win1">
        <div class="dm-table">
            <div class="dm-cell">
                <div class="dm-modal">
                    <a href="#close" class="close"></a>
                    <form action="/asqquestion/ajax.php" class="askquestion" method="post">
                        <input type="hidden" name="email_admin" value="<?=COption::GetOptionString("main", "email_from");?>">
                        <h2>Задать вопрос</h2>
                        <div class="profile_blocks profile_blocks-nomarginbottom">
                            <div class="profile_block">
                                <label class="profile_label" for="name"><p class="profile_text">Имя *</p></label>
                                <input id="name" type="text" name="fio" class="profile_input" required>
                            </div>
                            <div class="profile_block">
                                <label class="profile_label" for="email"><p class="profile_text">Email *</p></label>
                                <input id="email" type="email" name="email" class="profile_input" required>
                            </div>
                            <div class="profile_block">
                                <label for="quest" class="profile_label"><p class="profile_text">Вопрос *</p>
                                </label>
                                <textarea name="message" id="quest" name="question" class="profile_textarea"></textarea>
                            </div>
                            <div class="profile_footer-block profile_footer-block-sitefooter">
                                <input type="checkbox" id="politics" name="politics" class="profile-input" value="" autocomplete="off" required/>
                                <label for="politics" class="profile_politics">Даю согласие на обработку персональных данных</label>
                                <div class="g-recaptcha" data-sitekey="<?=Config::GOOGLE_PUBLIC_KEY?>"></div>
                                <button type="submit" name="submit" class="profile_submit">Отправить</button>
                            </div>
                        </div>
                    </form>
                    <script>
                        $('.askquestion').submit(function(event){
                            if (!grecaptcha.getResponse()) {
                                alert('Вы не заполнили поле Я не робот!');
                                return false; // возвращаем false и предотвращаем отправку формы
                            }
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>

</body>
</html>