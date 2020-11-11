<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <?php Asset::getInstance()->addString('<meta name="viewport" content="width=device-width,initial-scale=1">'); ?>
    <title>
        <?php $APPLICATION->ShowTitle(); ?>
    </title>

    <?php

    $APPLICATION->ShowHead();

    //  Css
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/css/owl/owl.carousel.min.css");
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/css/owl/owl.theme.default.min.css");
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/fonts/evolventa/all.css");
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/css/0.bundle.min.css");
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/css/custom.css");

    //  Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/css/default_menu__sub.css");


    //  Js
    //  Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/custom.js");
    //  Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/2.bundle.min.js");
    //  Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/0.bundle.min.js");

//          Asset::getInstance()->addString('<link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">');
    Asset::getInstance()->addString('<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
    integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">');
    Asset::getInstance()->addString('<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="crossorigin="anonymous"></script>');

    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/owl/owl.carousel.min.js");
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/custom.js");

    ?>
</head>

<body>

<?php //$APPLICATION->ShowPanel(); ?>

<header class="header">
    <div class="wrapper-inner">
        <div class="header-top">
            <div class="ht-content">
                <div class="header-top-line" id="header-top-line">
                    <div class="col-left">
                        <div class="row align-items-center">
                            <div class="col-auto" style="width: 188px">
                                <div class="hamburger visible-xs">
                                    <span class="line"></span>
                                </div>
                                <a href="#!" class="logo top-logo">
                                    <img src="<?= DEFAULT_TEMPLATE_PATH . '/images/static/logo.svg' ?>"/>
                                </a>
                            </div>
                            <div class="col-auto">
                                <div class="navigation-box top-menu">
                                    <ul class="navigation">
                                        <li class="navigation_item">
                                            <a href="#!" class="navigation-link">Акции</a>
                                        </li>

                                        <li class="navigation_item">
                                            <a href="#!" class="navigation-link">Бренды</a>
                                        </li>

                                        <li class="navigation_item">
                                            <a href="#!" class="navigation-link">Рецепты</a>
                                        </li>

                                        <li class="navigation_item">
                                            <a href="#!" class="navigation-link">Доставка и оплата</a>
                                        </li>

                                        <li class="navigation_item">
                                            <a href="#!" class="navigation-link">Магазины</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-right">
                        <div class="header-phone">
                            <a href="tel:88007007575" class="phone-link">8 (800) 700-75-75</a>
                            <!-- при необходимости добавить href="tel:номер телефона формата +79009009090" -->
                            <a href="#!" class="header-phone__btn-get-call">
                                Заказать звонок
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="hb-content">
                <div class="header-bottom-line wrapper-inner">
                    <div class="header-bottom-row row align-items-center">
                        <div class="hamburger visible-xs">
                            <span class="line"></span>
                        </div>
                        <div class="top-nav-wrapper col-auto pr-0">
                            <div class="top-nav-wrapper-overflow">
                                <div class="icon-box_item">
                                    <a href="#!" class="icon-box-link">
                                        <!--                                        <span class="fa fa-user-o"></span>-->
                                        <span class="icon-txt">Войти</span>
                                    </a>
                                    <a class="icon-box-link visible-xs" href="#!">
                                        <span class="icon-txt">Регистрация</span>
                                    </a>
                                </div>

                                <div class="top-catalog-menu">
                                    <a href="./catalog/" class="top-catalog-menu-title btn-primary"
                                       title="Каталог товаров">
                                        <span>Каталог товаров</span>
                                    </a>

                                    <!-- Тут все пункты меню -->
                                </div>

                                <!-- Мобильные пункты меню-->
                                <div class="navigation-container visible-xs">

                                    <ul class="navigation">
                                        <li class="navigation_item">
                                            <a href="#!" class="navigation-link">Доставка и оплата</a>
                                        </li>

                                        <li class="navigation_item">
                                            <a href="#!" class="navigation-link">О компании</a>
                                        </li>

                                        <li class="navigation_item">
                                            <a href="#!" class="navigation-link">Магазины</a>
                                        </li>

                                        <li class="navigation_item">
                                            <a href="#!" class="navigation-link">Политика конфиденциальности</a>
                                        </li>
                                    </ul>

                                    <ul class="navigation">
                                        <li class="navigation_item">
                                            <a href="#!" class="navigation-link">Акции</a>
                                        </li>

                                        <li class="navigation_item">
                                            <a href="#!" class="navigation-link">Бренды</a>
                                        </li>

                                        <li class="navigation_item">
                                            <a href="#!" class="navigation-link">Рецепты</a>
                                        </li>

                                        <li class="navigation_item">
                                            <a href="#!" class="navigation-link">Как заказать</a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <div class="logo col-auto pr-0">
                            <a href="#!" class="top-logo">
                                <img src="<?= DEFAULT_TEMPLATE_PATH . '/images/static/logo.svg' ?>"/>
                            </a>
                        </div>
                        <div class="top-search col" id="search_in">
                            <a href="index.html" class="icon-box-link search-link visible-xs">
                                <span class="icon-item fa fa-search"></span>
                            </a>
                            <div class="search_wrapper">
                                <div class="search__input">
                                    <div id="title-search" class="bx-searchtitle">
                                        <form>
                                            <div class="title-search-wrapper">
                                                <input id="title-search-input" type="text" name="q" value=""
                                                       autocomplete="off"
                                                       placeholder="Начните вводить название товара, например «Банан»"/>
                                                <button class="search-title-button" type="submit" name="s"></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="top-icon-box col-auto">

                            <div class="icon-box_item" id="user">
                                <a href="./auth/" class="icon-box-link">
                                    <span class="fa fa-user-o">
                                        <img src="<?= DEFAULT_TEMPLATE_PATH . '/images/static/user.svg' ?>"/>
                                    </span>
                                    <span class="icon-txt">Войти</span>
                                </a>
                                <a class="icon-box-link visible-xs" href="./auth/?register=yes">
                                    <span class="icon-txt">Регистрация</span>
                                </a>
                            </div>

                            <div class="icon-box_item" id="favour_in">
                                <a href="./favorite/" class="icon-box-link">
                                    <span class="icon-item favour-icon">
                                        <span class="goods_icon-counter">0</span>
                                    </span>
                                    <span style="display: none" class="icon-txt">Избранное</span>
                                </a>
                            </div>

                            <div class="icon-box_item_line"></div>

                            <!-- Корзина -->
                            <div class="icon-box_item" id="basket_in">
                                <div id="bx_basketFKauiI" class="bx-basket bx-opener">
                                    <a href="./basket/" class="icon-box-link basket-link">
                                        <span class="icon-item basket-icon">
                                            <span class="goods_icon-counter">3</span>
                                        </span>
                                        <span class="icon-txt total-price">1500<sup>00</sup>
                                            <i class="fa fa-rub"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>