<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Анкета участника конкурса «Энергия развития»");
$APPLICATION->AddChainItem($APPLICATION->GetTitle());

use RusHydro\Config;
?>
<script src="/submitapplication/script.js"></script>

<div class="content-text">
    <form action="send.php" class="profile_form" method="post" ENCTYPE="multipart/form-data">
        <div class="profile_blocks">
            <div class="profile_block">
                <label class="profile_label" for="name"><p class="profile_text">Фамилия, Имя, Отчество *</p></label>
                <input id="name" type="text" name="fio" class="profile_input" required>
            </div>
            <div class="profile_block">
                <label for="date" class="profile_label"><p class="profile_text">Дата рождения </p></label>
                <input type='text' class='profile_datepicker' name="birthdate" placeholder=""/>
            </div>
            <div class="profile_block">
                <label for="name" class="profile_label"><p class="profile_text">Учебное заведение </p></label>
                <input id="name" type="text" name="studyhome" class="profile_input">
            </div>
            <div class="profile_block">
                <label for="name" class="profile_label"><p class="profile_text">Факультет (специальность,
                        специализация):</p></label>
                <input id="name" type="text" name="fackultet" class="profile_input">
            </div>
            <div class="profile_block">
                <label for="name" class="profile_label"><p class="profile_text">Курс / год обучения:</p></label>
                <input id="name" type="text" name="kurs" class="profile_input">
            </div>
            <div class="profile_block">
                <label for="work" class="profile_label"><p class="profile_text">Место работы: </p></label>
                <input id="name" type="text" name="work" class="profile_input">
            </div>
            <div class="profile_block">
                <label for="interests" class="profile_label"><p class="profile_text">Научные интересы:</p>
                </label>
                <textarea name="interests" id="interests" name="academic_interest"
                          class="profile_textarea"></textarea>
            </div>
            <div class="profile_block">
                <label for="uploade-file" class="profile_label -file"><p class="profile_text">Загрузить работу:</p>
                </label>
                <div class="profile_file">
                    <input type="file" name="file" id="uploade-file" class="profile_input -file">
                    <p class="profile_label_text"></p>
                </div>
                <input type="hidden" name="download_file">
            </div>
            <div class="inputfile_block">
                <label for="inputfile">Upload File</label>
                <input type="file" id="inputfile" name="inputfile"></br>
            </div>
            <div class="profile_block">
                <label for="link" class="profile_label"><p class="profile_text">Ссылка на скачивание работы:</p>
                </label>
                <input id="link" type="text" name="download_link" class="profile_input">
            </div>
            <h3 class="profile_title">Контактная информация</h3>
            <div class="profile_block">
                <label for="address" class="profile_label"><p class="profile_text">Адрес (с указанием почтового
                        индекса):</p></label>
                <input id="address" type="text" name="address" class="profile_input">
            </div>
            <div class="profile_block">
                <label for="phone" class="profile_label"><p class="profile_text">Контактный телефон (с указанием
                        кода города):</p>
                </label>
                <input id="phone" type="text" name="contact_phone" class="profile_input">
            </div>
            <div class="profile_block">
                <label for="email" class="profile_label"><p class="profile_text">Электронный адрес:</p>
                </label>
                <input id="email" type="email" name="email" class="profile_input">
            </div>
            <div class="profile_block">
                <label for="info" class="profile_label"><p class="profile_text">Напишите, пожалуйста, откуда Вы
                        узнали о конкурсе:</p></label>
                <input id="info" type="text" name="who_did_you_know" class="profile_input">
            </div>
            <h3 class="profile_title">Информация о конкурсной работе</h3>
            <div class="profile_block">
                <label for="name-work" class="profile_label"><p class="profile_text">Название работы:</p></label>
                <input id="name-work" type="text" name="work_name" class="profile_input">
            </div>
            <div class="profile_block">
                <label for="topic-work" class="profile_label">Тема работы:
                </label>
                <select class="profile_select" name="select">
                    <option class="profile_option" selected="selected">
                        Научно-техническое обоснование ГЭС: современные методы принятия решения о выборе створов и параметров проектируемых ГЭС, новые методы инженерных расчетов, моделирование, риски и экономика. Современные методы оценки воздействия гидроэнергетических объектов на окружающую среду.
                    </option>
                    <option class="profile_option">
                        Современные подходы к мониторингу и диагностике состояния оборудования и гидротехнических сооружений ГЭС и управлению состоянием оборудования и гидротехнических сооружений.
                    </option>
                    <option class="profile_option">
                        Современные методы управления водноэнергетическими режимами каскадов ГЭС.
                    </option>
                    <option class="profile_option">
                        Гидроэнергетика и экология.
                    </option>
                    <option class="profile_option">
                        Теплоэнергетика и экология.
                    </option>
                    <option class="profile_option">
                        Энергетические комплексы: новые компоновки, технические и технологические решения.
                    </option>
                    <option class="profile_option">
                        Современные технологии строительства ГЭС/ГАЭС, ТЭС, сетевых комплексов.
                    </option>
                    <option class="profile_option">
                        Перспективные технологии аккумулирования и хранения энергии.
                    </option>
                    <option class="profile_option">
                        Безопасность и надежность энергообъектов.
                    </option>
                    <option class="profile_option">
                        Энергоэффективные решения в гидро- и теплоэнергетике.
                    </option>
                    <option class="profile_option">
                        Возобновляемые источники энергии. Стратегия развития альтернативной энергетики.
                    </option>
                    <option class="profile_option">
                        Виды, технологии формирования и свойства вторичных продуктов сжигания угольного топлива (золошлаковых материалов) и их роль в обеспечении экологической безопасности и ресурсной эффективности угольных ТЭС и котельных.
                    </option>
                    <option class="profile_option">
                        Разработка типового проекта мини-ГЭС контейнерного типа в действующих створах гидротехнических объектов.
                    </option>
                    <option class="profile_option">
                        Автоматизация расчета режима работы каскада ГЭС на основе требований водопользователей.
                    </option>
                    <option class="profile_option">
                        Методы интеллектуального прогнозирования отказов оборудования электроэнергетических предприятий.
                    </option>
                    <option class="profile_option">
                        Применение систем видеоаналитики для повышения безопасности и надежности энергообъектов.
                    </option>
                    <option class="profile_option">
                        Внедрение на ТЭС системы непрерывного контроля и учета вредных выбросов ТЭС в атмосферу в соответствии с Федеральным законом «Об охране окружающей среды».
                    </option>
                </select>
            </div>
            <div class="profile_block">
                <label for="boss-work" class="profile_label"><p class="profile_text">Научный руководитель: </p>
                </label>
                <input id="boss-work" type="text" name="academic_director" class="profile_input">
            </div>
            <div class="profile_block">
                <label for="position-work" class="profile_label"><p class="profile_text">Должность и место работы
                        научного руководителя: </p></label>
                <input id="position-work" type="text" name="work_position_academic_director" class="profile_input">
            </div>
            <? if ($_GET["tst"] == "tst") {
                ?>
                <input type="hidden" name="admin_email" value="89065267799@mail.ru">
            <?
            } else {?>
                <input type="hidden" name="admin_email" value="<?php echo COption::GetOptionString("main", "email_from"); ?>">
            <?}?>
        </div>
        <div class="profile_footer">
            <div class="profile_footer-block">
                <div class="g-recaptcha" data-sitekey="<?= Config::GOOGLE_PUBLIC_KEY ?>"></div>
            </div>
            <div class="profile_footer-block">
                <input type="checkbox" id="profile_politics" name="agree" class="profile-input" value=""
                       autocomplete="off" required/>
                <label for="profile_politics" class="profile_politics">Даю согласие на обработку персональных
                    данных</label>
                <button type="submit" name="submit" class="profile_submit">Отправить</button>
            </div>
        </div>
    </form>
</div>

<script>
    $(function () {
        $("#uploade-file").bind("click", function (event) {
            event.preventDefault();

            $("#inputfile").trigger('click');

        });

        $('#inputfile').on('change', function(){
            $(".profile_label_text").text($(this).val());
        });
    });

    $('.profile_form').submit(function(event){
        if (!grecaptcha.getResponse()) {
            alert('Вы не заполнили поле Я не робот!');
            return false; // возвращаем false и предотвращаем отправку формы
        }
    });
</script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>