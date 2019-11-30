<footer class="footer">
        <div class="container">
            <div class="footer-header">
                <div class="footer-header__info">
                    <a href="#" class="logo logo-min footer-header__logo">
                        <img src="icons/logo/logo.svg" alt="Logo" class="logo__img">
                    </a>
                    <div class="footer-header__slogan">Global Opt - Доставка грузов из Китая в Россию и СНГ</div>
                </div>
                <!--/.footer-header__info-->
                <div class="footer-header__contact">
                    <div class="header__contacts footer-header__contacts">
                        <div class="header__descr">Есть вопросы?</div>
                        <a href="tel:+79264230100" class="header__phone">+7 (926) 423 01 00</a>
                    </div>
                    <!--/.header__contacts-->
                    <button class="button button_call">перезвоните нам</button>
                </div>
            </div>
            <!--/.footer-header-->
            <hr>
            <div class="footer-info">
                <div class="footer-info__cooper">&copy; 2010 Scratch.com.ua</div>
                <a href="#" class="footer-info__policy">Политика конфидециальности</a>
                <div class="footer-info__site">
                    <div class="footer-info__text">Создание сайта:</div>
                    <img src="icons/logo/site.png" alt="logo">
                </div>
            </div>
            <!--/.footer-info-->
        </div>
        <!--/.container-->
    </footer>
    <!--/.footer-->
    <div class="overlay" id="overlay">
        <div class="modal" id="payment">
            <div class="modal__close">&times;</div>
            <div class="modal__subtitle">Просто заполните форму заявки</div>
            <div class="modal__descr">и мы перезвоним вам в течении 10 минут</div>
            <form id="modal-form" action="#"  class="form modal__form">
                <input name="name" placeholder="Ваше имя..." type="text">
                <input name="phone" placeholder="Ваш телефон...">
                <input name="email" placeholder="Ваш E-mail..." type="email">
                <button type="submit" class="button button-request modal__button">отправить заявку</button>
            </form>

        </div>
    </div>



    <a href="#promo" class="pageup">
        <img src="icons/arrows/up.svg" alt="up">
    </a>

    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/jquery.maskedinput.min.js"></script>
    <script src="js/script.js"></script>
    <?php 
        wp_footer();
    ?>
</body>
</html>