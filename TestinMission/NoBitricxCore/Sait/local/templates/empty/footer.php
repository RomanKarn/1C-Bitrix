<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<footer class="page-footer">
  <div class="container">
    <section class="footer-contacts">
      <h3 class="visually-hidden">Контакты</h3>
      <div class="footer-contacts__point">
        <div class="footer-contacts__logo">
          <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/logo.svg" alt="Спортивная школа «Ва-банк»" width="60" height="58">
        </div>
        <div class="footer-contacts__text">
          <span><? $APPLICATION->IncludeFile(SITE_DIR . "include/footer-contacts__text.php", array(),array("MODE" => "text")); ?></span>
          <a href="tel:+73822211195"><? $APPLICATION->IncludeFile(SITE_DIR . "include/phone.php", array(),array("MODE" => "text")); ?></a>
          <a href="mailto:info@fcva-bank.ru"><? $APPLICATION->IncludeFile(SITE_DIR . "include/email.php", array(),array("MODE" => "text")); ?></a>
        </div>
      </div>
      <div class="footer-contacts__point footer-contacts__point--social">
        <div class="footer-contacts__text">
          <span><? $APPLICATION->IncludeFile(SITE_DIR . "include/footer-contacts__text-social.php", array(),array("MODE" => "text")); ?></span>
        </div>
        <div class="footer-contacts__social">
          <a href="https://vk.com/" target="_blank">
            <svg width="24" height="12" role="img">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M11.7421 11.9499H13.1769C13.1769 11.9499 13.6102 11.9077 13.8316 11.699C14.0355 11.5069 14.029 11.1469 14.029 11.1469C14.029 11.1469 14.0013 9.45983 14.8942 9.21153C15.7747 8.96642 16.9057 10.8418 18.1045 11.5631C19.0105 12.1088 19.6995 11.9888 19.6995 11.9888L22.9047 11.9499C22.9047 11.9499 24.5812 11.8592 23.7859 10.7039C23.7211 10.6094 23.3227 9.8492 21.4029 8.28726C19.3929 6.65256 19.6623 6.91682 22.0832 4.08912C23.5572 2.36696 24.1471 1.31567 23.9629 0.865026C23.7874 0.436083 22.7029 0.549064 22.7029 0.549064L19.0943 0.568851C19.0943 0.568851 18.8262 0.536936 18.6281 0.64098C18.4344 0.742471 18.3099 0.979921 18.3099 0.979921C18.3099 0.979921 17.7382 2.31271 16.9771 3.44634C15.3705 5.83744 14.7274 5.96446 14.4652 5.81574C13.8542 5.46977 14.0071 4.4255 14.0071 3.68379C14.0071 1.3661 14.4084 0.3997 13.2257 0.149483C12.8339 0.0665034 12.5447 0.011609 11.5411 0.00267268C10.2535 -0.00881685 9.16398 0.00586421 8.54639 0.270762C8.13564 0.446934 7.81883 0.839493 8.01183 0.862472C8.25071 0.890558 8.79037 0.990134 9.07659 1.33163C9.44656 1.7727 9.43345 2.76271 9.43345 2.76271C9.43345 2.76271 9.64611 5.49084 8.93749 5.82978C8.45099 6.06212 7.78387 5.58786 6.35132 3.41825C5.6172 2.30696 5.06297 1.07822 5.06297 1.07822C5.06297 1.07822 4.95664 0.849068 4.76583 0.725875C4.53423 0.577149 4.2116 0.529914 4.2116 0.529914L0.782066 0.549702C0.782066 0.549702 0.267163 0.562468 0.0785356 0.758428C-0.0897 0.933325 0.064698 1.29397 0.064698 1.29397C0.064698 1.29397 2.74918 6.79873 5.78908 9.57281C8.57771 12.1171 11.7421 11.9499 11.7421 11.9499Z"></path>
            </svg>
          </a>
          <a href="https://www.instagram.com/" target="_blank">
            <svg width="14" height="14" role="img">
              <path d="M3.98468 14H10.0153C12.2122 14 14 12.2126 14 10.0152V3.98434C14 1.78738 12.2122 0 10.0153 0H3.98468C1.78779 0 0 1.78738 0 3.98434V10.0152C0 12.2126 1.78779 14 3.98468 14ZM1.19991 3.98434C1.19991 2.44912 2.44904 1.19995 3.98468 1.19995H10.0153C11.551 1.19995 12.8001 2.44912 12.8001 3.98434V10.0152C12.8001 11.5509 11.551 12.8001 10.0153 12.8001H3.98468C2.4495 12.8001 1.19991 11.5509 1.19991 10.0152V3.98434Z"></path>
              <path d="M3.5844 7.16903C5.56072 7.16903 7.16879 5.5609 7.16879 3.58452C7.16879 1.60813 5.56072 0 3.5844 0C1.60762 0 0 1.60813 0 3.58452C0 5.5609 1.60808 7.16903 3.5844 7.16903ZM3.5844 1.19948C4.89947 1.19948 5.96889 2.2694 5.96889 3.58405C5.96889 4.8987 4.89947 5.96862 3.5844 5.96862C2.26933 5.96862 1.19991 4.8987 1.19991 3.58405C1.19991 2.2694 2.26979 1.19948 3.5844 1.19948Z" transform="translate(3.41504 3.41602)"></path>
              <path d="M0.861388 1.72283C1.33712 1.72283 1.72278 1.33716 1.72278 0.861417C1.72278 0.38567 1.33712 0 0.861388 0C0.385657 0 0 0.38567 0 0.861417C0 1.33716 0.385657 1.72283 0.861388 1.72283Z" transform="translate(9.87695 2.34912)"></path>
            </svg>
          </a>
        </div>

      </div>
    </section>
    <div class="footer-contacts__copyright copyright">
      <p>Copyright © 2018 Футбольная Школа «Ва-Банк»</p>
      <p class="redramka"><a href="https://redramka.ru/" target="_blank">Разработка сайта <span class="redramka__brand">Красная рамка</span></a></p>
    </div>
  </div>
