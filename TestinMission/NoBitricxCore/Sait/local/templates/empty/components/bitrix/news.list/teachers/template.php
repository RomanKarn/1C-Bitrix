<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<? foreach ($arResult["ITEMS"] as $arItem) : ?>
	<li class="teachers__item">
		<a href="trainers-modal" rel="trainers-modal" class="teachers__link j-modal-link j-ajax-popup">
			<div class="teachers__img">
				<img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="" width="251" height="228">
			</div>
			<span class="teachers__name"><span class="teachers__surname"><? echo $arItem["NAME"] ?></span> <? echo $arItem["PREVIEW_TEXT"]; ?> </span>
			<span class="teachers__position"><? echo $arItem["FIELDS"]["DETAIL_TEXT"] ?> </span>
		</a>
	</li>
<? endforeach; ?>