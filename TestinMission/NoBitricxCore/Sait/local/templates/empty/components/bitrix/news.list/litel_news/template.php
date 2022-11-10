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
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<li class="news__item news__item--small">
		<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="news__link news__link__small" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="news__text">
				<span class="news__date"><? echo $arItem["DISPLAY_ACTIVE_FROM"] ?> г.</span>
				<h4 class="news__title"><? echo $arItem["NAME"] ?></h4>
			</div>
		</a>
	</li>
<? endforeach; ?>