</footer>


<div class="modal j-modal" id="appointment-modal">
  <div class="modal__block modal__block--narrow j-modal-block">
    <div class="appointment-modal">
      <form action="#" class="appointment__form form" method="post">
        <p class="appointment__title"> Запишись на первое
          <strong>Бесплатное занятие</strong>
        </p>
        <div class="form__field">
          <label class="visually-hidden" for="modal-name">Имя</label>
          <input type="text" class="form__input" placeholder="Имя" id="modal-name" name="modal-name" required="">
        </div>
        <div class="form__field">
          <label class="visually-hidden" for="modal-phone">Телефон</label>
          <input type="tel" class="form__input" placeholder="Телефон" id="modal-phone" name="modal-phone" required="">
        </div>
        <div class="form__field">
          <select class="form__select j-select" name="modal-age" id="modal-age">
            <option value=" " disabled="" selected=""> Возраст ребенка</option>
            <option value="4-6">4-6 лет</option>
            <option value="7-9">7-9 лет</option>
            <option value="10-12">10-12 лет</option>
            <option value="13-15">13-15 лет</option>
          </select>
        </div>
        <div class="form__field">
          <input type="checkbox" class="visually-hidden form__input--checkbox " id="modal-agree" name="agree" required="">
          <label for="modal-agree" class="form__label--checkbox"> Я согласен на обработку персональных данных
          </label>
        </div>
        <button class="button appointment__button button--wide" type="submit">Записаться</button>
      </form>
    </div>
    <button class="modal__close j-modal-close" type="button"><span class="visually-hidden">Закрыть</span></button>
  </div>
