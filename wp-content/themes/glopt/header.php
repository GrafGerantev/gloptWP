<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glopt</title>
    <?php 
        wp_head();
    ?>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <?php the_custom_logo(); ?>
                <!-- <a href="#" class="logo">
                    <img src="icons/logo/logo.svg" alt="Logo" class="logo__img">
                </a> -->
                <!-- <nav class="header__nav"> -->

                <?php 
                    wp_nav_menu(
                        array (
                            'menu' => 'main',
                            'container' => 'nav', // parent container 
                            'container_class' => 'header__nav',
                            //'container_id' => 'my_nav', //parent container ID
                            'depth' => 1,
                            'items_wrap' => '%3$s', // removes ul
                            'walker' => new Description_Walker // custom walker to replace li with div
                        )
                    );
                    
                    ?>

<!--                     <a href="#advantages" class="header__link">Преимущества</a>
                    <a href="#work" class="header__link">Наша работа</a>
                    <a href="#catalog" class="header__link">Цены</a>
                    <a href="#schema" class="header__link">Схема работы</a>
                    <a href="#reviews" class="header__link">Отзывы</a>
                    <a href="#map" class="header__link">Контакты</a> -->
                <!-- </nav> -->
                <!--/.header__nav-->
                <div class="burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <!--/.burger-->
                <div class="header__contacts">
                    <div class="header__descr"><?php the_field('question_descr'); ?></div>
                    <a href="tel:<?php the_field('phone', 8); ?>" class="header__phone"><?php the_field('phone', 8); ?></a>
                </div>
                <button class="button button_call">перезвоните нам</button>
            </div>
            <!--/.header__inner-->
        </div>
        <!--/.container-->
    </header>
    <!--/.header-->