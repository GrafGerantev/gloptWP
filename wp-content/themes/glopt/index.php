<?php
    get_header();
?>
    <section class="promo" id="promo" style="background:url(<?php the_field('bg-promo') ?>)center center/cover no-repeat;">
    
        <div class="container">
            <div class="promo__text">
                <div class="promo__suptitle"><?php the_field('promo_suptitle'); ?></div>
                <h1 class="promo__title"><?php the_field('promo_title'); ?></h1>
                <div class="promo__subtitle"><?php the_field('promo_subtitle'); ?></div>
            </div>
            <!--/.promo__text-->
            <div class="promo__lines">
                <span class="promo__lines-line"></span>
                <span class="promo__lines-line"></span>
                <span class="promo__lines-dot"></span>
            </div>
            <div class="promo__delivery">
    
                    <?php 
                        $posts = get_posts( array(
                            'numberposts' => -1,
                            'category_name'    => 'delivery',
                            'orderby'     => 'date',
                            'order'       => 'ASC',
                            'post_type'   => 'post',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );
                        foreach( $posts as $post ){
                            setup_postdata($post);
                            ?>
                            <div class="delivery-item">
                                <img src="<?php 
                                if(has_post_thumbnail()) { /*Проверка наличия превьюхи в записи */
                                    the_post_thumbnail_url();
                                } else {
                                    echo get_template_directory_uri() . '/assets/img/not-found.jpg';
                                }
                                ?>)" class="delivery-item__img">
                                <div class="delivery-item__descr"><?php the_field('delivery_descr'); ?></div>
                            </div>

                        <?php
                        }

                                wp_reset_postdata(); // сброс
                    
                        ?>

                    



                <!-- <div class="delivery-item">
                    <img src="icons/promo/1.png" alt="Logo" class="delivery-item__img">
                    <div class="delivery-item__descr">Перевозка негабаритных и крупнотоннажных грузов</div>
                </div> -->
                <!--/.delivery-item-->
               <!--  <div class="delivery-item">
                    <img src="icons/promo/2.png" alt="Logo" class="delivery-item__img">
                    <div class="delivery-item__descr">Самостоятельно декларируем и проводим таможенную очистку с оптимизацией кодов и ставок</div>
                </div> -->
                <!--/.delivery-item-->
                <!-- <div class="delivery-item">
                    <img src="icons/promo/3.png" alt="Logo" class="delivery-item__img">
                    <div class="delivery-item__descr">Осуществляем прямые поставки с заводов от двери до двери</div>
                </div> -->
                <!--/.delivery-item-->
                <!-- <div class="delivery-item">
                    <img src="icons/promo/4.png" alt="Logo" class="delivery-item__img">
                    <div class="delivery-item__descr">Экспресс доставка 1-2 дня из Гуанчжоу в Москву от 25$/кг  </div>
                </div> -->
                <!--/.delivery-item -->
            </div>
            <!--/.promo__delivery-->
            
        </div>
        <button data-modal="payment" class="button button_big">Получить расчет</button>
        <!--/.container-->
    </section>
    <!--/.promo-->
    <section class="advantages" id="advantages">
        <div class="container">
            <h2 class="title">Преимущества работы с GlobalOpt</h2>
            <div class="advantages__wrapper">
                <div class="advantages__item">
                    <img src="icons/advantages/1.png" alt="Logo" class="advantages__img">
                    <div class="advantages__text">
                        <div class="advantages__subtitle">Офисы в Китае и России</div>
                        <div class="advantages__descr">Офисы расположены в Москве, столице России.  И в Гуанчжоу, мировом торговом мегаполисе Китая. </div>
                    </div>
                </div>
                <!--/.advantages__item-->
                <div class="advantages__item">
                    <img src="icons/advantages/2.png" alt="Logo" class="advantages__img">
                    <div class="advantages__text">
                        <div class="advantages__subtitle">Декларируем груз с оптимизацией</div>
                        <div class="advantages__descr">Идем на встречу своим клиентам и помогаем растаможить груз с оптимизацией кодов и ставок.</div>
                    </div>
                </div>
                <!--/.advantages__item-->
                <div class="advantages__item">
                    <img src="icons/advantages/3.png" alt="Logo" class="advantages__img">
                    <div class="advantages__text">
                        <div class="advantages__subtitle">Квалифицированные кадры</div>
                        <div class="advantages__descr">Наши сотрудники имеют большой опыт в логистике с Китаем и в совершенстве владеют китайским и английским языками.</div>
                    </div>
                </div>
                <!--/.advantages__item-->
                <div class="advantages__item">
                    <img src="icons/advantages/4.png" alt="Logo" class="advantages__img">
                    <div class="advantages__text">
                        <div class="advantages__subtitle">Осуществляем поиск производителей</div>
                        <div class="advantages__descr">Помогаем нашим клиентам найти интересующий вас товар или производителя в Китае.</div>
                    </div>
                </div>
                <!--/.advantages__item-->
                <div class="advantages__item">
                    <img src="icons/advantages/5.png" alt="Logo" class="advantages__img">
                    <div class="advantages__text">
                        <div class="advantages__subtitle">Собственный склад в Китае</div>
                        <div class="advantages__descr">Свой склад в Китае, позволяет собирать и проверять и упаковывать  ваши товары, перед отправкой.</div>
                    </div>
                </div>
                <!--/.advantages__item-->
                <div class="advantages__item">
                    <img src="icons/advantages/6.png" alt="Logo" class="advantages__img">
                    <div class="advantages__text">
                        <div class="advantages__subtitle">Перевод денег в Китай</div>
                        <div class="advantages__descr">Помогаем переводить и оплачивать товар в Китае на льготных условиях</div>
                    </div>
                </div>
                <!--/.advantages__item-->
                <div class="advantages__item">
                    <img src="icons/advantages/7.png" alt="Logo" class="advantages__img">
                    <div class="advantages__text">
                        <div class="advantages__subtitle">Делаем оптовые поставки под ключ</div>
                        <div class="advantages__descr">Берём на себя все заботы связанные с  закупкой, проверкой на качество, логистикой и растаможкой. От вас требуется лишь заполнить техническое задание, одобрить  образцы товаров и после принять товар на своём складе!</div>
                    </div>
                </div>
                <!--/.advantages__item-->
                <div class="advantages__item">
                    <img src="icons/advantages/8.png" alt="Logo" class="advantages__img">
                    <div class="advantages__text">
                        <div class="advantages__subtitle">Поездка на производство в Китай</div>
                        <div class="advantages__descr">У нас большой опыт в бизнес поездках по Китаю. Мы с большой радостью и желанием организуем вам такую поездку в Китай под ключ. Сделаем визу, трансфер из аэропорта, забронируем отель, предоставим переводчика. Организуем поездку на производство. Шоп тур. Мебельный тур.</div>
                    </div>
                </div>
                <!--/.advantages__item-->
            </div>
            <!--/.advantages__wrapper-->
        </div>
        <!--/.container-->
    </section>
    <!--/.advantages-->
    <section class="work" id="work">
        <div class="container">
            <h2 class="title">Наша работа - больше чем просто доставка</h2>
            <hr>
            <div class="subtitle">
                Мы организуем перевозки из Китая - оперативно и надежно, с учетом особенностей груза
                и ваших требований по срокам и бюджету.
            </div>
            <div class="work__wrapper">
                <div class="work-item">
                    <img src="img/work/1.jpg" alt="work" class="work-item__img">
                    <div class="work-item__title">Страховка груза</div>
                    <div class="work-item__descr">Все грузы, логистику которых осуществляет Global Opt, застрахованы. Мы гарантируем полное возмещение стоимости груза в случаях, предусмотренных страхо- вым соглашением. Все ваши тревоги наша компания берет на себя.</div>
                </div>
                <!--/.work-item-->
                <div class="work-item">
                    <img src="img/work/2.jpg" alt="work" class="work-item__img">
                    <div class="work-item__title">Логистика последней мили</div>
                    <div class="work-item__descr">Мы осуществляем доставку вашего груза до конкретного адреса. Привоз согласовывается менед- жерами по телефону, предварительно за сутки и за час до доставки. Также мы предоставляем услуги грузчи- ков по месту доставки груза.</div>
                </div>
                <!--/.work-item-->
                <div class="work-item">
                    <img src="img/work/3.jpg" alt="work" class="work-item__img">
                    <div class="work-item__title">Мы всегда смотрим вперед</div>
                    <div class="work-item__descr">Философия нашей компании, делать себя и своих партнеров по всему миру, успешными и богатыми. Поэтому мы всегда открыты к диалогу о партнерстве и инвестициях.</div>
                </div>
                <!--/.work-item-->
            </div>
            <!--/.work__wrapper-->
        </div>
        <!--/.container-->
    </section>
    <!--/.work-->
    <section class="employees employees-agent">
        <div class="container">
            <div class="employees__wrapper">
                <div class="circle">
                    <img src="icons/icon_bg/1.png" alt="icon">
                </div>
                <h2 class="employees__title">Агент в Китае</h2>
                <div class="employees__descr">Русскоговорящие представители компании без труда найдут именно тот товар, который будет отвечать Вашим запросам как по качеству, так и по цене.</div>
            </div>
            <!--/.agent__wrapper-->
        </div>
        <!--/.container-->
    </section>
    <!--/.employees-->
    <section class="catalog" id="catalog">
        <div class="container">
            <h2 class="title">Цены на любой вариант доставки</h2>
            <hr>
            <div class="subtitle">
                Перевозки грузов на дальние расстояния без каких-либо ограничений.
                Любой груз доставим вовремя.
            </div>
            <div class="catalog__content">
                <div class="catalog-item">
                    <div class="catalog-item__header">Доставка морем</div>
                    <div class="catalog-item__wrapper">
                        <div class="catalog-item__content">
                            <div class="catalog-item__first">
                                <img src="icons/catalog/1.png" alt="icon" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Доставка 35-50 дней</div>
                                <div class="catalog-item__price">от 0,3&#036; за 1 кг</div>
                                <div class="catalog-item__descr">Морские перевозки грузов из Китая в Россию за 35 дней с прохождением таможни </div>
                                <button class="button catalog-button button_mt25">Подробнее</button>
                            </div>
                            <!--/.catalog-item__main-->
                            <div class="catalog-item__second">
                                <ul class="catalog-item__list">
                                    <li>Вы услышите звуковое оповещение о нужном пульсе
                                        во время тренировки;
                                    </li>
                                    <li>Вы услышите звуковое оповещение о нужном пульсе
                                        во время тренировки;
                                    </li>
                                    <li>Вы услышите звуковое оповещение о нужном пульсе
                                        во время тренировки;
                                    </li>
                                </ul>
                                <!--/.catalog-item__list-->
                                <!--<a href="#" class="catalog-back">Назад</a>-->
                                <button class="button catalog-back button_mt25">назад</button>
                            </div>
                            <!--/.catalog-item__second-->
                        </div>
                        <!--/.catalog-item__content-->
                    </div>
                    <!--/.catalog-item__wrapper-->
                </div>
                <!--/.catalog-item-->
                <div class="catalog-item">
                    <div class="catalog-item__header">Ж/Д доставка</div>
                    <div class="catalog-item__wrapper">
                        <div class="catalog-item__content">
                            <div class="catalog-item__first">
                                <img src="icons/catalog/2.png" alt="icon" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Доставка 15-28 дней</div>
                                <div class="catalog-item__price">от 1&#036; за 1 кг</div>
                                <div class="catalog-item__descr">ЖД перевозки грузов из Китая в Россию от 2 недель с прохождением таможни</div>
                                <button class="button catalog-button button_mt25">Подробнее</button>
                            </div>
                            <!--/.catalog-item__main-->
                            <div class="catalog-item__second">
                                <ul class="catalog-item__list">
                                    <li>Вы услышите звуковое оповещение о нужном пульсе
                                        во время тренировки;
                                    </li>
                                    <li>Вы услышите звуковое оповещение о нужном пульсе
                                        во время тренировки;
                                    </li>
                                    <li>Вы услышите звуковое оповещение о нужном пульсе
                                        во время тренировки;
                                    </li>
                                </ul>
                                <!--/.catalog-item__list-->
                               <!-- <a href="#" class="catalog__back">Назад</a>-->
                                <button class="button catalog-back button_mt25">назад</button>
                            </div>
                            <!--/.catalog-item__second-->
                        </div>
                        <!--/.catalog-item__content-->
                    </div>
                    <!--/.catalog-item__wrapper-->
                </div>
                <!--/.catalog-item-->
                <div class="catalog-item">
                    <div class="catalog-item__header">Автодоставка</div>
                    <div class="catalog-item__wrapper">
                        <div class="catalog-item__content">
                            <div class="catalog-item__first">
                                <img src="icons/catalog/3.png" alt="icon" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Доставка 15-20 дней</div>
                                <div class="catalog-item__price">от 1&#036; за 1 кг</div>
                                <div class="catalog-item__descr">Автоперевозки грузов из Китая в Россию от 2 недель с прохождением таможни</div>
                                <button class="button catalog-button button_mt25">Подробнее</button>
                            </div>
                            <!--/.catalog-item__main-->
                            <div class="catalog-item__second">
                                <ul class="catalog-item__list">
                                    <li>Вы услышите звуковое оповещение о нужном пульсе
                                        во время тренировки;
                                    </li>
                                    <li>Вы услышите звуковое оповещение о нужном пульсе
                                        во время тренировки;
                                    </li>
                                    <li>Вы услышите звуковое оповещение о нужном пульсе
                                        во время тренировки;
                                    </li>
                                </ul>
                                <!--/.catalog-item__list-->
                                <!--<a href="#" class="catalog__back">Назад</a>-->
                                <button class="button catalog-back button_mt25">назад</button>
                            </div>
                            <!--/.catalog-item__second-->
                        </div>
                        <!--/.catalog-item__content-->
                    </div>
                    <!--/.catalog-item__wrapper-->
                </div>
                <!--/.catalog-item-->
                <div class="catalog-item">
                    <div class="catalog-item__header">Авиа доставка</div>
                    <div class="catalog-item__wrapper">
                        <div class="catalog-item__content">
                            <div class="catalog-item__first">
                                <img src="icons/catalog/4.png" alt="icon" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Доставка 1-12 дней</div>
                                <div class="catalog-item__price">от 6&#036; за 1 кг</div>
                                <div class="catalog-item__descr">Авиаперевозки грузов из Китая в Россию до 2 недель с прохождением таможни</div>
                                <button class="button catalog-button button_mt25">Подробнее</button>
                            </div>
                            <!--/.catalog-item__main-->
                            <div class="catalog-item__second">
                                <ul class="catalog-item__list">
                                    <li>Вы услышите звуковое оповещение о нужном пульсе
                                        во время тренировки;
                                    </li>
                                    <li>Вы услышите звуковое оповещение о нужном пульсе
                                        во время тренировки;
                                    </li>
                                    <li>Вы услышите звуковое оповещение о нужном пульсе
                                        во время тренировки;
                                    </li>
                                </ul>
                                <!--/.catalog-item__list-->
                                <!--<a href="#" class="catalog__back">Назад</a>-->
                                <button class="button catalog-back button_mt25">назад</button>
                            </div>
                            <!--/.catalog-item__second-->
                        </div>
                        <!--/.catalog-item__content-->
                    </div>
                    <!--/.catalog-item__wrapper-->
                </div>
                <!--/.catalog-item-->
            </div>
            <!--/.catalog__content-->
        </div>
        <!--/.container-->
    </section>
    <!--/.catalog-->
    <section class="consultation">
        <div class="container">
            <div class="title">Заказать бесплатную консультацию</div>
            <fieldset class="position">
                <legend align="center">
                    <div class="circle circle_consultation">
                        <img src="icons/icon_bg/2.png" alt="icon" class="consultation__img">
                    </div>
                </legend>
                <form action="mailer/smart.php" id="consultation-form" class="form consultation__form" method="post">
                    <div><input name="name" placeholder="Ваше имя..." type="text"></div>
                    <div><input name="phone" placeholder="Ваш телефон..."></div>
                    <div><input name="email" placeholder="Ваш E-mail..." type="email"></div>
                    <button type="submit" class="button button-request consultation__button">отправить заявку</button>
                </form>

            </fieldset>
        </div>
        <!--/.container-->
    </section>
    <!--/.consultation-->
    <section class="employees employees-managers">
    <div class="container">
        <div class="employees__wrapper">
            <div class="circle">
                <img src="icons/icon_bg/3.png" alt="icon">
            </div>
            <h2 class="employees__title">Менеджеры компании</h2>
            <div class="employees__descr">Подберут для Вас оптимальную схему грузоперевозки. Проведут контроль закупок, организуют прямые поставки от завода-изготовителя.</div>
        </div>
        <!--/.agent__wrapper-->
    </div>
    <!--/.container-->