</div>
<div class="modal j-modal" id="partners-modal">
  <div class="modal__block j-modal-block">
    <div id="partner-info" class="partner-info">
      <div class="contianer">
        <h2 class="partner-info__title">Информация для&nbsp;партнеров</h2>
        <p>
          Футбольный клуб «Уфа» предлагает Вам несколько форм взаимовыгодного сотрудничества:
        </p>
        <p>
          «ПАРТНЕР ФК «УФА» (разовое размещение информации);
          «ПРОФИЛЬНЫЙ ПАРТНЕР ФК «УФА» (пример: «Заповедный родник» - питьевой партнер ФК «Уфа»);
          «ИНФОРМАЦИОННЫЙ ПАРТНЕР ФК «УФА»;
          «ОФИЦИАЛЬНЫЙ ПАРТНЕР ФК «УФА»;
          «ГЕНЕРАЛЬНЫЙ ПАРТНЕР ФК «УФА».
          Маркетинговые и рекламные возможности Футбольного клуба «Уфа» перечисленны в разделе Виды рекламы.\
        </p>
        <p>
          По всем возникающим вопросам (проведение личной встречи, подробности, стоимость, объемы «партнерских пакетов»,
          эксклюзивные и дополнительные возможности, бартер, совместные мероприятия и проекты) По всем возникающим
          вопросам (проведение личной встречи, подробности, стоимость, объемы «партнерских пакетов», эксклюзивные и
          дополнительные возможности, бартер, совместные мероприятия и проекты)
        </p>
        <form action="#" class="partner-info__form form" method="post">
          <legend class="partner-info__legend">Оставьте заявку и мы свяжемся с вами в&nbsp;ближайшее время</legend>
          <div class="form__tablet-row">
            <div class="form__tablet-column">
              <div class="form__field">
                <label class="visually-hidden" for="partner-org">Организация</label>
                <input type="text" class="form__input" placeholder="Организация" id="partner-org" name="partner-org" required="">
              </div>
            </div>
            <div class="form__tablet-column">
              <div class="form__field">
                <label class="visually-hidden" for="partner-email">Email</label>
                <input type="text" class="form__input" placeholder="Email" id="partner-email" name="partner-email" required="">
              </div>
            </div>
          </div>
          <div class="form__tablet-row">
            <div class="form__tablet-column">
              <div class="form__field">
                <label class="visually-hidden" for="partner-contact">Контактное лицо</label>
                <input type="text" class="form__input" placeholder="Контактное лицо" id="partner-contact" name="partner-contact" required="">
              </div>
            </div>
            <div class="form__tablet-column">
              <div class="form__field">
                <label class="visually-hidden" for="partner-phone">Телефон</label>
                <input type="tel" class="form__input" placeholder="Телефон" id="partner-phone" name="partner-phone" required="">
              </div>
            </div>
          </div>
          <div class="form__field">
            <input type="checkbox" class="visually-hidden form__input--checkbox " id="partner-agree" name="partner-agree" required="">
            <label for="partner-agree" class="form__label--checkbox"> Я согласен на обработку персональных данных
            </label>
          </div>
          <button class="button partner-info__button button--wide" type="submit">Отправить заявку</button>
        </form>
      </div>
    </div>
    <button class="modal__close j-modal-close" type="button"><span class="visually-hidden">Закрыть</span></button>
  </div>
</div>
<!-- Не знаю как предать значения из инфо блока -->
<div class="modal j-modal" id="trainers-modal">
  <div class="modal__block modal__block--teachers j-modal-block">
    <div class="teachers__modal j-modal-inner" id="trainer-1">
      <div class="teachers__info">
        <div class="teachers__img">
          <img src="img/teacher1.png" alt="" width="251" height="228">
        </div>
        <div class="teachers__text">
          <span class="teachers__name"><span class="teachers__surname">мазун </span> Василий алексеевич</span>
          <span class="teachers__position">Тренер взрослой группы по&nbsp;футболу</span>
        </div>

      </div>
      <div class="teachers__about">
        <p>Выступал за команду мастеров, защищая честь Томской области, вплоть до 1993 года. Был одним из лидеров томской команды, провел в общей сложности 272 официальных матча, забил 27 голов.</p>
        <p>После завершения футбольной карьеры перешел на тренерскую работу, которой бессменно занимается уже больше 20 лет. Есть его тренерский вклад в достижения команды «Томь» последних десятилетий: серебряных медалей 1994 и 1996 годов, золотых медалей 1997 года (вторая лига российского футбола), бронзовых медалей первого дивизиона 2002 и 2003 годов, серебряных медалей и завоевание путевки в премьер-лигу 2004 года.</p>
      </div>


    </div>
    <button class="modal__close j-modal-close" type="button"><span class="visually-hidden">Закрыть</span></button>
  </div>
</div>
<!-- Модалка с текстом для вывода сообщения о принятии заявки -->
<div class="modal j-modal j-message" id="message">
    <div class="modal__block modal__block--text j-modal-block">
      <div>
        <h1 class="j-modal-title">Заявка отправлена</h1>
        <p class="j-modal-caption modal__caption">Мы свяжемся с вами в&nbsp;ближайшее время</p>
      </div>
      <button class="modal__close j-modal-close" type="button"><span class="visually-hidden">Закрыть</span></button>
    </div>

</div>

<script src="<?= SITE_TEMPLATE_PATH ?>/assets/js/all.js"></script>
<!--
   Не работает.  
<//?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH. '/assets/js/all.js'); ?>
-->



</body>
</html>