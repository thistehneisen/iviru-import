<?php

// init
require_once '../vendor/db.class.php';
require_once '../config.php';
require_once '../helpers.php';

$db = new db($database['config'], '_read');
$providers = array_keys($data);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>TV Dom</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&amp;subset=cyrillic-ext" rel="stylesheet">
    <link href="css/style.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <meta name="apple-itunes-app" content="app-id=id1050989121">
    
    <link rel="shortcut icon" href="img/fav/favicon.ico" type="image/x-icon">
    
    <link rel="apple-touch-icon" sizes="120x120" href="img/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="img/fav/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="img/fav/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="img/fav/manifest.json">
    <link rel="mask-icon" href="img/fav/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
    
    
    <meta name="twitter:title" content="inBudget - Free Personal Finance Management App, Like it Should Be" />
    <meta name="twitter:description" content="inBudget is a personal finance app that makes keeping track of your money simple!"/>
    <meta name="twitter:image" content="/static/public/img/og-inbudget.jpg"/>
    <meta name="twitter:url" content="http://cli.re/F0iR4p"/>
    <meta name="twitter:card" content="summary" />
    
    
    <meta property="og:image" content="https://tvdom.tv/logo_200.png">
    <meta property="og:title" content="TVDOM">
    <meta property="og:description" content="TVDOM interneta TV">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://tvdom.tv">
    <meta property="fb:app_id" content="523750107777622">
    <meta property="og:site_name" content="TVDom" />
    
    
    <link rel="apple-touch-icon" href="img/fav/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/fav/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/fav/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/fav/apple-touch-icon-152x152.png">
</head>

