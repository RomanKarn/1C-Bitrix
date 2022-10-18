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
	<li class="partners__item">
		<a href="#" class="partners__link">
			<div class="partners__img">
				<img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<? echo $arItem["NAME"] ?>">
			</div>
		</a>
	</li>
<? endforeach; ?>