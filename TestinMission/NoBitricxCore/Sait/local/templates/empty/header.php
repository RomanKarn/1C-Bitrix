<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
$bIsMainPage = $APPLICATION->GetCurPage(false) == SITE_DIR;
@define("ERROR_404", "N");
?>

<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><? $APPLICATION->ShowTitle(); ?></title>
    <? $APPLICATION->ShowHead(); ?>

    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/assets/css/style.min.css'); ?>
    <? $APPLICATION->AddHeadString('<link href="' . $APPLICATION->GetCurDir() . '"/assets/fonts/oswald-medium.woff2";  as="font" rel="preload" />', true) ?>


    <? $APPLICATION->AddHeadString('<link href="' . $APPLICATION->GetCurDir() . '"/assets/img/favicon/favicon.ico"; rel="shortcut icon" />', true) ?>
    <? $APPLICATION->AddHeadString('<link href="' . $APPLICATION->GetCurDir() . '"/assets/img/favicon/favicon.ico";  rel="icon" sizes="16x16 32x32 64x64" />', true) ?>
    <? $APPLICATION->AddHeadString('<link href="' . $APPLICATION->GetCurDir() . '"/assets/img/favicon/favicon-192.png";  rel="icon" type="image/png" sizes="196x196" />', true) ?>
    <? $APPLICATION->AddHeadString('<link href="' . $APPLICATION->GetCurDir() . '"/assets/img/favicon/favicon-160.png";  rel="icon" type="image/png" sizes="160x160" />', true) ?>
    <? $APPLICATION->AddHeadString('<link href="' . $APPLICATION->GetCurDir() . '"/assets/img/favicon/favicon-96.png";   rel="icon" type="image/png" sizes="96x96" />', true) ?>
    <? $APPLICATION->AddHeadString('<link href="' . $APPLICATION->GetCurDir() . '"/assets/img/favicon/favicon-64.png";  rel="icon" type="image/png" sizes="64x64" />', true) ?>
    <? $APPLICATION->AddHeadString('<link href="' . $APPLICATION->GetCurDir() . '"/assets/img/favicon/favicon-32.png";  rel="icon" type="image/png" sizes="32x32" />', true) ?>
    <? $APPLICATION->AddHeadString('<link href="' . $APPLICATION->GetCurDir() . '"/assets/img/favicon/favicon-16.png";  rel="icon" type="image/png" sizes="16x16" />', true) ?>
    <? $APPLICATION->AddHeadString('<link href="' . $APPLICATION->GetCurDir() . '"/assets/img/favicon/favicon-57.png";  rel="apple-touch-icon" />', true) ?>
    <? $APPLICATION->AddHeadString('<link href="' . $APPLICATION->GetCurDir() . '"/assets/img/favicon/favicon-114.png";  rel="apple-touch-icon" sizes="114x114" />', true) ?>
    <? $APPLICATION->AddHeadString('<link href="' . $APPLICATION->GetCurDir() . '"/assets/img/favicon/favicon-72.png";  rel="apple-touch-icon" sizes="72x72" />', true) ?>
    <? $APPLICATION->AddHeadString('<link href="' . $APPLICATION->GetCurDir() . '"/assets/img/favicon/favicon-144.png"; rel="apple-touch-icon" sizes="144x144" />', true) ?>
    <? $APPLICATION->AddHeadString('<link href="' . $APPLICATION->GetCurDir() . '"/assets/img/favicon/favicon-60.png";  rel="apple-touch-icon" sizes="60x60" />', true) ?>
    <? $APPLICATION->AddHeadString('<link href="' . $APPLICATION->GetCurDir() . '"/assets/img/favicon/favicon-120.png";  rel="apple-touch-icon" sizes="120x120" />', true) ?>
    <? $APPLICATION->AddHeadString('<link href="' . $APPLICATION->GetCurDir() . '"/assets/img/favicon/favicon-76.png";  rel="apple-touch-icon" sizes="76x76" />', true) ?>
    <? $APPLICATION->AddHeadString('<link href="' . $APPLICATION->GetCurDir() . '"/assets/img/favicon/favicon-152.png";   rel="apple-touch-icon" sizes="152x152"  />', true) ?>
    <? $APPLICATION->AddHeadString('<link href="' . $APPLICATION->GetCurDir() . '"/assets/img/favicon/favicon-180.png";  rel="apple-touch-icon" sizes="180x180" />', true) ?>

    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="<?= SITE_TEMPLATE_PATH ?>/assets/img/favicon/favicon-144.png">
    <meta name="msapplication-config" content="<?= SITE_TEMPLATE_PATH ?>/assets/browserconfig.xml">

    <button class="up" type="button"><span class="visually-hidden">Вверх</span></button>
