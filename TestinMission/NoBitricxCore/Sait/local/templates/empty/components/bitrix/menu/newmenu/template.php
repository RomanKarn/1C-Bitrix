<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
	<ul class="page-nav__menu main-menu j-menu">
<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<li class="main-menu__item" ><a href="<?=$arItem["LINK"]?>" class="main-menu__link j-menu-link"><?=$arItem["TEXT"]?></a></li>
	<?else:?>
		<li class="main-menu__item"><a href="<?=$arItem["LINK"]?>" class="main-menu__link j-menu-link"><?=$arItem["TEXT"]?></a></li>
	<?endif?>
	
<?endforeach?>
	</ul>
<?endif?>