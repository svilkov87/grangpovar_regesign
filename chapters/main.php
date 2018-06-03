<?php

include("include/connection.php");

## проверка ошибок
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>grandpovar | главная</title>
    <meta name="description" content="cv" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="img/favicon_fd.ico"/>
    <?php include("include/head.php");" ?>
    <script src="libs/jquery.bxslider/jquery.bxslider.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.b-main-slider').bxSlider({
                mode: 'horizontal',
                captions: true,
                easing: 'easeInOutQuad',
                controls: false,
                startSlide: 0,
                infiniteLoop: true,
                auto: true,
                responsive: true,
                pager: false,
                pause: 4500,
                speed: 500,
                useCSS: true
            });
        });
    </script>
</head>
<body>
<div class="b-search">
    <div class="b-search__wrapper">
        <form class="b-search__form">
            <i class="fas fa-times"></i>
            <input type="text" class="b-search__input" name="live_search" placeholder="Введите название блюда...">
        </form>
    </div>
</div>
<header>
    <nav class="b-nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="b-nav__logo-block">
                        <p class="b-nav__logo">Grand Povar</p>
                        <span class="b-nav__logo-description">Энциклопедия рецептов</span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="b-nav__menu-block">
                    <i class="fa fa-bars"></i>
                        <ul class="b-nav__ul">
                            <li class="b-nav__li"><i class="fas fa-search"></i></li>
                            <li class="b-nav__li"><a href="#" class="b-nav__link">Главная</a></li>
                            <li class="b-nav__li b-nav__li_category">
                                <a href="#" class="b-nav__link">
                                    <span>Категории</span>
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <ul class="b-nav__ul-child">
                                    <li class="b-nav__list-child"><p class="b-nav__link-child">Cuckoo 1055</p>
                                        <ul class="b-menu">
                                            <div class="row">
                                            <li class="col col-4 b-menu__li"><a href="" class="b-menu__link"><img src="http://placehold.it/150x100/ccc/ffffff"></a></li>
                                            <li class="col col-4 b-menu__li"><a href="" class="b-menu__link"><img src="http://placehold.it/150x100/ccc/ffffff" alt=""></a></li>
                                            <li class="col col-4 b-menu__li"><a href="" class="b-menu__link"><img src="http://placehold.it/150x100/ccc/ffffff" alt=""></a></li>
                                            <li class="col col-4 b-menu__li"><a href="" class="b-menu__link"><img src="http://placehold.it/150x100/ccc/ffffff" alt=""></a></li>
                                            <li class="col col-4 b-menu__li"><a href="" class="b-menu__link"><img src="http://placehold.it/150x100/ccc/ffffff" alt=""></a></li>
                                            <li class="col col-4 b-menu__li"><a href="" class="b-menu__link"><img src="http://placehold.it/150x100/ccc/ffffff" alt=""></a></li>
                                            <li class="col col-4 b-menu__li"><a href="" class="b-menu__link"><img src="http://placehold.it/150x100/ccc/ffffff" alt=""></a></li>
                                            <li class="col col-4 b-menu__li"><a href="" class="b-menu__link"><img src="http://placehold.it/150x100/ccc/ffffff" alt=""></a></li>
                                            <li class="col col-4 b-menu__li"><a href="" class="b-menu__link"><img src="http://placehold.it/150x100/ccc/ffffff" alt=""></a></li>
                                            <li class="col col-4 b-menu__li"><a href="" class="b-menu__link"><img src="http://placehold.it/150x100/ccc/ffffff" alt=""></a></li>
                                        </ul>
                                    </li>
                                    <li class="b-nav__list-child"><p class="b-nav__link-child">Мультиварка и не только</p>
                                        <ul class="b-menu">
                                            <div class="row">
                                            <li class="col col-4 b-menu__li"><a href="" class="b-menu__link"><img src="http://placehold.it/150x100/ccc/ffffff" alt=""></a></li>
                                            <li class="col col-4 b-menu__li"><a href="" class="b-menu__link"><img src="http://placehold.it/150x100/ccc/ffffff" alt=""></a></li>
                                            <li class="col col-4 b-menu__li"><a href="" class="b-menu__link"><img src="http://placehold.it/150x100/ccc/ffffff" alt=""></a></li>
                                            <li class="col col-4 b-menu__li"><a href="" class="b-menu__link"><img src="http://placehold.it/150x100/ccc/ffffff" alt=""></a></li>
                                            <li class="col col-4 b-menu__li"><a href="" class="b-menu__link"><img src="http://placehold.it/150x100/ccc/ffffff" alt=""></a></li>
                                            <li class="col col-4 b-menu__li"><a href="" class="b-menu__link"><img src="http://placehold.it/150x100/ccc/ffffff" alt=""></a></li>
                                            <li class="col col-4 b-menu__li"><a href="" class="b-menu__link"><img src="http://placehold.it/150x100/ccc/ffffff" alt=""></a></li>
                                            <li class="col col-4 b-menu__li"><a href="" class="b-menu__link"><img src="http://placehold.it/150x100/ccc/ffffff" alt=""></a></li>
                                            <li class="col col-4 b-menu__li"><a href="" class="b-menu__link"><img src="http://placehold.it/150x100/ccc/ffffff" alt=""></a></li>
                                            <li class="col col-4 b-menu__li"><a href="" class="b-menu__link"><img src="http://placehold.it/150x100/ccc/ffffff" alt=""></a></li>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="b-nav__list-child"><p class="b-nav__link-child">Supra 5201</p></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<div class="container">
    <div class="row">
    <div class="col-md-4">
        <div class="b-last-articles">
            <div class="b-last-articles__header">Последние рецепты</div>
            <div class="b-last-articles__content">
                <div class="b-l-article">
                <a href="#">
                    <img src="img/category/inet/farsh.jpg" alt="" class="b-l-article__img">
                    <div class="b-l-article__description">Фаршированные котлетки по-домашнему</div>
                </a>
                </div>
                <div class="b-l-article">
                <a href="#">
                    <img src="/img/category/inet/plov_ris.jpg" alt="" class="b-l-article__img">
                    <div class="b-l-article__description">Плов</div>
                </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="b-main-content">
            <ul class="b-main-slider">
                <li><img src="img/category/1055/deserty.jpg" alt=""></li>
                <li><img src="img/category/1055/deserty.jpg" alt=""></li>
                <li><img src="img/category/1055/deserty.jpg" alt=""></li>
            </ul>
            <div class="b-main-popular">
                <div class="b-main-popular__header">Популярные рецепты</div>
                <div class="b-main-popular__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-4">
                                <div class="row">
                                    <div class="b-popular-article">
                                        <a href="#">
                                            <img src="img/category/inet/farsh.jpg" alt="" class="b-popular-article__img">
                                            <div class="b-popular-article__description">Фаршированные котлетки по-домашнему</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="row">
                                    <div class="b-popular-article">
                                        <a href="#">
                                            <img src="img/category/inet/farsh.jpg" alt="" class="b-popular-article__img">
                                            <div class="b-popular-article__description">Фаршированные котлетки по-домашнему</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="row">
                                    <div class="b-popular-article">
                                        <a href="#">
                                            <img src="img/category/inet/farsh.jpg" alt="" class="b-popular-article__img">
                                            <div class="b-popular-article__description">Фаршированные котлетки по-домашнему</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="row">
                                    <div class="b-popular-article">
                                        <a href="#">
                                            <img src="img/category/inet/farsh.jpg" alt="" class="b-popular-article__img">
                                            <div class="b-popular-article__description">Фаршированные котлетки по-домашнему</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="row">
                                    <div class="b-popular-article">
                                        <a href="#">
                                            <img src="img/category/inet/farsh.jpg" alt="" class="b-popular-article__img">
                                            <div class="b-popular-article__description">Фаршированные котлетки по-домашнему</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="row">
                                    <div class="b-popular-article">
                                        <a href="#">
                                            <img src="img/category/inet/farsh.jpg" alt="" class="b-popular-article__img">
                                            <div class="b-popular-article__description">Фаршированные котлетки по-домашнему</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<script src="libs/main-min.js"></script>
</body>
</html>


