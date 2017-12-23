<?php

// init
require_once '../vendor/db.class.php';
require_once '../config.php';

$db = new db($database['config'], '_read');
if (!empty($_GET['provider']) && in_array($_GET['provider'], array_keys($data)))
    $provider = $_GET['provider'];
else
    $provider = 'ivi';

$genres     = $db->getRows("SELECT `title`,`provider_id` FROM %s WHERE `provider`='%s'", $db->table('genres'), $provider);
$years      = $db->getRows("SELECT DISTINCT `year` FROM %s WHERE `provider`='%s'", $db->table('movies'), $provider);
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

<section class="video-player  video-player-v2 video-player-v3  js---player new-films">
    <div class="wrapper  wrapper--flex">


        <div class="fp-descr">
            Наше время на Земле подошло к концу, команда исследователей берет на себя самую важную&nbsp;миссию в истории
            человечества; путешествуя за пределами нашей галактики, чтобы&nbsp;узнать есть ли у человечества будущее
            среди звезд.
        </div>

        <div class="fp-registr">
            <p>
                Регистрируйтесь и смотрите без ограничений
            </p>
            <a href="#" class="btn fp-registr__btn">Регистрация</a>
        </div>

        <span class="fp-demo">
              Демонстрация
            </span>

        <div class="fp-overlay"></div>

        <div class="preloader">
            <div class="preloader__image"></div>
            <p class="preloader__text">
                Загрузка
            </p>
        </div>


        <div class="video-player__wrapper  new-styles__container">
            <div class="new-styles__wrap">

                <div class="video-player__wrap  new-styles__wrapper">
                    <img src="img/channels-image-1-small.png" srcset="img/channels-image-1-small@x2.png 2x"
                         class="video-player__logo" alt="">
                    <div>
                        <h1 class="title title--x2 video-player__title">
                            IvI.ru
                        </h1>

                        <div class="video-player__info">
                            <a href="#" class="video-player__info-item  video-player__info-item--genre">
                                Сериалы и фильмы
                            </a>
                        </div>
                    </div>
                </div>
                <div class="video-player__wrap  new-styles__wrap-2">
                    <div class="video-player__descr">
                        <p>
                            Первый канал — признанный лидер российского телеэфира,&nbsp;самый популярный&nbsp;и&nbsp;любимый.
                            Телеканал ОРТ вышел 1 апреля 1995 года на&nbsp;частоте «1-го&nbsp;канала Останкино». РГТРК
                            «Останкино» занимала&nbsp;первый канал с декабря 1991 года.
                            К&nbsp;началу 1995 года РГТРК «Останкино»&nbsp;начала терять&nbsp;свои позиции.
                            Социологические
                            опросы, проводившиеся&nbsp;в тот момент в Москве, показывали, что&nbsp;телеканал значительно
                            уступал в дневное время каналу&nbsp;2x2, в вечернее время — НТВ. В связи с этим было&nbsp;принято
                            решение закрыть телеканал. ОРТ создавалось&nbsp;для того, чтобы восстановить интерес
                            к&nbsp;Первому каналу российского телевидения.
                        </p>
                        <p>
                            С 1 июня 2011 года канал перешёл на вещание
                            в&nbsp;формате 16:9[7]. С 24 декабря 2012 года «Первый канал» также вещает в формате высокой
                            чёткости HD и многоканальным звуком 5.1. «Первый канал&nbsp;HD» полностью дублирует сетку
                            вещания основного канала[8].
                        </p>
                    </div>
                </div>

                <span class="video-player__more  js---dots-for-descr" style="display:none;">
              <i></i>
              <i></i>
              <i></i>
            </span>
            </div>


            <div class="new-films-header-right  new-styles__wrap-3">

                <div class="video-player__share">
                    <span class="video-player__share-text">Поделиться:</span>

                    <a href="#" class="video-player__share-item  video-player__share-item--fb">
                <span class="video-player__share-wrap">
                  <svg xmlns="http://www.w3.org/2000/svg" class="video-player__share-icon" viewBox="0 0 15.062 28.97"><path d="M9.769 28.98V15.76h4.437l.664-5.15h-5.1V7.32c0-1.49.414-2.51 2.553-2.51h2.728V.21A34.056 34.056 0 0 0 11.076 0C7.143 0 4.451 2.4 4.451 6.81v3.8H.002v5.15H4.45v13.22h5.319z"/></svg>
                </span>
                    </a>

                    <a href="#" class="video-player__share-item  video-player__share-item--draug">
                <span class="video-player__share-wrap">
                  <svg xmlns="http://www.w3.org/2000/svg" class="video-player__share-icon" viewBox="0 0 26.469 21.31"><path d="M18.884 5.91c4.741.06 7.5 2.97 4.366 6.94a15.8 15.8 0 0 1-7.13 4.81c-.153.06-.313.11-.466.16-.305.1-.61.19-.909.29-.7.19-1.389.37-2.053.5q-1.065.21-2.062.33c-.473.04-.931.07-1.374.08-3.023.08-5.3-.75-6.039-2.52-.893-2.11.917-5.06 4.535-7.3C5.073 10.28.209 12.82.003 16.45v.46a4.821 4.821 0 0 0 .214 1.13c.771 2.45 4.413 3.59 9.039 3.18.45-.04.909-.09 1.374-.16.672-.1 1.359-.24 2.062-.4.672-.16 1.359-.35 2.053-.56l.458-.15q.47-.15.917-.33c4.016-1.45 6.993-3.39 8.733-5.62a7 7 0 0 0 1.6-3.51v-.8c-.271-2.65-3.363-4.21-7.569-3.78zm-3.077-1.32a1.547 1.547 0 0 0 .313-.03 1.674 1.674 0 0 0 1.03-1.74c.031-.9-.29-1.65-1.03-1.75a.651.651 0 0 0-.2-.02 1.227 1.227 0 0 0-1.176.87 2.77 2.77 0 0 0-.167.9 2.465 2.465 0 0 0 .167 1.06 1.1 1.1 0 0 0 1.063.71zm-.016.3a3.467 3.467 0 0 0-.771.08l.061.09.115.21.091.21.077.22.053.23.039.23.022.24.008.22v.25l-.016.24-.014.23-.031.24-.031.23-.045.24-.046.24-.046.23-.054.23-.045.22-.054.21-.053.21-.054.2-.045.19-.046.18-.023.12-.031.12-.031.14-.022.15-.03.15-.024.13v.03l-.03.17-.03.17-.024.17-.03.18-.023.19-.03.18-.024.19-.03.19-.023.19-.022.19-.024.19v.01l.107 1.28a1.386 1.386 0 0 0 .183.67.867.867 0 0 0 .717.33 1.078 1.078 0 0 0 .658-.24 1.282 1.282 0 0 0 .305-.76c.122-.79.473-3.37.779-4.48.435-1.59 1.481-4.49-1.084-4.71a1.774 1.774 0 0 0-.329-.02zm-3.114-.82h.015c.992 0 1.458-.91 1.458-2.03S13.684.01 12.692 0h-.015c-1.008 0-1.474.92-1.474 2.04s.466 2.03 1.474 2.03zM10.63 8.78c.092.39.184.75.26 1.07.313 1.28.619 4.24.733 5.13a1.069 1.069 0 1 0 2.13 0c.107-.89.419-3.85.726-5.13.075-.32.175-.68.266-1.07.283-1.16.512-2.54 0-3.42a2.722 2.722 0 0 0-4.115 0c-.511.88-.282 2.26 0 3.42zM9.256 4.56a1.547 1.547 0 0 0 .313.03 1.1 1.1 0 0 0 1.061-.71 2.715 2.715 0 0 0 .168-1.06 2.969 2.969 0 0 0-.168-.9 1.233 1.233 0 0 0-1.175-.87.648.648 0 0 0-.2.02c-.741.1-1.061.85-1.03 1.75a1.666 1.666 0 0 0 1.031 1.74zm-.3 9.54a1.233 1.233 0 0 0 .3.76 1.075 1.075 0 0 0 .657.24.875.875 0 0 0 .717-.33 1.575 1.575 0 0 0 .184-.67l.107-1.28v-.01l-.023-.19-.023-.19-.031-.19-.023-.19-.023-.19-.03-.18-.023-.19-.031-.18-.031-.17-.022-.17-.031-.17v-.02l-.022-.14-.031-.15-.031-.15-.022-.14-.031-.12-.031-.12-.038-.18-.053-.19-.046-.2-.054-.21-.052-.21-.054-.22-.046-.23-.054-.23-.045-.24-.039-.24-.03-.23-.031-.24-.023-.23-.007-.25v-.24l.007-.22.023-.24.039-.23.053-.23.069-.22.1-.21.115-.21.06-.09a3.511 3.511 0 0 0-.77-.08 1.774 1.774 0 0 0-.329.02c-2.565.22-1.519 3.12-1.084 4.71.305 1.11.656 3.69.778 4.48z"/></svg>
                </span>
                    </a>

                    <a href="#" class="video-player__share-item  video-player__share-item--vk">
                <span class="video-player__share-wrap">
                  <svg xmlns="http://www.w3.org/2000/svg" class="video-player__share-icon" viewBox="0 0 23.531 13.4"><path d="M23.394 12.11a1.646 1.646 0 0 0-.079-.15 12.335 12.335 0 0 0-2.341-2.71l-.024-.02-.012-.01-.013-.02h-.013c-.523-.5-.854-.83-.992-1a.94.94 0 0 1-.172-.99 9.075 9.075 0 0 1 1.1-1.61c.335-.43.6-.78.8-1.04q2.121-2.82 1.838-3.6l-.073-.13a.73.73 0 0 0-.379-.2 1.971 1.971 0 0 0-.785-.03L18.72.63a.5.5 0 0 0-.245 0c-.106.03-.159.04-.159.04l-.062.03-.049.04a.4.4 0 0 0-.135.13.858.858 0 0 0-.122.21 19.994 19.994 0 0 1-1.311 2.76c-.3.5-.58.94-.833 1.31a5.552 5.552 0 0 1-.637.82 4.583 4.583 0 0 1-.466.43.451.451 0 0 1-.319.13 1.318 1.318 0 0 1-.208-.05.772.772 0 0 1-.276-.3 1.292 1.292 0 0 1-.141-.47c-.024-.2-.039-.36-.043-.5s0-.34.007-.59.012-.42.012-.51q0-.465.018-1.02l.031-.86c.008-.21.012-.44.012-.67a2.766 2.766 0 0 0-.043-.56 1.837 1.837 0 0 0-.128-.39.659.659 0 0 0-.251-.3 1.388 1.388 0 0 0-.411-.16 8.124 8.124 0 0 0-1.654-.16 8.042 8.042 0 0 0-2.929.29 1.756 1.756 0 0 0-.465.37c-.148.18-.168.28-.062.29a1.524 1.524 0 0 1 1.042.53l.073.15a2.2 2.2 0 0 1 .172.56 5.709 5.709 0 0 1 .11.9 9.473 9.473 0 0 1 0 1.53c-.041.42-.079.75-.116.99a2 2 0 0 1-.166.58q-.109.21-.147.27a.275.275 0 0 1-.061.06.932.932 0 0 1-.331.06.813.813 0 0 1-.417-.17 3.194 3.194 0 0 1-.508-.47 6.263 6.263 0 0 1-.595-.84c-.22-.36-.449-.79-.686-1.28l-.2-.35c-.122-.23-.29-.57-.5-1s-.4-.86-.564-1.27A.806.806 0 0 0 4.663.8L4.602.76a.713.713 0 0 0-.2-.1.928.928 0 0 0-.282-.08L.763.6a.871.871 0 0 0-.7.23L.014.91a.373.373 0 0 0-.037.19.972.972 0 0 0 .074.33c.49 1.16 1.023 2.27 1.6 3.34s1.076 1.93 1.5 2.58.858 1.27 1.3 1.85.733.95.876 1.12.255.28.337.37l.306.29a6.614 6.614 0 0 0 .864.7 12.374 12.374 0 0 0 1.262.81 6.372 6.372 0 0 0 1.612.65 5.3 5.3 0 0 0 1.789.2h1.415a.935.935 0 0 0 .65-.27l.048-.06a.782.782 0 0 0 .092-.22 1.309 1.309 0 0 0 .043-.34 4.066 4.066 0 0 1 .079-.95 2.683 2.683 0 0 1 .209-.64 1.707 1.707 0 0 1 .263-.36 1.015 1.015 0 0 1 .209-.18c.041-.02.073-.03.1-.04a.8.8 0 0 1 .692.19 4.042 4.042 0 0 1 .748.71c.233.28.512.6.839.95a6.453 6.453 0 0 0 .858.79l.245.14a2.8 2.8 0 0 0 .637.27 1.4 1.4 0 0 0 .686.06l3.137-.04a1.437 1.437 0 0 0 .723-.16.578.578 0 0 0 .306-.34.92.92 0 0 0 .007-.41 1.459 1.459 0 0 0-.089-.33z"/></svg>
                </span>
                    </a>

                    <a href="#" class="video-player__share-item  video-player__share-item--odnoklass">
                <span class="video-player__share-wrap">
                  <svg xmlns="http://www.w3.org/2000/svg" class="video-player__share-icon" viewBox="0 0 15.719 23.62"><path d="M463.015 6174.6s-.775.07-.548.54 3.621 3.46 3.836 4.33.571 1.11-.548 2.17-2 .81-3.836-1.08-2.741-2.71-2.741-2.71-.9.81-2.74 2.71-2.718 2.14-3.837 1.08-.763-1.3-.548-2.17 3.61-3.87 3.837-4.33-.548-.54-.548-.54c-5.24-.59-3.837-3.8-3.837-3.8a2.254 2.254 0 0 1 3.288-.54 9.442 9.442 0 0 0 8.77 0 2.254 2.254 0 0 1 3.288.54s1.403 3.21-3.836 3.8zm-3.827-5.19a5.375 5.375 0 1 1 5.375-5.38 5.378 5.378 0 0 1-5.375 5.38zm0-7.6a2.235 2.235 0 1 0 2.25 2.24 2.243 2.243 0 0 0-2.25-2.24z" transform="translate(-451.312 -6158.66)"/></svg>
                </span>
                    </a>

                    <a href="#" class="video-player__share-item  video-player__share-item--mail">
                <span class="video-player__share-wrap">
                  <svg xmlns="http://www.w3.org/2000/svg" class="video-player__share-icon" viewBox="0 0 21.875 21.03"><path d="M10.564 4.38a6.265 6.265 0 0 1 4.4 1.9.9.9 0 0 1 .893-.97l.131-.01a.994.994 0 0 1 .979 1.02v8.64a.56.56 0 0 0 .939.49c1.388-1.43 3.047-7.33-.862-10.75a9.363 9.363 0 0 0-11.132-.87 8.4 8.4 0 0 0-2.814 10.09c1.872 4.32 7.231 5.61 10.416 4.32 1.613-.65 2.358 1.53.683 2.24-2.531 1.08-9.576.97-12.866-4.73A10.43 10.43 0 0 1 5.123 1.62a11.508 11.508 0 0 1 14.044 1.81c3.748 3.91 3.529 11.24-.127 14.1a2.556 2.556 0 0 1-4.1-1.86l-.017-.61a6.173 6.173 0 0 1-4.361 1.81 6.245 6.245 0 0 1 0-12.49zm4.158 6.04a3.94 3.94 0 0 0-4.089-3.88h-.081c-2.5 0-3.891 1.97-3.891 4.21a3.8 3.8 0 0 0 3.881 4.08 4.072 4.072 0 0 0 4.186-3.92z"/></svg>
                </span>
                    </a>

                    <a href="#" class="video-player__share-item  video-player__share-item--tw">
                <span class="video-player__share-wrap">
                  <svg xmlns="http://www.w3.org/2000/svg" class="video-player__share-icon" viewBox="0 0 23.032 18.84"><path d="M544.882 6165.15l2.316-.47a18.918 18.918 0 0 1-2.316 2.3c0 .01-.008 0-.011 0a7.2 7.2 0 0 0 .011 1.38c-4.425 18.96-20.711 10.58-20.711 10.58 5.925.16 6.454-2.3 6.454-2.3-3.471-.52-4.14-2.76-4.14-2.76a1.445 1.445 0 0 0 1.84-.46 4.154 4.154 0 0 1-3.22-4.6 4.416 4.416 0 0 0 2.258.88c-.424-.5-3.919-4.69-1.8-6.85 0 0 2.553 4.59 9.314 5.03l.452-.12a4.82 4.82 0 0 1 4.722-5.83c3.215 0 3.909 1.84 3.909 1.84l2.3-1.38s-.25 2.3-1.378 2.76z" transform="translate(-524.156 -6161.94)"/></svg>
                </span>
                    </a>

                    <a href="#" class="video-player__share-item  video-player__share-item--gplus">
                <span class="video-player__share-wrap">
                  <svg xmlns="http://www.w3.org/2000/svg" class="video-player__share-icon" viewBox="0 0 25.781 16.41"><path d="M22.943 6.74V3.9h-2.031v2.84h-2.919v2.03h2.919v2.93h2.027V8.77h2.838V6.74h-2.838zM8.185 6.58v3.25h4.427c-.694 2.1-1.773 3.25-4.428 3.25a4.876 4.876 0 0 1 0-9.75 4.625 4.625 0 0 1 3.18 1.2c.674-.68.617-.77 2.331-2.39a8.2 8.2 0 1 0-5.511 14.27c6.761 0 8.413-5.9 7.865-9.83H8.184z"/></svg>
                </span>
                    </a>

                    <a href="#" class="video-player__share-item  video-player__share-item--wtsapp">
                <span class="video-player__share-wrap">
                  <svg xmlns="http://www.w3.org/2000/svg" class="video-player__share-icon" viewBox="0 0 22.218 22.21"><path d="M11.107 22.2a11.016 11.016 0 0 1-6.1-1.83L.74 21.73l1.383-4.12A11.089 11.089 0 0 1 11.106.01h.006a11.1 11.1 0 1 1-.005 22.19zm6.647-8.06a1.5 1.5 0 0 0-.619-.38c-.326-.16-1.912-.95-2.212-1.05a.622.622 0 0 0-.795.24 13.589 13.589 0 0 1-.868 1.15.683.683 0 0 1-.783.12 7.983 7.983 0 0 1-2.6-1.6 9.978 9.978 0 0 1-1.8-2.24.524.524 0 0 1 .13-.69c.164-.2.32-.35.483-.54a1.806 1.806 0 0 0 .359-.5.657.657 0 0 0-.046-.6c-.078-.17-.73-1.76-1-2.41a.639.639 0 0 0-.7-.54 4.056 4.056 0 0 0-.372-.02 1.629 1.629 0 0 0-1.135.4 3.54 3.54 0 0 0-1.135 2.7 6.389 6.389 0 0 0 1.317 3.35 13.857 13.857 0 0 0 5.526 4.88c2.55 1.06 3.307.96 3.888.84a3.142 3.142 0 0 0 2.178-1.57 2.744 2.744 0 0 0 .184-1.54z"/></svg>
                </span>
                    </a>

                    <span class="video-player__more  js---dots-for-share">
                <i></i>
                <i></i>
                <i></i>
              </span>
                </div>

                <div class="video-player__subscription">

                    <p class="video-player__price">
                        Подписка «Ivi.ru»

                    </p>

                    <a href="#" class="btn video-player__btn">
                        Оформить подписку
                    </a>
                </div>
                </path>


                <div class="video-player__window  video-player__descr-full">
                    <div class="video-player__window-title">
                        Описание
                    </div>

                    <div class="video-player__window-back">Назад</div>

                    <div class="video-player__window-close  video-player__descr-full-title">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12.031" height="12.06"
                             viewBox="0 0 12.031 12.06">
                            <path d="M650.116 5316.99l3.579 3.58a1.021 1.021 0 0 1 0 1.44l-.707.7a1.008 1.008 0 0 1-1.435 0l-3.575-3.57-3.563 3.57a1.007 1.007 0 0 1-1.434 0l-.707-.7a1.021 1.021 0 0 1 0-1.44l3.563-3.57-3.591-3.59a1.021 1.021 0 0 1 0-1.44l.707-.7a1.008 1.008 0 0 1 1.435 0l3.587 3.58 3.575-3.58a1.007 1.007 0 0 1 1.434 0l.707.7a1.021 1.021 0 0 1 0 1.44z"
                                  transform="translate(-641.969 -5310.97)"></path>
                        </svg>
                    </div>

                    <div class="video-player__descr-full-text  js---scrollbar">
                        <div class="video-player__info">
                            <a href="#" class="video-player__info-item  video-player__info-item--genre">
                                <svg xmlns="http://www.w3.org/2000/svg" class="video-player__info-icon" width="20"
                                     height="18" viewBox="0 0 20 18">
                                    <path d="M892 108V96l3.978 3.785h3.707l-3.985-3.721h3.338l3.985 3.721h3.706l-3.984-3.721h3.14l3.985 3.721H912V108h-20zm20-11.936v2.248l-2.408-2.248H912zm-.521-5.429l.421 2.695-2.886.39zm-9.439 4.028l3.372-4.216 3.3-.447-3.372 4.216zm-6.777.917l3.372-4.216 3.108-.421-3.372 4.216zm-2.833-.548l-.038-.241-.392-2.529 2.967-.4-1.667 2.08z"
                                          transform="translate(-892 -90)"></path>
                                </svg>
                                Сериалы и фильмы
                            </a>
                            <a href="#" class="video-player__info-item">HD</a>
                            <a href="#" class="video-player__info-item">ПАРТНЕР</a>
                            <a href="#" class="video-player__info-item">ПАРТНЕР</a>
                            <a href="#" class="video-player__info-item">ПАРТНЕР</a>
                            <a href="#" class="video-player__info-item">ПАРТНЕР</a>
                            <a href="#" class="video-player__info-item">ПАРТНЕР</a>
                            <a href="#" class="video-player__info-item">ПАРТНЕР</a>
                        </div>

                        <p>
                            Первый канал — признанный лидер российского телеэфира,&nbsp;самый популярный и любимый.
                        </p>
                        <p>
                            Телеканал ОРТ вышел 1 апреля 1995 года на частоте «1-го&nbsp;канала Останкино». РГТРК
                            «Останкино» занимала&nbsp;первый канал с декабря 1991 года.
                            К&nbsp;началу 1995 года РГТРК «Останкино» начала терять&nbsp;свои позиции. Социологические
                            опросы, проводившиеся&nbsp;в тот момент в Москве, показывали, что&nbsp;телеканал значительно
                            уступал в дневное время каналу&nbsp;2x2, в вечернее время — НТВ. В связи с этим было&nbsp;принято
                            решение закрыть телеканал. ОРТ создавалось&nbsp;для того, чтобы восстановить интерес
                            к&nbsp;Первому каналу российского телевидения.
                        </p>
                        <p>
                            С 1 июня 2011 года канал перешёл на вещание
                            в&nbsp;формате 16:9[7]. С 24 декабря 2012 года «Первый канал» также вещает в формате высокой
                            чёткости HD и многоканальным звуком 5.1. «Первый канал&nbsp;HD» полностью дублирует сетку
                            вещания основного канала[8].
                        </p>
                    </div>
                </div>


            </div>
            <div class="video-player__window  video-player__share-info">
                <div class="video-player__window-back">Назад</div>

                <div class="video-player__window-title  video-player__share-title">
                    <div class="video-player__window-close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12.031" height="12.06" viewBox="0 0 12.031 12.06"><path d="M650.116 5316.99l3.579 3.58a1.021 1.021 0 0 1 0 1.44l-.707.7a1.008 1.008 0 0 1-1.435 0l-3.575-3.57-3.563 3.57a1.007 1.007 0 0 1-1.434 0l-.707-.7a1.021 1.021 0 0 1 0-1.44l3.563-3.57-3.591-3.59a1.021 1.021 0 0 1 0-1.44l.707-.7a1.008 1.008 0 0 1 1.435 0l3.587 3.58 3.575-3.58a1.007 1.007 0 0 1 1.434 0l.707.7a1.021 1.021 0 0 1 0 1.44z" transform="translate(-641.969 -5310.97)"/></svg>
                    </div>
                    Поделиться
                </div>

                <div class="video-player__share-link">
                    <span class="video-player__share-link-icon"></span>
                    cli.re/WeO3p1
                </div>

                <ul class="video-player__share-list  js---scrollbar">
                    <li class="video-player__share-list-item">
                        <a href="#" class="video-player__share-item  video-player__share-item--fb">
                    <span class="video-player__share-wrap">
                      <svg xmlns="http://www.w3.org/2000/svg" class="video-player__share-icon" viewBox="0 0 15.062 28.97"><path d="M9.769 28.98V15.76h4.437l.664-5.15h-5.1V7.32c0-1.49.414-2.51 2.553-2.51h2.728V.21A34.056 34.056 0 0 0 11.076 0C7.143 0 4.451 2.4 4.451 6.81v3.8H.002v5.15H4.45v13.22h5.319z"></path></svg>
                    </span>

                            Facebook
                        </a>
                    </li>

                    <li class="video-player__share-list-item">
                        <a href="#" class="video-player__share-item  video-player__share-item--draug">
                    <span class="video-player__share-wrap">
                      <svg xmlns="http://www.w3.org/2000/svg" class="video-player__share-icon" viewBox="0 0 26.469 21.31"><path d="M18.884 5.91c4.741.06 7.5 2.97 4.366 6.94a15.8 15.8 0 0 1-7.13 4.81c-.153.06-.313.11-.466.16-.305.1-.61.19-.909.29-.7.19-1.389.37-2.053.5q-1.065.21-2.062.33c-.473.04-.931.07-1.374.08-3.023.08-5.3-.75-6.039-2.52-.893-2.11.917-5.06 4.535-7.3C5.073 10.28.209 12.82.003 16.45v.46a4.821 4.821 0 0 0 .214 1.13c.771 2.45 4.413 3.59 9.039 3.18.45-.04.909-.09 1.374-.16.672-.1 1.359-.24 2.062-.4.672-.16 1.359-.35 2.053-.56l.458-.15q.47-.15.917-.33c4.016-1.45 6.993-3.39 8.733-5.62a7 7 0 0 0 1.6-3.51v-.8c-.271-2.65-3.363-4.21-7.569-3.78zm-3.077-1.32a1.547 1.547 0 0 0 .313-.03 1.674 1.674 0 0 0 1.03-1.74c.031-.9-.29-1.65-1.03-1.75a.651.651 0 0 0-.2-.02 1.227 1.227 0 0 0-1.176.87 2.77 2.77 0 0 0-.167.9 2.465 2.465 0 0 0 .167 1.06 1.1 1.1 0 0 0 1.063.71zm-.016.3a3.467 3.467 0 0 0-.771.08l.061.09.115.21.091.21.077.22.053.23.039.23.022.24.008.22v.25l-.016.24-.014.23-.031.24-.031.23-.045.24-.046.24-.046.23-.054.23-.045.22-.054.21-.053.21-.054.2-.045.19-.046.18-.023.12-.031.12-.031.14-.022.15-.03.15-.024.13v.03l-.03.17-.03.17-.024.17-.03.18-.023.19-.03.18-.024.19-.03.19-.023.19-.022.19-.024.19v.01l.107 1.28a1.386 1.386 0 0 0 .183.67.867.867 0 0 0 .717.33 1.078 1.078 0 0 0 .658-.24 1.282 1.282 0 0 0 .305-.76c.122-.79.473-3.37.779-4.48.435-1.59 1.481-4.49-1.084-4.71a1.774 1.774 0 0 0-.329-.02zm-3.114-.82h.015c.992 0 1.458-.91 1.458-2.03S13.684.01 12.692 0h-.015c-1.008 0-1.474.92-1.474 2.04s.466 2.03 1.474 2.03zM10.63 8.78c.092.39.184.75.26 1.07.313 1.28.619 4.24.733 5.13a1.069 1.069 0 1 0 2.13 0c.107-.89.419-3.85.726-5.13.075-.32.175-.68.266-1.07.283-1.16.512-2.54 0-3.42a2.722 2.722 0 0 0-4.115 0c-.511.88-.282 2.26 0 3.42zM9.256 4.56a1.547 1.547 0 0 0 .313.03 1.1 1.1 0 0 0 1.061-.71 2.715 2.715 0 0 0 .168-1.06 2.969 2.969 0 0 0-.168-.9 1.233 1.233 0 0 0-1.175-.87.648.648 0 0 0-.2.02c-.741.1-1.061.85-1.03 1.75a1.666 1.666 0 0 0 1.031 1.74zm-.3 9.54a1.233 1.233 0 0 0 .3.76 1.075 1.075 0 0 0 .657.24.875.875 0 0 0 .717-.33 1.575 1.575 0 0 0 .184-.67l.107-1.28v-.01l-.023-.19-.023-.19-.031-.19-.023-.19-.023-.19-.03-.18-.023-.19-.031-.18-.031-.17-.022-.17-.031-.17v-.02l-.022-.14-.031-.15-.031-.15-.022-.14-.031-.12-.031-.12-.038-.18-.053-.19-.046-.2-.054-.21-.052-.21-.054-.22-.046-.23-.054-.23-.045-.24-.039-.24-.03-.23-.031-.24-.023-.23-.007-.25v-.24l.007-.22.023-.24.039-.23.053-.23.069-.22.1-.21.115-.21.06-.09a3.511 3.511 0 0 0-.77-.08 1.774 1.774 0 0 0-.329.02c-2.565.22-1.519 3.12-1.084 4.71.305 1.11.656 3.69.778 4.48z"></path></svg>
                    </span>

                            Draugiem
                        </a>
                    </li>

                    <li class="video-player__share-list-item">
                        <a href="#" class="video-player__share-item  video-player__share-item--vk">
                    <span class="video-player__share-wrap">
                      <svg xmlns="http://www.w3.org/2000/svg" class="video-player__share-icon" viewBox="0 0 23.531 13.4"><path d="M23.394 12.11a1.646 1.646 0 0 0-.079-.15 12.335 12.335 0 0 0-2.341-2.71l-.024-.02-.012-.01-.013-.02h-.013c-.523-.5-.854-.83-.992-1a.94.94 0 0 1-.172-.99 9.075 9.075 0 0 1 1.1-1.61c.335-.43.6-.78.8-1.04q2.121-2.82 1.838-3.6l-.073-.13a.73.73 0 0 0-.379-.2 1.971 1.971 0 0 0-.785-.03L18.72.63a.5.5 0 0 0-.245 0c-.106.03-.159.04-.159.04l-.062.03-.049.04a.4.4 0 0 0-.135.13.858.858 0 0 0-.122.21 19.994 19.994 0 0 1-1.311 2.76c-.3.5-.58.94-.833 1.31a5.552 5.552 0 0 1-.637.82 4.583 4.583 0 0 1-.466.43.451.451 0 0 1-.319.13 1.318 1.318 0 0 1-.208-.05.772.772 0 0 1-.276-.3 1.292 1.292 0 0 1-.141-.47c-.024-.2-.039-.36-.043-.5s0-.34.007-.59.012-.42.012-.51q0-.465.018-1.02l.031-.86c.008-.21.012-.44.012-.67a2.766 2.766 0 0 0-.043-.56 1.837 1.837 0 0 0-.128-.39.659.659 0 0 0-.251-.3 1.388 1.388 0 0 0-.411-.16 8.124 8.124 0 0 0-1.654-.16 8.042 8.042 0 0 0-2.929.29 1.756 1.756 0 0 0-.465.37c-.148.18-.168.28-.062.29a1.524 1.524 0 0 1 1.042.53l.073.15a2.2 2.2 0 0 1 .172.56 5.709 5.709 0 0 1 .11.9 9.473 9.473 0 0 1 0 1.53c-.041.42-.079.75-.116.99a2 2 0 0 1-.166.58q-.109.21-.147.27a.275.275 0 0 1-.061.06.932.932 0 0 1-.331.06.813.813 0 0 1-.417-.17 3.194 3.194 0 0 1-.508-.47 6.263 6.263 0 0 1-.595-.84c-.22-.36-.449-.79-.686-1.28l-.2-.35c-.122-.23-.29-.57-.5-1s-.4-.86-.564-1.27A.806.806 0 0 0 4.663.8L4.602.76a.713.713 0 0 0-.2-.1.928.928 0 0 0-.282-.08L.763.6a.871.871 0 0 0-.7.23L.014.91a.373.373 0 0 0-.037.19.972.972 0 0 0 .074.33c.49 1.16 1.023 2.27 1.6 3.34s1.076 1.93 1.5 2.58.858 1.27 1.3 1.85.733.95.876 1.12.255.28.337.37l.306.29a6.614 6.614 0 0 0 .864.7 12.374 12.374 0 0 0 1.262.81 6.372 6.372 0 0 0 1.612.65 5.3 5.3 0 0 0 1.789.2h1.415a.935.935 0 0 0 .65-.27l.048-.06a.782.782 0 0 0 .092-.22 1.309 1.309 0 0 0 .043-.34 4.066 4.066 0 0 1 .079-.95 2.683 2.683 0 0 1 .209-.64 1.707 1.707 0 0 1 .263-.36 1.015 1.015 0 0 1 .209-.18c.041-.02.073-.03.1-.04a.8.8 0 0 1 .692.19 4.042 4.042 0 0 1 .748.71c.233.28.512.6.839.95a6.453 6.453 0 0 0 .858.79l.245.14a2.8 2.8 0 0 0 .637.27 1.4 1.4 0 0 0 .686.06l3.137-.04a1.437 1.437 0 0 0 .723-.16.578.578 0 0 0 .306-.34.92.92 0 0 0 .007-.41 1.459 1.459 0 0 0-.089-.33z"></path></svg>
                    </span>

                            Vkontakte
                        </a>
                    </li>

                    <li class="video-player__share-list-item">
                        <a href="#" class="video-player__share-item  video-player__share-item--odnoklass">
                    <span class="video-player__share-wrap">
                      <svg xmlns="http://www.w3.org/2000/svg" class="video-player__share-icon" viewBox="0 0 15.719 23.62"><path d="M463.015 6174.6s-.775.07-.548.54 3.621 3.46 3.836 4.33.571 1.11-.548 2.17-2 .81-3.836-1.08-2.741-2.71-2.741-2.71-.9.81-2.74 2.71-2.718 2.14-3.837 1.08-.763-1.3-.548-2.17 3.61-3.87 3.837-4.33-.548-.54-.548-.54c-5.24-.59-3.837-3.8-3.837-3.8a2.254 2.254 0 0 1 3.288-.54 9.442 9.442 0 0 0 8.77 0 2.254 2.254 0 0 1 3.288.54s1.403 3.21-3.836 3.8zm-3.827-5.19a5.375 5.375 0 1 1 5.375-5.38 5.378 5.378 0 0 1-5.375 5.38zm0-7.6a2.235 2.235 0 1 0 2.25 2.24 2.243 2.243 0 0 0-2.25-2.24z" transform="translate(-451.312 -6158.66)"></path></svg>
                    </span>

                            Одноклассники
                        </a>
                    </li>

                    <li class="video-player__share-list-item">
                        <a href="#" class="video-player__share-item  video-player__share-item--mail">
                    <span class="video-player__share-wrap">
                      <svg xmlns="http://www.w3.org/2000/svg" class="video-player__share-icon" viewBox="0 0 21.875 21.03"><path d="M10.564 4.38a6.265 6.265 0 0 1 4.4 1.9.9.9 0 0 1 .893-.97l.131-.01a.994.994 0 0 1 .979 1.02v8.64a.56.56 0 0 0 .939.49c1.388-1.43 3.047-7.33-.862-10.75a9.363 9.363 0 0 0-11.132-.87 8.4 8.4 0 0 0-2.814 10.09c1.872 4.32 7.231 5.61 10.416 4.32 1.613-.65 2.358 1.53.683 2.24-2.531 1.08-9.576.97-12.866-4.73A10.43 10.43 0 0 1 5.123 1.62a11.508 11.508 0 0 1 14.044 1.81c3.748 3.91 3.529 11.24-.127 14.1a2.556 2.556 0 0 1-4.1-1.86l-.017-.61a6.173 6.173 0 0 1-4.361 1.81 6.245 6.245 0 0 1 0-12.49zm4.158 6.04a3.94 3.94 0 0 0-4.089-3.88h-.081c-2.5 0-3.891 1.97-3.891 4.21a3.8 3.8 0 0 0 3.881 4.08 4.072 4.072 0 0 0 4.186-3.92z"></path></svg>
                    </span>

                            Mail.ru
                        </a>
                    </li>

                    <li class="video-player__share-list-item">
                        <a href="#" class="video-player__share-item  video-player__share-item--tw">
                    <span class="video-player__share-wrap">
                      <svg xmlns="http://www.w3.org/2000/svg" class="video-player__share-icon"  viewBox="0 0 23.032 18.84"><path d="M544.882 6165.15l2.316-.47a18.918 18.918 0 0 1-2.316 2.3c0 .01-.008 0-.011 0a7.2 7.2 0 0 0 .011 1.38c-4.425 18.96-20.711 10.58-20.711 10.58 5.925.16 6.454-2.3 6.454-2.3-3.471-.52-4.14-2.76-4.14-2.76a1.445 1.445 0 0 0 1.84-.46 4.154 4.154 0 0 1-3.22-4.6 4.416 4.416 0 0 0 2.258.88c-.424-.5-3.919-4.69-1.8-6.85 0 0 2.553 4.59 9.314 5.03l.452-.12a4.82 4.82 0 0 1 4.722-5.83c3.215 0 3.909 1.84 3.909 1.84l2.3-1.38s-.25 2.3-1.378 2.76z" transform="translate(-524.156 -6161.94)"></path></svg>
                    </span>

                            Twitter
                        </a>
                    </li>

                    <li class="video-player__share-list-item">
                        <a href="#" class="video-player__share-item  video-player__share-item--gplus">
                    <span class="video-player__share-wrap">
                      <svg xmlns="http://www.w3.org/2000/svg" class="video-player__share-icon" viewBox="0 0 25.781 16.41"><path d="M22.943 6.74V3.9h-2.031v2.84h-2.919v2.03h2.919v2.93h2.027V8.77h2.838V6.74h-2.838zM8.185 6.58v3.25h4.427c-.694 2.1-1.773 3.25-4.428 3.25a4.876 4.876 0 0 1 0-9.75 4.625 4.625 0 0 1 3.18 1.2c.674-.68.617-.77 2.331-2.39a8.2 8.2 0 1 0-5.511 14.27c6.761 0 8.413-5.9 7.865-9.83H8.184z"></path></svg>
                    </span>

                            Google plus
                        </a>
                    </li>

                    <li class="video-player__share-list-item">
                        <a href="#" class="video-player__share-item  video-player__share-item--gplus">
                    <span class="video-player__share-wrap">
                      <svg xmlns="http://www.w3.org/2000/svg" class="video-player__share-icon" viewBox="0 0 25.781 16.41"><path d="M22.943 6.74V3.9h-2.031v2.84h-2.919v2.03h2.919v2.93h2.027V8.77h2.838V6.74h-2.838zM8.185 6.58v3.25h4.427c-.694 2.1-1.773 3.25-4.428 3.25a4.876 4.876 0 0 1 0-9.75 4.625 4.625 0 0 1 3.18 1.2c.674-.68.617-.77 2.331-2.39a8.2 8.2 0 1 0-5.511 14.27c6.761 0 8.413-5.9 7.865-9.83H8.184z"></path></svg>
                    </span>

                            Google plus
                        </a>
                    </li>

                    <li class="video-player__share-list-item">
                        <a href="#" class="video-player__share-item  video-player__share-item--gplus">
                    <span class="video-player__share-wrap">
                      <svg xmlns="http://www.w3.org/2000/svg" class="video-player__share-icon" viewBox="0 0 25.781 16.41"><path d="M22.943 6.74V3.9h-2.031v2.84h-2.919v2.03h2.919v2.93h2.027V8.77h2.838V6.74h-2.838zM8.185 6.58v3.25h4.427c-.694 2.1-1.773 3.25-4.428 3.25a4.876 4.876 0 0 1 0-9.75 4.625 4.625 0 0 1 3.18 1.2c.674-.68.617-.77 2.331-2.39a8.2 8.2 0 1 0-5.511 14.27c6.761 0 8.413-5.9 7.865-9.83H8.184z"></path></svg>
                    </span>

                            Google plus
                        </a>
                    </li>

                    <li class="video-player__share-list-item">
                        <a href="#" class="video-player__share-item  video-player__share-item--gplus">
                    <span class="video-player__share-wrap">
                      <svg xmlns="http://www.w3.org/2000/svg" class="video-player__share-icon" viewBox="0 0 25.781 16.41"><path d="M22.943 6.74V3.9h-2.031v2.84h-2.919v2.03h2.919v2.93h2.027V8.77h2.838V6.74h-2.838zM8.185 6.58v3.25h4.427c-.694 2.1-1.773 3.25-4.428 3.25a4.876 4.876 0 0 1 0-9.75 4.625 4.625 0 0 1 3.18 1.2c.674-.68.617-.77 2.331-2.39a8.2 8.2 0 1 0-5.511 14.27c6.761 0 8.413-5.9 7.865-9.83H8.184z"></path></svg>
                    </span>

                            Google plus
                        </a>
                    </li>

                </ul>
            </div>
        </div>

    </div>

