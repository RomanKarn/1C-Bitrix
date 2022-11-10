<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<form action="<?= POST_FORM_ACTION_URI ?>" method="POST">
	<?= bitrix_sessid_post() ?>
	<div class="form__tablet-row">
		<div class="form__tablet-column">
			<div class="form__field">
				<label class="visually-hidden" for="partner-org">Организация</label> <input type="text" class="form__input" placeholder="Организация" id="user_compani" name="user_compani" required="">
			</div>
		</div>
		<div class="form__tablet-column">
			<div class="form__field">
				<label class="visually-hidden" for="partner-email">Email</label> <input type="text" class="form__input" placeholder="Email" id="user_email" name="user_email" required="">
			</div>
		</div>
	</div>
	<div class="form__tablet-row">
		<div class="form__tablet-column">
			<div class="form__field">
				<label class="visually-hidden" for="partner-contact">Контактное лицо</label> <input type="text" class="form__input" placeholder="Контактное лицо" id="user_name" name="user_name" required="">
			</div>
		</div>
		<div class="form__tablet-column">
			<div class="form__field">
				<label class="visually-hidden" for="partner-phone">Телефон</label> <input type="tel" class="form__input" placeholder="Телефон" id="user_phone" name="user_phone" required="">
			</div>
		</div>
	</div>

	<div class="form__field">
		<input type="checkbox" class="visually-hidden form__input--checkbox " id="partner-agree" name="partner-agree" required=""> <label for="partner-agree" class="form__label--checkbox"> Я согласен на обработку персональных данных </label>
	</div>

	<input type="hidden" name="PARAMS_HASH" value="<?= $arResult["PARAMS_HASH"] ?>">
	<input class="button partner-info__button button--wide" type="submit" name="submit" value="<?= GetMessage("MFT_SUBMIT") ?>">
</form>