</section>
    <!--/.employees-->
    <section class="schema" id="schema">
        <div class="container">
            <h2 class="title">Схема работы с нами</h2>
            <div class="schema__wrapper">
                <div class="schema__item">
                    <img src="icons/schema/1.png" alt="icon" class="schema__img">
                    <div class="schema__subtitle">Заявка</div>
                    <div class="schema__descr">Вы оставляете заявку на нашем сайте или звоните нам</div>
                </div>
                <!--/.schema__item-->
                <div class="schema__item">
                    <img src="icons/schema/2.png" alt="icon" class="schema__img">
                    <div class="schema__subtitle">Аналитика доставки</div>
                    <div class="schema__descr">Мы просчитываем варианты доставки Вашего груза</div>
                </div>
                <!--/.schema__item-->
                <div class="schema__item">
                    <img src="icons/schema/3.png" alt="icon" class="schema__img">
                    <div class="schema__subtitle">Договор</div>
                    <div class="schema__descr">Заключаем с Вами договор о поставке груза из Китая</div>
                </div>
                <!--/.schema__item-->
                <div class="schema__item">
                    <img src="icons/schema/4.png" alt="icon" class="schema__img">
                    <div class="schema__subtitle">Доставка на наш склад</div>
                    <div class="schema__descr">Связываемся с Вашим поставщиком в Китае и договариваемся о доставке груза на наш склад </div>
                </div>
                <!--/.schema__item-->
                <div class="schema__item">
                    <img src="icons/schema/5.png" alt="icon" class="schema__img">
                    <div class="schema__subtitle">Проверка груза</div>
                    <div class="schema__descr">Мы проверяем, собираем и упаковываем перед отправкой Ваш груз на своём складе</div>
                </div>
                <!--/.schema__item-->
                <div class="schema__item">
                    <img src="icons/schema/6.png" alt="icon" class="schema__img">
                    <div class="schema__subtitle">Доставка груза</div>
                    <div class="schema__descr">Мы перевозим ваш груз до места назначения и производим таможенную очистку</div>
                </div>
                <!--/.schema__item-->
                <div class="schema__item">
                    <img src="icons/schema/7.png" alt="icon" class="schema__img">
                    <div class="schema__subtitle">Оплата</div>
                    <div class="schema__descr">Оплачиваете доставку груза при получении </div>
                </div>
                <!--/.schema__item-->
            </div>
            <!--/.schema__wrapper-->
        </div>
        <!--/.container-->
    </section>
    <!--/.schema-->
    <section class="reviews" id="reviews">
        <div class="container">
            <h2 class="title">отзывы наших клиентов</h2>
            <hr>
            <div class="subtitle">
                Мы всегда стараемся помочь клиентам, что бы они обращались к нам снова
            </div>
            <div class="reviews-carousel">
                <div class="reviews-carousel__item">
                    <img src="img/slider/1.jpg" alt="img" class="reviews-carousel__img">
                    <div class="reviews-carousel__subtitle">Анисимова Ольга</div>
                    <div class="reviews-carousel__descr">
                        Хочу рассказать о компании Global Opt. Самое главное что меня радует, это быстрый поиск и анализ определенного товара. Доставляла через компанию уже много раз, от расходных материалов для отеля, ло дольших партий детской одежды. Буду продолжать пользтваьбся услугами даной компании
                    </div>
                </div>
                <!--/.reviews-carousel__item-->
                <div class="reviews-carousel__item">
                    <img src="img/slider/1.jpg" alt="img" class="reviews-carousel__img">
                    <div class="reviews-carousel__subtitle">Иванова Ирина</div>
                    <div class="reviews-carousel__descr">
                        Хочу рассказать о компании Global Opt. Самое главное что меня радует, это быстрый поиск и анализ определенного товара. Доставляла через компанию уже много раз, от расходных материалов для отеля, ло дольших партий детской одежды. Буду продолжать пользтваьбся услугами даной компании
                    </div>
                </div>
                <!--/.reviews-carousel__item-->
                <div class="reviews-carousel__item">
                    <img src="img/slider/1.jpg" alt="img" class="reviews-carousel__img">
                    <div class="reviews-carousel__subtitle">Петрова Анастасия</div>
                    <div class="reviews-carousel__descr">
                        Хочу рассказать о компании Global Opt. Самое главное что меня радует, это быстрый поиск и анализ определенного товара. Доставляла через компанию уже много раз, от расходных материалов для отеля, ло дольших партий детской одежды. Буду продолжать пользтваьбся услугами даной компании
                    </div>
                </div>
                <!--/.reviews-carousel__item-->
            </div>
            <!--/.reviews-carousel-->
        </div>
        <!--/.container-->
    </section>
    <!--/.reviews-->
    <section class="questions">
        <div class="container">
            <div class="questions-wrapper">
                <div class="questions-wrapper__header">
                    <div class="questions-wrapper__title">
                        Остались вопросы?
                    </div>
                    <div class="questions-wrapper__subtitle">
                        Напишите нам!
                    </div>
                </div>
                <!--/.questions-wrapper__header-->
                <div class="questions-wrapper__content">
                    <form action="mailer/smart.php" id="questions-form" class="form questions__form" method="post">
                        <input name="name" placeholder="Ваше имя..." type="text">
                        <input name="phone" placeholder="Ваш телефон...">
                        <input name="email" placeholder="Ваш E-mail..." type="email">
                        <textarea name="message" placeholder="Сообщение..."></textarea>
                        <button type="submit" class="button button-request questions-wrapper__button">Отправить заявку</button>
                    </form>
                </div>
                <!--/.questions-wrapper__content-->
            </div>
            <!--/.questions-wrapper-->
        </div>
        <!--/.container-->
    </section>
    <!--/.questions-->
    <!--<div class="map" id="map">
        <iframe src="https://yandex.ru/map-widget/v1/-/CGw~A48e"frameborder="1" allowfullscreen="true"></iframe>
    </div>-->
    <!--/.map-->
<?php
    get_footer();
?>
