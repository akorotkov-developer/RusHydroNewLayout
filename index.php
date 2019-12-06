<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Рус Гидро Объединяя энергию");

use RusHydro\Config;
?>

<div class="content-block">
    <h4 class="content-block_title">Цитата дня</h4>
    <div class="content-block_image"><img src="<?=Config::RUSHYDRO_TEMPLATE_PATH?>img/news/img-1.jpg" alt=""></div>
    <div class="content-block_item-text">
        <strong class="content-block_name">Байрта Первеева</strong>
        <p>заместитель Генерального
            директора по управлению
            персоналом и организационному
            развитию ПАО «РусГидро»</p>
        <p class="content-block_small">За 10 лет Конкурс приобрел статус всероссийского. Компанией сформирована площадка выявления талантливых молодых инженеров, которые имеют высокую мотивацию к работе на энергообъектах Группы РусГидро. Новые идеи и смелые технические решения, демонстрация желания плодотворно работать в энергетике – все это подтверждение необходимости и востребованности Конкурса</p>
    </div>
</div>
<div class="content-block">
    <div class="content-block_item">
        <h4 class="content-block_title">Главное</h4>
        <div class="content-block_text-block">
            РусГидро объявляет о начале XI Всероссийского конкурса студенческих проектов «Энергия развития».Заявки на Конкурс принимаются до 5 февраля 2020 года.
        </div>
    </div>
    <div class="content-block_item">
        <h4 class="content-block_title">НОВОСТИ <a href="" class="content-block_all">Все новости</a></h4>
        <a href="" class="content-block_image"><img src="<?=Config::RUSHYDRO_TEMPLATE_PATH?>img/news/img-3.jpg" alt=""></a>
        <a href="" class="content-block_link">РусГидро наградило победителей Х студенческого конкурса «Энергия развития» </a>
    </div>
</div>
<div class="content-block">
    <div class="content-block_item">
        <h4 class="content-block_title">ФОТОГАЛЕРЕЯ <a href="" class="content-block_all">Все фото</a></h4>
        <a href="" class="content-block_image content-block_photo"><img src="<?=Config::RUSHYDRO_TEMPLATE_PATH?>img/news/img-2.jpg" alt=""></a>
    </div>
    <div class="content-block_item">
        <h4 class="content-block_title">ВИДЕО <a href="" class="content-block_all">Все видео</a></h4>
        <div class="content-block_image">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/mSX_hkH2Lg4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>