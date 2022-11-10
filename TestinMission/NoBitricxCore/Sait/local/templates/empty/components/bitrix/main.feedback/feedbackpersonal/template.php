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
			<p class="appointment__title">
				Запишись на первое <strong>Бесплатное занятие</strong>
			</p>
			<?= bitrix_sessid_post() ?>
			<div class="form__field">
				<label class="visually-hidden" for="modal-name">Имя</label> <input type="text" class="form__input" placeholder="Имя" name="user_name">
			</div>
			<div class="form__field">
				<label class="visually-hidden" for="modal-phone">Телефон</label> <input type="tel" class="form__input" placeholder="Телефон" name="user_phone">
			</div>

			<div class="form__field">
				<select class="form__select j-select" name="user_age" id="user_age">
					<option value=" " disabled="" selected=""> Возраст ребенка</option>
					<option value="4-6">4-6 лет</option>
					<option value="7-9">7-9 лет</option>
					<option value="10-12">10-12 лет</option>
					<option value="13-15">13-15 лет</option>
				</select>
			</div>
			<div class="form__field">
				<input type="checkbox" class="visually-hidden form__input--checkbox" id="modal-agree" required=""> <label for="modal-agree" class="form__label--checkbox"> Я согласен на обработку персональных данных </label>
			</div>
			<input type="hidden" name="PARAMS_HASH" value="<?= $arResult["PARAMS_HASH"] ?>">
			<input class="button appointment__button button--wide" type="submit" name="submit" value="Записаться">
		</form>