</section>

<div class="content new-films-slider">
    <section class="content__row">
        <div class="wrapper">
            <h3 class="content__title title title--x4">
                Популярное на Ivi.ru
            </h3>

            <div class="content__slider">
                <div class="owl-carousel owl-theme  js-skip-active" id="features"></div>
            </div>
        </div>
    </section>
</div>

<section class="content-list">
    <div class="wrapper">
        <h1 class="title  title--x2  channels__title">
            Фильмы онлайн na ivi.ru
        </h1>
    </div>

    <div class="content-list__wrapper">
        <div class="wrapper">
            <div class="js---filter-container  filter--with-date  filter--layout  filter--left-align">
                <div class="js---filter-item" data-filter-type="genre">
                    <ul data-hint="Жанр"
                        data-hint-desktop="Жанр"
                        data-hint-mobile="Жанр">
<?php foreach ($genres as $genre) { ?>
                        <li data-text-desktop="<?php print($genre['title'])?>"
                            data-text-mobile="<?php print($genre['title'])?>">
                            <?php print($genre['title'])?>
                        </li>
<?php } ?>
                    </ul>
                </div>

                <div class="js---filter-item" data-filter-type="year">
                    <ul data-hint="Год"
                        data-hint-desktop="Год"
                        data-hint-mobile="Любой">
                        <?php foreach ($years as $year) { ?>
                        <li data-text-desktop="<?php print($year['year'])?>"
                            data-text-mobile="<?php print($year['year'])?>">
                            <?php print($year['year'])?>
                        </li>
                        <?php } ?>
                    </ul>
                </div>


                <div class="js---filter-item" data-filter-type="country">
                    <ul data-hint="Страна"
                        data-hint-desktop="Страна"
                        data-hint-mobile="Страна">

                        <li data-text-desktop="Любая"
                            data-text-mobile="Любая">
                            Любая
                        </li>

                        <li data-text-desktop="Россия"
                            data-text-mobile="Россия">
                            Россия
                        </li>

                        <li data-text-desktop="США"
                            data-text-mobile="США">
                            США
                        </li>
                    </ul>
                </div>


                <div class="js---filter-item  js---filter-item-with-date" data-filter-type="category">
                    <ul data-hint="Категория"
                        data-hint-desktop="Категория"
                        data-hint-mobile="Популярные">
                    </ul>

                    <div class="js---filter-sort-by-date">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-list__wrap">
        <div class="wrapper">
            <div class="profile-content_block_wrapper js---grid-block" id="cinema-items"></div>
        </div>

        <a href="" class="btn content-list__btn load-more">
            Загрузить еще
        </a>

    </div>