<body>
<div class="container">
    <header class="main-header  main-header--fixed  js---main-header-no-move">
        <div class="wrapper  wrapper--flex">
            <div class="logo">
                <a href="javascript:void(0);">
                    <img src="img/logo.svg" class="logo__image" alt="Logo">
                </a>
            </div>
    
            <div class="main-header__content-title">
                Меню
            </div>
    
            <div class="main-header__content">
                <div class="main-header__content-wrap">
    
                    <nav class="main-navigation">
                        <ul class="main-navigation__list">
                            <li class="main-navigation__item">
                                <a href="#" class="main-navigation__link js--nav-item" data-nav-number="1">
                                    ТВ
                                </a>
                            </li>
                            <li class="main-navigation__item">
                                <a href="#" class="main-navigation__link js--nav-item"  data-nav-number="2">
                                    Фильмы
                                </a>
                            </li>
                            <!-- <li class="main-navigation__item">
                              <a href="#" class="main-navigation__link">
                                Радио
                              </a>
                            </li> -->
                        </ul>
                    </nav>
    
                    <div class="overlay"></div>
    
                    <form action="/echo" method="post" class="search">
                        <a href="#" class="main-header__content-btn">
                            Назад
                        </a>
                        <input type="search" name="search" class="search__input" placeholder="Поиск">
                        <input type="submit" class="search__btn">
                    </form>
    
                    <div class="language">
                            <span class="language__hint">
                              Язык
                            </span>
    
                        <span class="language__selected">
                              <span class="language__shrot">RU</span>
                              <span class="language__full">Руcский</span>
    
                              <svg xmlns="http://www.w3.org/2000/svg" class="language__select-icon" width="24.062" height="14.12" viewBox="0 0 12.031 7.06"><defs><style>.cls-1{fill:#fff;fill-rule:evenodd}</style></defs><path id="_" data-name="&amp;gt;" d="M904.663 4529.7l-4.9 4.94a.622.622 0 0 1-.083.12 1.058 1.058 0 0 1-1.455 0 .622.622 0 0 1-.083-.12l-4.9-4.94a1 1 0 0 1 1.414-1.41l4.3 4.33 4.3-4.33a1 1 0 0 1 1.407 1.41z" transform="translate(-892.938 -4528)"/></svg>
                            </span>
    
                        <div class="language__overlay"></div>
    
                        <ul class="language__list">
                            <li class="language__item">
                                <a href="#" class="language__link-2">
                                    Назад
                                </a>
                            </li>
                            <li class="language__item">
                                <a href="#" class="language__link  language__link--selected" style="background-image: url(img/language-icon-1.png);" data-short="RU" data-full="Русский">
                                    По-русски
                                </a>
                            </li>
                            <li class="language__item">
                                <a href="#" class="language__link" style="background-image: url(img/language-icon-2.png);" data-short="LAT" data-full="Latviski">
                                    Latviski
                                </a>
                            </li>
                            <li class="language__item">
                                <a href="#" class="language__link" style="background-image: url(img/language-icon-3.png);" data-short="ENG" data-full="English">
                                    English
                                </a>
                            </li>
                            <li class="language__item">
                                <a href="#" class="language__link" style="background-image: url(img/language-icon-4.png);" data-short="LIE" data-full="Lietuvių">
                                    Lietuvių
                                </a>
                            </li>
                            <li class="language__item">
                                <a href="#" class="language__link" style="background-image: url(img/language-icon-5.png);" data-short="EES" data-full="Eesti">
                                    Eesti
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="profile-block">
                <div class="profile-block_title">
                    <a href="./6.0.html" class="profile-block_title__tx">Профиль</a>
                    <ul class="profile-block_list">
                        <li><a href="#">Мой профиль</a></li>
                        <li><a href="#">Платежи и подписки</a></li>
                        <li><a href="#">Купленные фильмы</a></li>
                        <li><a href="#">Устройства</a></li>
                        <li><a href="#">Выйти</a></li>
                    </ul>
    
                </div>
    
            </div>
    
    
    
        </div>
    
        <div class="menu"  data-nav-number="1">
            <div class="wrapper  wrapper--flex">
                <div class="menu__slider">
                    <a href="#" class="menu__slider-title">
                        ТВ каналы
                    </a>
    
                    <div class="owl-carousel owl-theme">
    
                        <div class="item">
                            <a href="#" class="menu__slider-link">
                                <img src="img/channels-image-1.png" srcset="img/channels-image-1@x2.png 2x" class="menu__slider-image" alt="">
                            </a>
    
                            <a href="#" class="menu__slider-link">
                                <img src="img/channels-image-2.png" srcset="img/channels-image-2@x2.png 2x" class="menu__slider-image" alt="">
                            </a>
    
                            <a href="#" class="menu__slider-link">
                                <img src="img/channels-image-3.png" srcset="img/channels-image-3@x2.png 2x" class="menu__slider-image" alt="">
                            </a>
    
                            <a href="#" class="menu__slider-link">
                                <img src="img/channels-image-4.png" srcset="img/channels-image-4@x2.png 2x" class="menu__slider-image" alt="">
                            </a>
    
                            <a href="#" class="menu__slider-link">
                                <img src="img/channels-image-5.png" srcset="img/channels-image-5@x2.png 2x" class="menu__slider-image" alt="">
                            </a>
    
                            <a href="#" class="menu__slider-link">
                                <img src="img/channels-image-6.png" srcset="img/channels-image-6@x2.png 2x" class="menu__slider-image" alt="">
                            </a>
    
                            <a href="#" class="menu__slider-link">
                                <img src="img/channels-image-7.png" srcset="img/channels-image-7@x2.png 2x" class="menu__slider-image" alt="">
                            </a>
    
                            <a href="#" class="menu__slider-link">
                                <img src="img/channels-image-8.png" srcset="img/channels-image-8@x2.png 2x" class="menu__slider-image" alt="">
                            </a>
    
                            <a href="#" class="menu__slider-link">
                                <img src="img/channels-image-9.png" srcset="img/channels-image-9@x2.png 2x" class="menu__slider-image" alt="">
                            </a>
    
                            <a href="#" class="menu__slider-link">
                                <img src="img/channels-image-10.png" srcset="img/channels-image-10@x2.png 2x" class="menu__slider-image" alt="">
                            </a>
    
                            <a href="#" class="menu__slider-link">
                                <img src="img/channels-image-11.png" srcset="img/channels-image-11@x2.png 2x" class="menu__slider-image" alt="">
                            </a>
    
                            <a href="#" class="menu__slider-link">
                                <img src="img/channels-image-12.png" srcset="img/channels-image-12@x2.png 2x" class="menu__slider-image" alt="">
                            </a>
                        </div>
    
                        <div class="item">
                            <a href="#" class="menu__slider-link">
                                <img src="img/channels-image-12.png" srcset="img/channels-image-12@x2.png 2x" class="menu__slider-image" alt="">
                            </a>
    
                            <a href="#" class="menu__slider-link">
                                <img src="img/channels-image-11.png" srcset="img/channels-image-11@x2.png 2x" class="menu__slider-image" alt="">
                            </a>
    
                            <a href="#" class="menu__slider-link">
                                <img src="img/channels-image-10.png" srcset="img/channels-image-10@x2.png 2x" class="menu__slider-image" alt="">
                            </a>
    
                            <a href="#" class="menu__slider-link">
                                <img src="img/channels-image-9.png" srcset="img/channels-image-9@x2.png 2x" class="menu__slider-image" alt="">
                            </a>
    
                            <a href="#" class="menu__slider-link">
                                <img src="img/channels-image-8.png" srcset="img/channels-image-8@x2.png 2x" class="menu__slider-image" alt="">
                            </a>
    
                            <a href="#" class="menu__slider-link">
                                <img src="img/channels-image-7.png" srcset="img/channels-image-7@x2.png 2x" class="menu__slider-image" alt="">
                            </a>
    
                            <a href="#" class="menu__slider-link">
                                <img src="img/channels-image-6.png" srcset="img/channels-image-6@x2.png 2x" class="menu__slider-image" alt="">
                            </a>
    
                            <a href="#" class="menu__slider-link">
                                <img src="img/channels-image-5.png" srcset="img/channels-image-5@x2.png 2x" class="menu__slider-image" alt="">
                            </a>
    
                            <a href="#" class="menu__slider-link">
                                <img src="img/channels-image-4.png" srcset="img/channels-image-4@x2.png 2x" class="menu__slider-image" alt="">
                            </a>
    
                            <a href="#" class="menu__slider-link">
                                <img src="img/channels-image-3.png" srcset="img/channels-image-3@x2.png 2x" class="menu__slider-image" alt="">
                            </a>
    
                            <a href="#" class="menu__slider-link">
                                <img src="img/channels-image-2.png" srcset="img/channels-image-2@x2.png 2x" class="menu__slider-image" alt="">
                            </a>
    
                            <a href="#" class="menu__slider-link">
                                <img src="img/channels-image-1.png" srcset="img/channels-image-1@x2.png 2x" class="menu__slider-image" alt="">
                            </a>
                        </div>
    
                    </div>
                </div>
    
                <ul class="menu__list">
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Жанры ТВ
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Информационные
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Познавательные
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Развлекательные
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Сериалы и фильмы
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Детские
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Спорт
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Музыка
                        </a>
                    </li>
                </ul>
    
                <ul class="menu__list">
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Программа
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Сегодня
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Вторник
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Среда
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Четверг
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Пятница
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Суббота
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Воскресенье
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    
        <div class="menu"  data-nav-number="2">
            <div class="wrapper  wrapper--flex">
    
                <ul class="menu__list  menu__list--18-percent">
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Фильмы
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Комедии
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Семейные
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Вестерны
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Ужасы
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Фантастика
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Приключения
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Детективы
                        </a>
                    </li>
                </ul>
    
    
                <ul class="menu__list  menu__list--18-percent">
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Сериалы
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Комедии
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Семейные
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Мелодрамы
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Боевики
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Фантастика
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Приключения
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Триллеры
                        </a>
                    </li>
                </ul>
    
    
                <ul class="menu__list  menu__list--18-percent">
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Мультфильмы
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Детские
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Комедии
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Мультсериалы
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Зарубежные
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Приключения
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Полнометражные
                        </a>
                    </li>
                </ul>
    
    
                <ul class="menu__list  menu__list--18-percent">
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Программы и шоу
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Развлекательные
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Музыкальные
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Кулинарные
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Спортивные
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Детские
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Игры
                        </a>
                    </li>
                </ul>
    
    
                <ul class="menu__list  menu__list--18-percent">
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Партнеры
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Развлекательные
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Музыкальные
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Кулинарные
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Спортивные
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Детские
                        </a>
                    </li>
    
                    <li class="menu__list-item">
                        <a href="#" class="menu__list-link">
                            Игры
                        </a>
                    </li>
    
                </ul>
    
            </div>
        </div>
    
    </header>

<div class="promo">
        <div class="promo__slider  promo__slider--nav-bottom">
          <div class="owl-carousel owl-theme">

            <div class="item">
              <img src="img/slider-image-4.jpg" class="promo__slider-image" alt="">

              <div class="promo__slider-wrap  promo__slider-wrap--center">
                <div class="wrapper">

                  <div class="promo__slider-container">
                    <div class="promo__slider-title">
                    </div>
                    <a href="#" class="btn promo__btn  promo__btn--white">Подписка</a>
                  </div>

                </div>
              </div>
            </div>

            <div class="item">
              <img src="img/slider-image-4.jpg" class="promo__slider-image" alt="">

              <div class="promo__slider-wrap  promo__slider-wrap--center">
                <div class="wrapper">

                  <div class="promo__slider-container">
                    <div class="promo__slider-title">
                    </div>
                    <a href="#" class="btn promo__btn  promo__btn--white">Подписка</a>
                  </div>

                </div>
              </div>
            </div>

            <div class="item">
              <img src="img/slider-image-4.jpg" class="promo__slider-image" alt="">

              <div class="promo__slider-wrap  promo__slider-wrap--center">
                <div class="wrapper">

                  <div class="promo__slider-container">
                    <div class="promo__slider-title">
                    </div>
                    <a href="#" class="btn promo__btn  promo__btn--white">Подписка</a>
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>

      </div>

      <section class="js---filter">



        <div class="channels__container" style="background-color: #fff;">
          <div class="wrapper">
            <section class="channels__row  js---grid-block">
              <h2 class="title  title--x4 channels__subtitle">
                Каталог
              </h2>

              <div class="channels__item js---grid-item channels__item--short">
                <a href="#" class="channels__item-wrap">
                  <img src="img/channels-image-1--134@x2.png" class="channels__picture" alt="">
                </a>
              </div>

              <div class="channels__item js---grid-item channels__item--short">
                <a href="#" class="channels__item-wrap">
                  <img src="img/channels-image-5--134@x2.png" class="channels__picture" alt="">
                </a>
              </div>

              <div class="channels__item js---grid-item channels__item--short">
                <a href="#" class="channels__item-wrap">
                  <img src="img/channels-image-6--134@x2.png" class="channels__picture" alt="">
                </a>
              </div>

              <div class="channels__item js---grid-item channels__item--short">
                <a href="#" class="channels__item-wrap">
                  <img src="img/channels-image-11--134@x2.png" class="channels__picture" alt="">
                </a>
              </div>

             

            </section>
        </div>
           
<?php foreach ($providers as $provider) { ?>         
    <section class="content__row content">
        <div class="wrapper">
            <h2 class="title  title--x2 content__title">
                <?php print(strtoupper($provider))?>.ru
            </h2>

            <div class="content__slider content__slider--indent-mb">
                <h3 class="title  title--x4 content__subtitle">
                    Новые
                </h3>

                <div class="owl-carousel owl-theme">
<?php
$items = $db->getRows("SELECT * FROM %s WHERE `provider`='%s' ORDER BY `id` DESC LIMIT %d", $db->table('movies'), $provider, $featureCount);
foreach ($items as $item) {
    $jsonData = json_decode($item['data'], true);
    $thumb = getThumb($item['provider'], $jsonData);
    $extraData = convertData($item['provider'], $jsonData);
?>
                    <div class="item">
                        <article class="content-item">
                            <div class="content-item__wrap">
                                <img src="<?php print(!empty($thumb) ? $thumb : $noImageSrc)?>" class="content-item__image" alt="">

                                <a href="#" class="content-item__hide-info">
                                    <div class="content-item__price">
                                        Купить<br>
                                        <strong>от - €</strong>
                                    </div>

                                    <div class="content-item__rating">
                          <span>
                            <b><?php print(!empty($extraData['kp_rating']) ? $extraData['kp_rating'] : '-')?></b> КиноПоиск
                          </span>
                                        <span>
                            <b><?php print(!empty($extraData['imdb_rating']) ? $extraData['imdb_rating'] : '-')?></b> IMDb
                          </span>
                                    </div>
                                </a>
                            </div>

                            <h3 class="content-item__name">
                                <a href="#">
                                    <?php print(htmlspecialchars($item['title']))?>
                                </a>
                            </h3>

                            <div class="content-item__info">
                                <?php if (!empty($item['year'])) {?><a href="#" class="content-item__info-item">
                                    <?php print($item['year'])?>
                                </a><?php } ?>
                                <?php if (!empty($item['country']) && !is_numeric($item['country'])) {?><a href="#" class="content-item__info-item">
                                    <?php print($item['country'])?>
                                </a><?php } ?>
                                <a href="#" class="content-item__info-item  content-item__info-item--genre">
                                    <?php print($db->getVar("SELECT `title` FROM %s WHERE `provider_id`='%d' AND `provider`='%s'", $db->table('genres'), $item['genre_id'], $provider))?>
                                </a>
                            </div>
                        </article>
                    </div>
<?php } ?>
                    <div class="item">
                      <div class="content__wrap">
                        <a href="#" class="content__btn">
                          <span></span>
                          Все фильмы
                        </a>
                      </div>
                    </div>

                </div>
            </div>

            <div class="content__slider content__slider--indent-mb">
                <h3 class="title  title--x4 content__subtitle">
                    Популярные
                </h3>

                <div class="owl-carousel owl-theme">
                <?php
                $items = $db->getRows("SELECT * FROM %s WHERE `provider`='%s' ORDER BY `rating` DESC LIMIT %d", $db->table('movies'), $provider, $featureCount);
                foreach ($items as $item) {
                    $jsonData = json_decode($item['data'], true);
                    $thumb = getThumb($item['provider'], $jsonData);
                    $extraData = convertData($item['provider'], $jsonData);
                ?>
                                    <div class="item">
                                        <article class="content-item">
                                            <div class="content-item__wrap">
                                                <img src="<?php print(!empty($thumb) ? $thumb : $noImageSrc)?>" class="content-item__image" alt="">
                
                                                <a href="#" class="content-item__hide-info">
                                                    <div class="content-item__price">
                                                        Купить<br>
                                                        <strong>от - €</strong>
                                                    </div>
                
                                                    <div class="content-item__rating">
                                          <span>
                                            <b><?php print(!empty($extraData['kp_rating']) ? $extraData['kp_rating'] : '-')?></b> КиноПоиск
                                          </span>
                                                        <span>
                                            <b><?php print(!empty($extraData['imdb_rating']) ? $extraData['imdb_rating'] : '-')?></b> IMDb
                                          </span>
                                                    </div>
                                                </a>
                                            </div>
                
                                            <h3 class="content-item__name">
                                                <a href="#">
                                                    <?php print(htmlspecialchars($item['title']))?>
                                                </a>
                                            </h3>
                
                                            <div class="content-item__info">
                                                <?php if (!empty($item['year'])) {?><a href="#" class="content-item__info-item">
                                                    <?php print($item['year'])?>
                                                </a><?php } ?>
                                                <?php if (!empty($item['country']) && !is_numeric($item['country'])) {?><a href="#" class="content-item__info-item">
                                                    <?php print($item['country'])?>
                                                </a><?php } ?>
                                                <a href="#" class="content-item__info-item  content-item__info-item--genre">
                                                    <?php print($db->getVar("SELECT `title` FROM %s WHERE `provider_id`='%d' AND `provider`='%s'", $db->table('genres'), $item['genre_id'], $provider))?>
                                                </a>
                                            </div>
                                        </article>
                                    </div>
                <?php } ?>

                    <div class="item">
                      <div class="content__wrap">
                        <a href="#" class="content__btn">
                          <span></span>
                          Все фильмы
                        </a>
                      </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php } ?>

    </div>
</section>

      
<footer class="main-footer">
    <div class="wrapper">
        <div class="main-footer__app">
            <strong class="main-footer__app-text">
                Смотри что, где, когда хочешь
            </strong>

            <a href="https://play.google.com/store/apps/details?id=lv.cubemobile.tvdom&hl=en"
               class="main-footer__app-icon  main-footer__app-icon--google-play"></a>

            <a href="https://itunes.apple.com/lv/app/tv-dom/id1050989121?mt=8"
               class="main-footer__app-icon  main-footer__app-icon--app-store"></a>
        </div>

        <ul class="main-footer__list">
            <li class="main-footer__list-item">
                <a href="#" class="main-footer__link">
                    Тарифы
                </a>
            </li>
            <li class="main-footer__list-item">
                <a href="#" class="main-footer__link">
                    Устройства и приложения
                </a>
            </li>
            <li class="main-footer__list-item">
                <a href="#" class="main-footer__link change-pass hidden-element__btn2" data-number="2" id="error-link">
                    Сообщить об ошибке
                </a>
                <div class="hidden-element hide-lg sms-about-error">
                    <a href="#" class="hidden-element__btn hidden-element__btn--just-link">Сообщить об ошибке</a>

                    <div class="hidden-element__container">
                      <div class="hidden-element__close close-tab">
                        Назад
                    </div>
                    <div class="activ-title__wrap">
                        <h2 class="active-title">
                            Сообщить об ошибке
                        </h2>
                    </div>
                    <div class="hidden-element__container--wrap-form">
                        <form action="" method="">
                            <div class="profile_form__line">
                                <span>E-mail</span>
                                <input type="email" name=""  class="big-btn form-input input-block">
                            </div>
                            <div class="profile_form__line">
                                <span>Описание проблемы</span>
                                <textarea name="" class="big-btn form-input input-block"></textarea>
                            </div>
                            <div class="profile_form__line">
                                <button type="submit" name="" class="btn custom-form__button active-form__submit full-width">Отправить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </li>
            <li class="main-footer__list-item">
                <a href="#" class="main-footer__link">
                    Часто задаваемые вопросы
                </a>
            </li>
            <li class="main-footer__list-item">
                <a href="#" class="main-footer__link">
                    Контакты
                </a>
            </li>
        </ul>

        <div class="main-footer__wrap">
            <p class="main-footer__text">
                © 2015 Baltijas Mediju Alianse
            </p>
            <p class="main-footer__text">
                <a href="#">Правила пользования</a>
            </p>
        </div>

    </div>
    <div class="change-pass-popup js---popup" data-number="2">
    <form action="" method="post" name="" class="change-pass-popup_form">
        <div class="video-player__window-close  video-player__descr-full-title">
          <svg xmlns="http://www.w3.org/2000/svg" width="12.031" height="12.06" viewBox="0 0 12.031 12.06"><path d="M650.116 5316.99l3.579 3.58a1.021 1.021 0 0 1 0 1.44l-.707.7a1.008 1.008 0 0 1-1.435 0l-3.575-3.57-3.563 3.57a1.007 1.007 0 0 1-1.434 0l-.707-.7a1.021 1.021 0 0 1 0-1.44l3.563-3.57-3.591-3.59a1.021 1.021 0 0 1 0-1.44l.707-.7a1.008 1.008 0 0 1 1.435 0l3.587 3.58 3.575-3.58a1.007 1.007 0 0 1 1.434 0l.707.7a1.021 1.021 0 0 1 0 1.44z" transform="translate(-641.969 -5310.97)"></path></svg>
      </div>
        <div class="popup_form__title">
            Сообщить об ошибке
        </div>
        <div class="profile_form__line">
            <span>E-mail</span>
            <input type="email" name=""  class="big-btn form-input input-block">
        </div>
        <div class="profile_form__line">
            <span>Описание проблемы</span>
            <textarea name="" class="big-btn form-input input-block"></textarea>
        </div>
        <div class="profile_form__line">
            <button type="submit" name="" class="btn custom-form__button">Отправить</button>
        </div>
    </form>
</div>

<div class="change-pass-popup  js---popup" data-number="1">
    <form action="" method="post" name="" class="change-pass-popup_form">
        <div class="video-player__window-close  video-player__descr-full-title">
          <svg xmlns="http://www.w3.org/2000/svg" width="12.031" height="12.06" viewBox="0 0 12.031 12.06"><path d="M650.116 5316.99l3.579 3.58a1.021 1.021 0 0 1 0 1.44l-.707.7a1.008 1.008 0 0 1-1.435 0l-3.575-3.57-3.563 3.57a1.007 1.007 0 0 1-1.434 0l-.707-.7a1.021 1.021 0 0 1 0-1.44l3.563-3.57-3.591-3.59a1.021 1.021 0 0 1 0-1.44l.707-.7a1.008 1.008 0 0 1 1.435 0l3.587 3.58 3.575-3.58a1.007 1.007 0 0 1 1.434 0l.707.7a1.021 1.021 0 0 1 0 1.44z" transform="translate(-641.969 -5310.97)"></path></svg>
      </div>
        <div class="popup_form__title">
            Изменить пароль
        </div>
        <div class="profile_form__line">
            <span>Старый пароль</span>
            <input type="text" name=""  class="big-btn form-input input-block">
        </div>
        <div class="profile_form__line">
            <span>Новый пароль</span>
            <input type="password" name="" class="big-btn form-input input-block">
        </div>
        <div class="profile_form__line">
            <span>Новый пароль еще раз</span>
            <input type="password" name="" class="big-btn form-input input-block">
        </div>
        <div class="profile_form__line">
            <button type="submit" name="" class="btn custom-form__button">Изменить</button>
        </div>
    </form>
</div>

<div class="overlay-popup"></div>
</footer>
<div class="noty-conteiner"></div>
</div>

<div class="big-overlay"></div>
<div class="preloader  preloader--on-screen">
  <div class="preloader__image"></div>
  <p class="preloader__text">
    Загрузка
  </p>
</div>

<script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous">
</script>
<script src="js/vendor/owl.carousel.min.js"></script>
<script src="js/vendor/jquery.mCustomScrollbar.min.js"></script>
<script src="js/vendor/flowplayer.min.js"></script>
<script src="js/vendor/flowplayer.quality-selector.min.js"></script>
<script src="js/vendor/jquery.formstyler.js"></script>
<script src="js/vendor/jquery.dotdotdot.js"></script>
<script src="js/vendor/jquery.noty.packaged.min.js"></script>
<script src="js/vendor/develex/noty.js"></script>
<script src="js/vendor/develex/heightEqualizer.js"></script>
<script src="js/vendor/jquery.sticky.js"></script>
<script src="js/script.js"></script>

</body>

</html>