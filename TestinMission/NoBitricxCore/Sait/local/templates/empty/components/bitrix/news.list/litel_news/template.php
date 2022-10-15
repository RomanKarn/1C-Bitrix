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
	<li class="news__item news__item--small">
		<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="news__link news__link__small">
			<div class="news__text">
				<span class="news__date"><? echo $arItem["DISPLAY_ACTIVE_FROM"] ?> г.</span>
				<h4 class="news__title"><? echo $arItem["NAME"] ?></h4>
			</div>
		</a>
	</li>
<? endforeach; ?>