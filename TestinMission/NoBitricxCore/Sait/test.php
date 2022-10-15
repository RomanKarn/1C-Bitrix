<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("тест");
?><main> <section class="our-team">
<h1 class="visually-hidden">Спортивная школа «Ва-банк»</h1>
<div class="our-team__header">
	<div class="container">
		
        <? $APPLICATION->IncludeFile(SITE_DIR . "include/slogan.php", array(),array("MODE" => "html")); ?>
                Команда нашего города
		
		<p class="our-team__subtitle">
			 Команда по мини-футболу города Томска
		</p>
 <a class="our-team__button button button--arrow" href="#">Подробнее</a>
	</div>
</div>
<div class="our-team__features features">
	<div class="container">
		<ul class="features__list">
			<li class="features__item features__item--ball">Способствуем развитию мини-футбола</li>
			<li class="features__item features__item--team">Воспитываем профессиональную команду</li>
			<li class="features__item features__item--school">Развиваем свою спортивную школу в городе Томске</li>
		</ul>
	</div>
</div>
<div class="join-block__container">
	<div class="our-team__join join-block">
		<div class="container">
			<h3 class="join-block__title">
			Набор в детские команды </h3>
			<ul class="join-block__list">
				<li class="join-block__item">ДЛЯ ДЕТЕЙ от 7 лет</li>
				<li class="join-block__item">Стоимость – 3000 рублей в месяц</li>
				<li class="join-block__item">Первое пробное занятие — бесплатно</li>
			</ul>
 <button class="button button--wide join-block__button j-modal-link" rel="appointment-modal" type="button">Записаться на занятие </button>
		</div>
	</div>
</div>
 </section> </main><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>