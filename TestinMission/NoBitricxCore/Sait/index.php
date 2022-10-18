<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Спортивная школа «Ва-банк»");
?>
<main>
    <section class="our-team">
        <h1 class="visually-hidden"><? $APPLICATION->IncludeFile(SITE_DIR . "include/our-team/visually-hidden.php", array(),array("MODE" => "text")); ?></h1>
        <div class="our-team__header">
            <div class="container">
                <p class="our-team__title"><? $APPLICATION->IncludeFile(SITE_DIR . "include/our-team/our-team__title.php", array(),array("MODE" => "text")); ?></p>
                <p class="our-team__subtitle"><? $APPLICATION->IncludeFile(SITE_DIR . "include/our-team/our-team__subtitle.php", array(),array("MODE" => "text")); ?></p>
                <a class="our-team__button button button--arrow" href="#"><? $APPLICATION->IncludeFile(SITE_DIR . "include/our-team/our-team__button button button--arrow.php", array(),array("MODE" => "text")); ?></a>
            </div>
        </div>
        <div class="our-team__features features">
            <div class="container">
                <ul class="features__list">
                    <li class="features__item features__item--ball"><? $APPLICATION->IncludeFile(SITE_DIR . "include/our-team/features__item--ball.php", array(),array("MODE" => "text")); ?></li>
                    <li class="features__item features__item--team"><? $APPLICATION->IncludeFile(SITE_DIR . "include/our-team/features__item--team.php", array(),array("MODE" => "text")); ?></li>
                    <li class="features__item features__item--school"><? $APPLICATION->IncludeFile(SITE_DIR . "include/our-team/features__item--school.php", array(),array("MODE" => "text")); ?></li>
                </ul>
            </div>
        </div>
        <div class="join-block__container">
            <div class="our-team__join join-block">
                <div class="container">
                    <h3 class="join-block__title">
                        Набор в детские команды
                    </h3>
                    <ul class="join-block__list">
                        <li class="join-block__item"><? $APPLICATION->IncludeFile(SITE_DIR . "include/our-team/join-block__item1.php", array(),array("MODE" => "text")); ?></li>
                        <li class="join-block__item"><? $APPLICATION->IncludeFile(SITE_DIR . "include/our-team/join-block__item2.php", array(),array("MODE" => "text")); ?></li>
                        <li class="join-block__item"><? $APPLICATION->IncludeFile(SITE_DIR . "include/our-team/join-block__item3.php", array(),array("MODE" => "text")); ?></li>
                    </ul>
                    <button class="button button--wide join-block__button j-modal-link" rel="appointment-modal" type="button">Записаться на занятие
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="news">
        <div class="container">
            <div class="news__header section-header">
                <div class="section-header__name">Новости</div>
                <a class="section-header__link link-red link-red--arrow" href="">Все новости</a>
            </div>
            <div class="news__block">
                <div class="news__main">
                    <div class="news__item news__item--main">
                        <? $GLOBALS['arrFilter'] = array("SECTION_ID" => "2"); ?>
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "main_news",
                            array(
                                "ACTIVE_DATE_FORMAT" => "j M Y",    // Формат показа даты
                                "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
                                "AJAX_MODE" => "N",    // Включить режим AJAX
                                "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
                                "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
                                "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
                                "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
                                "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
                                "CACHE_GROUPS" => "Y",    // Учитывать права доступа
                                "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
                                "CACHE_TYPE" => "A",    // Тип кеширования
                                "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
                                "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                                "DISPLAY_BOTTOM_PAGER" => "Y",    // Выводить под списком
                                "DISPLAY_DATE" => "Y",    // Выводить дату элемента
                                "DISPLAY_NAME" => "Y",    // Выводить название элемента
                                "DISPLAY_PICTURE" => "Y",    // Выводить изображение для анонса
                                "DISPLAY_PREVIEW_TEXT" => "N",    // Выводить текст анонса
                                "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                                "FIELD_CODE" => array(    // Поля
                                    0 => "",
                                    1 => "",
                                ),
                                "FILTER_NAME" => "arrFilter",    // Фильтр
                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
                                "IBLOCK_ID" => "3",    // Код информационного блока
                                "IBLOCK_TYPE" => "news",    // Тип информационного блока (используется только для проверки)
                                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
                                "INCLUDE_SUBSECTIONS" => "Y",    // Показывать элементы подразделов раздела
                                "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
                                "NEWS_COUNT" => "1",    // Количество новостей на странице
                                "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                                "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
                                "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                                "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
                                "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
                                "PAGER_TITLE" => "Новости",    // Название категорий
                                "PARENT_SECTION" => "",    // ID раздела
                                "PARENT_SECTION_CODE" => "",    // Код раздела
                                "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
                                "PROPERTY_CODE" => array(    // Свойства
                                    0 => "",
                                    1 => "",
                                ),
                                "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
                                "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
                                "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
                                "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
                                "SET_STATUS_404" => "N",    // Устанавливать статус 404
                                "SET_TITLE" => "N",    // Устанавливать заголовок страницы
                                "SHOW_404" => "N",    // Показ специальной страницы
                                "SORT_BY1" => "ACTIVE_FROM",    // Поле для первой сортировки новостей
                                "SORT_BY2" => "SORT",    // Поле для второй сортировки новостей
                                "SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
                                "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
                                "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
                            ),
                            false
                        ); ?>
                    </div>
                </div>

                <ul class="news__list">
                    <? $GLOBALS['arrFilter'] = array("SECTION_ID" => "3"); ?>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "mediume_news",
                        array(
                            "ACTIVE_DATE_FORMAT" => "j M Y",    // Формат показа даты
                            "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
                            "AJAX_MODE" => "N",    // Включить режим AJAX
                            "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
                            "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
                            "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
                            "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
                            "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
                            "CACHE_GROUPS" => "Y",    // Учитывать права доступа
                            "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
                            "CACHE_TYPE" => "A",    // Тип кеширования
                            "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
                            "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                            "DISPLAY_BOTTOM_PAGER" => "Y",    // Выводить под списком
                            "DISPLAY_DATE" => "Y",    // Выводить дату элемента
                            "DISPLAY_NAME" => "Y",    // Выводить название элемента
                            "DISPLAY_PICTURE" => "Y",    // Выводить изображение для анонса
                            "DISPLAY_PREVIEW_TEXT" => "N",    // Выводить текст анонса
                            "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                            "FIELD_CODE" => array(    // Поля
                                0 => "",
                                1 => "",
                            ),
                            "FILTER_NAME" => "arrFilter",    // Фильтр
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
                            "IBLOCK_ID" => "3",    // Код информационного блока
                            "IBLOCK_TYPE" => "news",    // Тип информационного блока (используется только для проверки)
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
                            "INCLUDE_SUBSECTIONS" => "Y",    // Показывать элементы подразделов раздела
                            "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
                            "NEWS_COUNT" => "2",    // Количество новостей на странице
                            "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                            "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
                            "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                            "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
                            "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
                            "PAGER_TITLE" => "Новости",    // Название категорий
                            "PARENT_SECTION" => "",    // ID раздела
                            "PARENT_SECTION_CODE" => "",    // Код раздела
                            "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
                            "PROPERTY_CODE" => array(    // Свойства
                                0 => "",
                                1 => "",
                            ),
                            "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
                            "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
                            "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
                            "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
                            "SET_STATUS_404" => "N",    // Устанавливать статус 404
                            "SET_TITLE" => "N",    // Устанавливать заголовок страницы
                            "SHOW_404" => "N",    // Показ специальной страницы
                            "SORT_BY1" => "ACTIVE_FROM",    // Поле для первой сортировки новостей
                            "SORT_BY2" => "SORT",    // Поле для второй сортировки новостей
                            "SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
                            "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
                            "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
                        ),
                        false
                    ); ?>
                </ul>
                <ul class="news__list news__list--small">
                    <? $GLOBALS['arrFilter'] = array("SECTION_ID" => "4"); ?>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "litel_news",
                        array(
                            "ACTIVE_DATE_FORMAT" => "j M Y",    // Формат показа даты
                            "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
                            "AJAX_MODE" => "N",    // Включить режим AJAX
                            "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
                            "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
                            "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
                            "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
                            "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
                            "CACHE_GROUPS" => "Y",    // Учитывать права доступа
                            "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
                            "CACHE_TYPE" => "A",    // Тип кеширования
                            "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
                            "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                            "DISPLAY_BOTTOM_PAGER" => "Y",    // Выводить под списком
                            "DISPLAY_DATE" => "Y",    // Выводить дату элемента
                            "DISPLAY_NAME" => "Y",    // Выводить название элемента
                            "DISPLAY_PICTURE" => "Y",    // Выводить изображение для анонса
                            "DISPLAY_PREVIEW_TEXT" => "N",    // Выводить текст анонса
                            "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                            "FIELD_CODE" => array(    // Поля
                                0 => "",
                                1 => "",
                            ),
                            "FILTER_NAME" => "arrFilter",    // Фильтр
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
                            "IBLOCK_ID" => "3",    // Код информационного блока
                            "IBLOCK_TYPE" => "news",    // Тип информационного блока (используется только для проверки)
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
                            "INCLUDE_SUBSECTIONS" => "Y",    // Показывать элементы подразделов раздела
                            "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
                            "NEWS_COUNT" => "3",    // Количество новостей на странице
                            "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                            "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
                            "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                            "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
                            "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
                            "PAGER_TITLE" => "Новости",    // Название категорий
                            "PARENT_SECTION" => "",    // ID раздела
                            "PARENT_SECTION_CODE" => "",    // Код раздела
                            "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
                            "PROPERTY_CODE" => array(    // Свойства
                                0 => "",
                                1 => "",
                            ),
                            "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
                            "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
                            "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
                            "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
                            "SET_STATUS_404" => "N",    // Устанавливать статус 404
                            "SET_TITLE" => "N",    // Устанавливать заголовок страницы
                            "SHOW_404" => "N",    // Показ специальной страницы
                            "SORT_BY1" => "ACTIVE_FROM",    // Поле для первой сортировки новостей
                            "SORT_BY2" => "SORT",    // Поле для второй сортировки новостей
                            "SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
                            "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
                            "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
                        ),
                        false
                    ); ?>
                </ul>

                <!-- Не понял как он должен появится-->
                <div style="display: none" class="banner banner--announce">
                    <div class="banner__container">
                        <div class="banner__info">
                            <span class="banner__date">2 августа</span>
                            <time class="banner__time">19:00</time>
                            <span class="banner__place">СК &laquo;Юпитер&raquo;</span>
                        </div>
                        <h3 class="banner__title">Чемпионат области<br> по мини-футболу</h3>
                        <div class="banner__score">
                            <div class="banner__logo">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/banner/team1.svg" alt="logo" width="47" height="46">
                            </div>
                            <div class="banner__result"> - : -</div>
                            <div class="banner__logo">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/banner/team2.png" alt="logo" width="38" height="48">
                            </div>
                        </div>
                        <div class="banner__teams">
                            <div class="banner__team banner__team--left">
                                <div class="banner__name">ФК &laquo;Ва-банк&raquo;</div>
                                <div class="banner__city">г. Томск</div>
                            </div>
                            <div class="banner__team banner__team--right">
                                <div class="banner__name">ФК &laquo;Юниор&raquo;</div>
                                <div class="banner__city">г. Санкт-Петергург</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Не понял как он должен появится-->
                <div style="display: none" class="banner banner--result">
                    <div class="banner__container">
                        <div class="banner__info">
                            <span class="banner__status">Матч завершен</span>
                        </div>
                        <h3 class="banner__title">I ОТКРЫТОЕ ПЕРВЕНСТВО НА ПРИЗЫ СПОРТИВНОЙ ШКОЛЫ «ВА-БАНК»
                            г.&nbsp;ТОМСК 2018 года</h3>
                        <div class="banner__score">
                            <div class="banner__logo">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/banner/team1.svg" alt="logo">
                            </div>
                            <div class="banner__result"> 1 : 0</div>
                            <div class="banner__logo">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/banner/team2.png" alt="logo">
                            </div>
                        </div>
                        <div class="banner__teams">
                            <div class="banner__team banner__team--left">
                                <div class="banner__name">ФК &laquo;Ва-банк&raquo;</div>
                                <div class="banner__city">г. Томск</div>
                            </div>
                            <div class="banner__team banner__team--right">
                                <div class="banner__name">ФК &laquo;Юниор&raquo;</div>
                                <div class="banner__city">г. Санкт-Петергург</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="history">
        <div class="history__gallery">
            <div class="container">
                <div class="history__header">
                    <h3 class="history__title">
                    <? $APPLICATION->IncludeFile(SITE_DIR . "include/history/history__title.php", array(),array("MODE" => "text")); ?>
                    </h3>
                    <a class="history__button button button--arrow" href="#">Подробнее</a>
                </div>
                <div class="history__slider slider">
                    <div class="slider__controls j-slider-controls">
                    </div>
                    <ul class="slider__list j-slider">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "slider_history",
                            array(
                                "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
                                "ADD_SECTIONS_CHAIN" => "Y",    // Включать раздел в цепочку навигации
                                "AJAX_MODE" => "N",    // Включить режим AJAX
                                "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
                                "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
                                "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
                                "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
                                "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
                                "CACHE_GROUPS" => "Y",    // Учитывать права доступа
                                "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
                                "CACHE_TYPE" => "A",    // Тип кеширования
                                "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
                                "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                                "DISPLAY_BOTTOM_PAGER" => "Y",    // Выводить под списком
                                "DISPLAY_DATE" => "N",    // Выводить дату элемента
                                "DISPLAY_NAME" => "N",    // Выводить название элемента
                                "DISPLAY_PICTURE" => "Y",    // Выводить изображение для анонса
                                "DISPLAY_PREVIEW_TEXT" => "N",    // Выводить текст анонса
                                "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                                "FIELD_CODE" => array(    // Поля
                                    0 => "",
                                    1 => "",
                                ),
                                "FILTER_NAME" => "",    // Фильтр
                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
                                "IBLOCK_ID" => "4",    // Код информационного блока
                                "IBLOCK_TYPE" => "slider",    // Тип информационного блока (используется только для проверки)
                                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",    // Включать инфоблок в цепочку навигации
                                "INCLUDE_SUBSECTIONS" => "N",    // Показывать элементы подразделов раздела
                                "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
                                "NEWS_COUNT" => "20",    // Количество новостей на странице
                                "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                                "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
                                "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                                "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
                                "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
                                "PAGER_TITLE" => "Новости",    // Название категорий
                                "PARENT_SECTION" => "",    // ID раздела
                                "PARENT_SECTION_CODE" => "",    // Код раздела
                                "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
                                "PROPERTY_CODE" => array(    // Свойства
                                    0 => "",
                                    1 => "",
                                ),
                                "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
                                "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
                                "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
                                "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
                                "SET_STATUS_404" => "N",    // Устанавливать статус 404
                                "SET_TITLE" => "N",    // Устанавливать заголовок страницы
                                "SHOW_404" => "N",    // Показ специальной страницы
                                "SORT_BY1" => "ACTIVE_FROM",    // Поле для первой сортировки новостей
                                "SORT_BY2" => "SORT",    // Поле для второй сортировки новостей
                                "SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
                                "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
                                "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
                            ),
                            false
                        ); ?>
                    </ul>
                    <div class="slider__index">
                        <span class="slider__current j-current-photo">01 </span>
                        <span class="slider__quantity j-all-photos"> 10</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="history__line">
            <div class="container">
                <ul class="history__list">
                    <li class="history__point">
                        <span class="history__date"><? $APPLICATION->IncludeFile(SITE_DIR . "include/history/history__date1.php", array(),array("MODE" => "text")); ?></span>
                        <span class="history__description"><? $APPLICATION->IncludeFile(SITE_DIR . "include/history/history__description1.php", array(),array("MODE" => "text")); ?></span>
                    </li>
                    <li class="history__point">
                        <span class="history__date"><? $APPLICATION->IncludeFile(SITE_DIR . "include/history/history__date2.php", array(),array("MODE" => "text")); ?></span>
                        <span class="history__description"><? $APPLICATION->IncludeFile(SITE_DIR . "include/history/history__description2.php", array(),array("MODE" => "text")); ?>
                        </span>
                    </li>
                    <li class="history__point">
                        <span class="history__date"><? $APPLICATION->IncludeFile(SITE_DIR . "include/history/history__date3.php", array(),array("MODE" => "text")); ?></span>
                        <span class="history__description"><? $APPLICATION->IncludeFile(SITE_DIR . "include/history/history__description3.php", array(),array("MODE" => "text")); ?></span>
                    </li>
                    <li class="history__point">
                        <span class="history__date"><? $APPLICATION->IncludeFile(SITE_DIR . "include/history/history__date4.php", array(),array("MODE" => "text")); ?></span>
                        <span class="history__description"><? $APPLICATION->IncludeFile(SITE_DIR . "include/history/history__description4.php", array(),array("MODE" => "text")); ?></span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="teachers">
        <div class="container">
            <div class="teachers__header section-header">
                <div class="section-header__name">Тренеры</div>
                <a class="section-header__link link-red link-red--arrow" href="">Весь состав</a>
            </div>
            <ul class="teachers__list">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "teachers",
                    array(
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
                        "ADD_SECTIONS_CHAIN" => "Y",    // Включать раздел в цепочку навигации
                        "AJAX_MODE" => "N",    // Включить режим AJAX
                        "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
                        "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
                        "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
                        "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
                        "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
                        "CACHE_GROUPS" => "Y",    // Учитывать права доступа
                        "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
                        "CACHE_TYPE" => "A",    // Тип кеширования
                        "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
                        "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                        "DISPLAY_BOTTOM_PAGER" => "Y",    // Выводить под списком
                        "DISPLAY_DATE" => "N",    // Выводить дату элемента
                        "DISPLAY_NAME" => "Y",    // Выводить название элемента
                        "DISPLAY_PICTURE" => "Y",    // Выводить изображение для анонса
                        "DISPLAY_PREVIEW_TEXT" => "Y",    // Выводить текст анонса
                        "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                        "FIELD_CODE" => array(    // Поля
                            0 => "DETAIL_TEXT",
                            1 => "",
                        ),
                        "FILTER_NAME" => "",    // Фильтр
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
                        "IBLOCK_ID" => "5",    // Код информационного блока
                        "IBLOCK_TYPE" => "teachers",    // Тип информационного блока (используется только для проверки)
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",    // Включать инфоблок в цепочку навигации
                        "INCLUDE_SUBSECTIONS" => "N",    // Показывать элементы подразделов раздела
                        "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
                        "NEWS_COUNT" => "4",    // Количество новостей на странице
                        "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                        "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
                        "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                        "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
                        "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
                        "PAGER_TITLE" => "Новости",    // Название категорий
                        "PARENT_SECTION" => "",    // ID раздела
                        "PARENT_SECTION_CODE" => "",    // Код раздела
                        "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
                        "PROPERTY_CODE" => array(    // Свойства
                            0 => "",
                            1 => "",
                        ),
                        "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
                        "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
                        "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
                        "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
                        "SET_STATUS_404" => "N",    // Устанавливать статус 404
                        "SET_TITLE" => "N",    // Устанавливать заголовок страницы
                        "SHOW_404" => "N",    // Показ специальной страницы
                        "SORT_BY1" => "ACTIVE_FROM",    // Поле для первой сортировки новостей
                        "SORT_BY2" => "SORT",    // Поле для второй сортировки новостей
                        "SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
                        "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
                        "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
                    ),
                    false
                ); ?>
            </ul>
            <a class="button teachers__button button--arrow" href="">Все тренеры</a>
        </div>
    </section>

    <section class="about-school">
        <div class="container">
            <h3 class="about-school__title"><? $APPLICATION->IncludeFile(SITE_DIR . "include/about-school/about-school__title.php", array(),array("MODE" => "text")); ?></h3>
            <ul class="about-school__list">
                <li class="about-school__item about-school__item--sports">
                    <b class="about-school__caption"><? $APPLICATION->IncludeFile(SITE_DIR . "include/about-school/about-school__caption1.php", array(),array("MODE" => "text")); ?></b>
                    <span class="about-school__text"><? $APPLICATION->IncludeFile(SITE_DIR . "include/about-school/about-school__text1.php", array(),array("MODE" => "text")); ?></span>
                </li>
                <li class="about-school__item about-school__item--trainer">
                    <b class="about-school__caption"><? $APPLICATION->IncludeFile(SITE_DIR . "include/about-school/about-school__caption2.php", array(),array("MODE" => "text")); ?></b>
                    <span class="about-school__text"><? $APPLICATION->IncludeFile(SITE_DIR . "include/about-school/about-school__text2.php", array(),array("MODE" => "text")); ?></span>
                </li>
                <li class="about-school__item about-school__item--license">
                    <b class="about-school__caption"><? $APPLICATION->IncludeFile(SITE_DIR . "include/about-school/about-school__caption3.php", array(),array("MODE" => "text")); ?></b>
                    <span class="about-school__text"><? $APPLICATION->IncludeFile(SITE_DIR . "include/about-school/about-school__text3.php", array(),array("MODE" => "text")); ?></span>
                </li>
                <li class="about-school__item about-school__item--tourney">
                    <b class="about-school__caption"><? $APPLICATION->IncludeFile(SITE_DIR . "include/about-school/about-school__caption4.php", array(),array("MODE" => "text")); ?></b>
                    <span class="about-school__text"> <? $APPLICATION->IncludeFile(SITE_DIR . "include/about-school/about-school__text4.php", array(),array("MODE" => "text")); ?></span>
                </li>
            </ul>
        </div>
    </section>

    <section class="invite">
        <div class="invite__container">
            <div class="invite__block">
                <div class="container">
                    <h3 class="invite__title">
                    <? $APPLICATION->IncludeFile(SITE_DIR . "include/invite/invite__title.php", array(),array("MODE" => "text")); ?>
                    </h3>
                    <ul class="invite__list">
                        <li class="invite__item"><? $APPLICATION->IncludeFile(SITE_DIR . "include/invite/invite__item1.php", array(),array("MODE" => "html")); ?></li>
                        <li class="invite__item"><? $APPLICATION->IncludeFile(SITE_DIR . "include/invite/invite__item2.php", array(),array("MODE" => "text")); ?></li>
                        <li class="invite__item"><? $APPLICATION->IncludeFile(SITE_DIR . "include/invite/invite__item3.php", array(),array("MODE" => "text")); ?></li>
                        <li class="invite__item"><? $APPLICATION->IncludeFile(SITE_DIR . "include/invite/invite__item4.php", array(),array("MODE" => "html")); ?></li>
                    </ul>
                    <a class="invite__link link-red link-red--arrow" href="#">Смотреть расписание</a>
                </div>
            </div>
            <div class="invite__appointment appointment">
                <div class="container">
                    <form action="#" class="appointment__form form" method="post">
                        <p class="appointment__title"><? $APPLICATION->IncludeFile(SITE_DIR . "include/invite/appointment__title.php", array(),array("MODE" => "html")); ?> 
                        </p>
                        <div class="form__field">
                            <label class="visually-hidden" for="name">Имя</label>
                            <input type="text" class="form__input" placeholder="Имя" id="name" name="name" required="">
                        </div>
                        <div class="form__field">
                            <label class="visually-hidden" for="phone">Телефон</label>
                            <input type="tel" class="form__input" placeholder="Телефон" id="phone" name="phone" required="">
                        </div>
                        <div class="form__field">

                            <select class="form__select j-select" name="age" id="age">
                                <option value=" " disabled="" selected=""> Возраст ребенка</option>
                                <option value="4-6">4-6 лет</option>
                                <option value="7-9">7-9 лет</option>
                                <option value="10-12">10-12 лет</option>
                                <option value="13-15">13-15 лет</option>
                            </select>

                        </div>
                        <div class="form__field">
                            <input type="checkbox" class="visually-hidden form__input--checkbox " id="agree" name="agree" required="">
                            <label for="agree" class="form__label--checkbox"> Я согласен на обработку персональных данных
                            </label>
                        </div>
                        <button class="button appointment__button button--wide" type="submit">Записаться<span class="appointment__laptop-visible"> на занятие</span></button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="partners">
        <div class="partners__container">
            <div class="partners__block">
                <div class="container">
                    <div class="partners__header">
                        <p class="partners__title">
                        <? $APPLICATION->IncludeFile(SITE_DIR . "include/partners/partners__title.php", array(),array("MODE" => "text")); ?> 
                        </p>
                        <span class="partners__subtitle">
                        <? $APPLICATION->IncludeFile(SITE_DIR . "include/partners/partners__subtitle.php", array(),array("MODE" => "text")); ?>  
                        </span>
                    </div>
                    <ul class="partners__list">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "partners",
                            array(
                                "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
                                "ADD_SECTIONS_CHAIN" => "Y",    // Включать раздел в цепочку навигации
                                "AJAX_MODE" => "N",    // Включить режим AJAX
                                "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
                                "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
                                "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
                                "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
                                "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
                                "CACHE_GROUPS" => "Y",    // Учитывать права доступа
                                "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
                                "CACHE_TYPE" => "A",    // Тип кеширования
                                "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
                                "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                                "DISPLAY_BOTTOM_PAGER" => "Y",    // Выводить под списком
                                "DISPLAY_DATE" => "N",    // Выводить дату элемента
                                "DISPLAY_NAME" => "N",    // Выводить название элемента
                                "DISPLAY_PICTURE" => "Y",    // Выводить изображение для анонса
                                "DISPLAY_PREVIEW_TEXT" => "N",    // Выводить текст анонса
                                "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                                "FIELD_CODE" => array(    // Поля
                                    0 => "",
                                    1 => "",
                                ),
                                "FILTER_NAME" => "",    // Фильтр
                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
                                "IBLOCK_ID" => "6",    // Код информационного блока
                                "IBLOCK_TYPE" => "partners",    // Тип информационного блока (используется только для проверки)
                                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",    // Включать инфоблок в цепочку навигации
                                "INCLUDE_SUBSECTIONS" => "N",    // Показывать элементы подразделов раздела
                                "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
                                "NEWS_COUNT" => "6",    // Количество новостей на странице
                                "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                                "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
                                "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                                "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
                                "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
                                "PAGER_TITLE" => "Новости",    // Название категорий
                                "PARENT_SECTION" => "",    // ID раздела
                                "PARENT_SECTION_CODE" => "",    // Код раздела
                                "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
                                "PROPERTY_CODE" => array(    // Свойства
                                    0 => "",
                                    1 => "",
                                ),
                                "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
                                "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
                                "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
                                "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
                                "SET_STATUS_404" => "N",    // Устанавливать статус 404
                                "SET_TITLE" => "N",    // Устанавливать заголовок страницы
                                "SHOW_404" => "N",    // Показ специальной страницы
                                "SORT_BY1" => "ACTIVE_FROM",    // Поле для первой сортировки новостей
                                "SORT_BY2" => "SORT",    // Поле для второй сортировки новостей
                                "SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
                                "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
                                "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
                            ),
                            false
                        ); ?>
                    </ul>
                    <a class="button button--arrow partners__button j-modal-link" data-id="partners-modal" rel="partners-modal" href="">Присоединяйтесь</a>
                </div>
            </div>
            <div class="partners__offer offer">
                <div class="container">
                    <div class="offer__header">
                        <div class="offer__text">
                            <div class="offer__name"><? $APPLICATION->IncludeFile(SITE_DIR . "include/partners/offer__name.php", array(),array("MODE" => "text")); ?></div>
                            <div class="offer__title"><? $APPLICATION->IncludeFile(SITE_DIR . "include/partners/offer__title.php", array(),array("MODE" => "text")); ?></div>
                        </div>
                        <div class="offer__img">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/partners/bear-offer.jpg" alt="" height="104" width="104">
                        </div>
                    </div>
                    <ul class="offer__list">
                        <li class="offer__item">
                        <? $APPLICATION->IncludeFile(SITE_DIR . "include/partners/offer__item1.php", array(),array("MODE" => "text")); ?>
                        </li>
                        <li class="offer__item">
                        <? $APPLICATION->IncludeFile(SITE_DIR . "include/partners/offer__item2.php", array(),array("MODE" => "text")); ?> 
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>


</main>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>