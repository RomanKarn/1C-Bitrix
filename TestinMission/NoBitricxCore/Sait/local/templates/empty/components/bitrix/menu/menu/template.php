<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>



<?
foreach ($arResult as $arItem) :
	if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
		continue;
?>
	<li class="main-menu__item"><a href="<?= $arItem["LINK"] ?>" class="main-menu__link j-menu-link"><?= $arItem["TEXT"] ?></a></li>
<? endforeach ?>