</head>

<body>
    <? $APPLICATION->ShowPanel(); ?>
    <div class="hidden">
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="insta-icon" viewbox="0 0 14 14">

            </symbol>
            <symbol id="vk-icon" viewbox="0 0 24 12">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.7421 11.9499H13.1769C13.1769 11.9499 13.6102 11.9077 13.8316 11.699C14.0355 11.5069 14.029 11.1469 14.029 11.1469C14.029 11.1469 14.0013 9.45983 14.8942 9.21153C15.7747 8.96642 16.9057 10.8418 18.1045 11.5631C19.0105 12.1088 19.6995 11.9888 19.6995 11.9888L22.9047 11.9499C22.9047 11.9499 24.5812 11.8592 23.7859 10.7039C23.7211 10.6094 23.3227 9.8492 21.4029 8.28726C19.3929 6.65256 19.6623 6.91682 22.0832 4.08912C23.5572 2.36696 24.1471 1.31567 23.9629 0.865026C23.7874 0.436083 22.7029 0.549064 22.7029 0.549064L19.0943 0.568851C19.0943 0.568851 18.8262 0.536936 18.6281 0.64098C18.4344 0.742471 18.3099 0.979921 18.3099 0.979921C18.3099 0.979921 17.7382 2.31271 16.9771 3.44634C15.3705 5.83744 14.7274 5.96446 14.4652 5.81574C13.8542 5.46977 14.0071 4.4255 14.0071 3.68379C14.0071 1.3661 14.4084 0.3997 13.2257 0.149483C12.8339 0.0665034 12.5447 0.011609 11.5411 0.00267268C10.2535 -0.00881685 9.16398 0.00586421 8.54639 0.270762C8.13564 0.446934 7.81883 0.839493 8.01183 0.862472C8.25071 0.890558 8.79037 0.990134 9.07659 1.33163C9.44656 1.7727 9.43345 2.76271 9.43345 2.76271C9.43345 2.76271 9.64611 5.49084 8.93749 5.82978C8.45099 6.06212 7.78387 5.58786 6.35132 3.41825C5.6172 2.30696 5.06297 1.07822 5.06297 1.07822C5.06297 1.07822 4.95664 0.849068 4.76583 0.725875C4.53423 0.577149 4.2116 0.529914 4.2116 0.529914L0.782066 0.549702C0.782066 0.549702 0.267163 0.562468 0.0785356 0.758428C-0.0897 0.933325 0.064698 1.29397 0.064698 1.29397C0.064698 1.29397 2.74918 6.79873 5.78908 9.57281C8.57771 12.1171 11.7421 11.9499 11.7421 11.9499Z"></path>
            </symbol>
        </svg>
    </div>
    <!-- Header-->
    <header class="page-header">
        <div class="container">
            <nav class="page-nav">
                <a class="page-nav__logo">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/logo.svg" alt="Спортивная школа «Ва-банк»" width="53" height="51">
                </a>
                <a href="tel:+73822211195" class="page-nav__phone"><? $APPLICATION->IncludeFile(SITE_DIR . "include/phone.php", array(), array("MODE" => "text")); ?></a>
                <button class="page-nav__handler j-menu-button" type="button"><span class="visually-hidden">Меню</span>
                </button>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "newmenu",
                        array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "left",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => array(""),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_THEME" => "site",
                            "ROOT_MENU_TYPE" => "top",
                            "USE_EXT" => "N"
                        )
                    ); ?>
            </nav>
        </div>
    </header>