</section>

<section class="features">
    <div class="wrapper  wrapper--flex">
        <h2 class="title  title--x2 features__title">
            Онлайн телевидение
        </h2>

        <div class="features__item">
            <strong class="features__item-title">
                Эксклюзивные каналы
            </strong>
            <p class="features__text">
                Получите доступ к 80 популярным телеканалам&nbsp;без рекламы.
            </p>
        </div>

        <div class="features__item">
            <strong class="features__item-title">
                На всех устройствах
            </strong>
            <p class="features__text">
                Смотри когда хочешь и где хочешь на iPad и iPhone,&nbsp;Android, Smart TV.
            </p>
        </div>

        <div class="features__item">
            <strong class="features__item-title">
                Бесплатый просмотр
            </strong>
            <p class="features__text">
                Смотри самые лучшие каналы и передачи абсолютно&nbsp;бесплатно.
            </p>
        </div>

        <a href="#" class="btn features__btn">
            Регистрация
        </a>
    </div>

    <img src="img/features-image-2.jpg" alt="" class="features__image">
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

<div id="item-template" style="display: none;">
    <div class="profile-content_block__cinema_item js---grid-item">
        <div class="item">
            <article class="content-item">
                <div class="content-item__wrap">
                    <img src="<?php print($noImageSrc)?>" class="content-item__image item-image" alt="">

                    <a href="#" class="content-item__hide-info">
                        <div class="content-item__price">
                            Купить<br>
                            <strong>от <span class="item-price"></span>€</strong>
                        </div>

                        <div class="content-item__rating">
                            <span>
                                <b class="item-kp">-</b> КиноПоиск
                            </span>
                            <span>
                                <b class="item-imdb">-</b> IMDb
                            </span>
                        </div>
                    </a>
                </div>

                <h2 class="content-item__name">
                    <a href="#" class="item-name"></a>
                </h2>

                <div class="content-item__info">
                    <a href="#" class="content-item__info-item item-year"></a>
                    <a href="#" class="content-item__info-item item-country"></a>
                    <a href="#" class="content-item__info-item content-item__info-item--genre item-genre"></a>
                </div>
            </article>
        </div>
    </div><!-- end cinema-item -->
</div>

<div id="feature-template" style="display: none;">
    <div class="item">
        <article class="content-item">
            <div class="content-item__wrap">
                <img src="<?php print($noImageSrc)?>" class="content-item__image item-image" alt="">

                <a href="#" class="content-item__hide-info">
                    <div class="content-item__price">
                        Купить<br>
                        <strong>от <span class="item-price"></span>€</strong>
                    </div>

                    <div class="content-item__rating">
                        <span>
                            <b class="item-kp">-</b> КиноПоиск
                        </span>
                        <span>
                            <b class="item-imdb">-</b> IMDb
                        </span>
                    </div>
                </a>
            </div>

            <h3 class="content-item__name">
                <a href="#" class="item-name"></a>
            </h3>

            <div class="content-item__info">
                <a href="#" class="content-item__info-item item-year"></a>
                <a href="#" class="content-item__info-item item-country"></a>
                <a href="#" class="content-item__info-item content-item__info-item--genre item-genre"></a>
            </div>
        </article>
    </div>
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
<script type="text/javascript">
$(document).ready(function(){
    page = 0;
    loadFeatures();
    loadData();
});

$(document).on('click', '.load-more', function(e){
    e.preventDefault();
    loadData();
});

function loadFeatures() {
    $.getJSON('ajax.php', {'features':true, 'filter[provider]':<?php print(json_encode($provider))?>}, function(response){
        $.each(response, function(k, v){
            var element = $('#feature-template').children().clone();
            element.find('.item-name').text(v.title);

            if (v.thumb)
                element.find('.item-image').attr('src', v.thumb);
            else
                element.find('.item-image').attr('src', '<?php print($noImageSrc)?>');
            if (v.year)
                element.find('.item-year').text(v.year);
            else
                element.find('.item-year').hide();
            if (v.country)
                element.find('.item-country').text(v.country);
            else
                element.find('.item-country').hide();
            if (v.kp_rating)
                element.find('.item-kp').text(v.kp_rating);
            if (v.imdb_rating)
                element.find('.item-imdb').text(v.imdb_rating);

                $('.owl-carousel').trigger('add.owl.carousel', [element]);
        });

        $('.owl-carousel').trigger('add.owl.carousel', ['<div class="item"><div class="content__wrap"><a href="#" class="content__btn"><span></span>Все фильмы</a></div></div>']).trigger('refresh.owl.carousel');
    });
}

function loadData() {
    $.getJSON('ajax.php', {'filter[provider]':<?php print(json_encode($provider))?>, 'page':page}, function(response){
        $.each(response, function(k,v){
            var element = $('#item-template').children().clone().hide().appendTo('#cinema-items');
            element.find('.item-name').text(v.title);

            if (v.thumb)
                element.find('.item-image').attr('src', v.thumb);
            else
                element.find('.item-image').attr('src', '<?php print($noImageSrc)?>');
            if (v.year)
                element.find('.item-year').text(v.year);
            else
                element.find('.item-year').hide();
            if (v.country)
                element.find('.item-country').text(v.country);
            else
                element.find('.item-country').hide();
            if (v.kp_rating)
                element.find('.item-kp').text(v.kp_rating);
            if (v.imdb_rating)
                element.find('.item-imdb').text(v.imdb_rating);

            element.fadeIn();
        });

        page++;
    });
}
</script>

</body>

</html>