<?php

$posts = $_SESSION['posts'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Photo.Gallery</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
            href="https://fonts.googleapis.com/css2?family=Roboto&family=Ubuntu&display=swap"
            rel="stylesheet"
    />
    <link rel="stylesheet" href="../style/style.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"></script>
</head>
<body>

<?php
include_once "header.php";
?>

<div class="wrapper">
    <!--Главная область-->
    <div class="main">
        <!--Блок фотографий-->
        <div class="photo-block">
            <?php for ($i = 0; $i < count($posts); $i++) : ?>
                <a href="/post/<?php echo $posts[$i]['id'] ?>" class="card-link">
                    <!--Карточка с фотографией-->
                    <div class="photo-card">
                        <!--Фотография-->
                        <img class="photo-card__photo" src="<?php echo $posts[$i]['image_url'] ?>" alt=""/>
                        <!--Информация о фотографии-->
                        <div class="photo-info">
                            <!--Дата фотографии-->
                            <p class="photo-info__date"><?php echo $posts[$i]['date'] ?></p>
                            <!--Название фотографии-->
                            <p class="photo-info__name"><?php echo $posts[$i]['title'] ?></p>
                        </div>
                    </div>
                </a>
                <!------->
            <?php endfor; ?>
        </div>
        <!--Кнопка "Загрузить еще"-->
        <button id="load_more_btn" type="button" class="load-more-button">
            <p class="load-more-button__text">ЗАГРУЗИТЬ ЕЩЁ</p>
        </button>
    </div>
</div>

<!--Подвал-->
<footer class="footer">
    <!--Блок ссылок на социальные сети-->
    <div class="links">
        <!--Telegram-->
        <a href=""> <img src="../assets/instagram.png" alt="" class="links__elem"/></a>

        <!--VK-->
        <a href=""><img src="../assets/vk.png" alt="" class="links__elem"/></a>

        <!--Instagram-->
        <a href=""><img src="../assets/instagram.png" alt="" class="links__elem"/></a>

    </div>
    <!--Блок информации о сайте-->
    <div class="info-about-site">
        <!--Информация об администраторе-->
        <div class="info-about-site__elem-admin">
            <p>Администратор</p>
            <a>Califatr</a>
        </div>
        <!--Информация о разработчике-->
        <div class="info-about-site__elem-developer">
            <p>Разработчик</p>
            <a>califatr feat starbv</a>
        </div>
</footer>

</div>

<div id="popup" class="popup">
    <form id="form1">
        <div class="popup__body">
            <div class="popup__content">
                <div class="content__container">
                    <div class="content__title">Вход</div>
                    <div class="content__button content__container">
                        <div class="content__input-form">
                            <div class="input-form content__container">
                                <div class="input-form__text">Email</div>
                                <input
                                        id="email"
                                        name="email"
                                        class="form__input _reqSign _username"
                                        type="email"
                                        placeholder=" "
                                />
                                <div class="errors"></div>
                            </div>
                            <div class="input-form content__container">
                                <div class="input-form__text">Пароль</div>
                                <input
                                        id="password"
                                        name="password"
                                        class="form__input _reqSign _password"
                                        type="password"
                                        placeholder=" "
                                />
                                <div class="errors"></div>
                            </div>
                        </div>
                        <div class="content__button content__container">
                            <div class="input-form button">
                                <font style="vertical-align: inherit">
                                    <font style="vertical-align: inherit">
                                        <button id="loginBtn" class="btn btn-primary pr-5 pl-5">
                                            Войти
                                        </button>
                                    </font>
                                </font>
                            </div>
                        </div>

                        <div class="content__link content__container">
                            <a href="#popup_2" class="link popup-link">
                                <font style="vertical-align: inherit">
                                    <font style="vertical-align: inherit">
                                        Зарегестрироваться
                                    </font>
                                </font>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<div id="popup_2" class="popup">
    <form id="form2">
        <div class="popup__body">
            <div class="popup__content popup_registration">
                <div class="content__container">
                    <div class="content__title"Регистрация</div>
                    <div class="content__button content__container">
                        <div class="content__input-form">
                            <div class="input-form content__container">
                                <div class="input-form__text">Логин</div>
                                <input
                                        id="username"
                                        name="username"
                                        class="form__input _reqReg _username"
                                        type="text"
                                        placeholder=" "
                                />
                                <div class="errors"></div>
                            </div>
                            <div class="input-form content__container">
                                <div class="input-form__text">E-mail</div>
                                <input
                                        id="email"
                                        name="email"
                                        class="form__input _reqReg _email"
                                        type="text"
                                        placeholder=" "
                                />
                                <div class="errors"></div>
                            </div>
                            <div class="input-form content__container">
                                <div class="input-form__text">Телефон</div>
                                <input
                                        id="phone"
                                        name="phone"
                                        class="form__input _reqReg _phone"
                                        type="text"
                                        placeholder=" "
                                />
                                <div class="errors"></div>
                            </div>
                            <div class="input-form content__container">
                                <div class="input-form__text">Пароль</div>
                                <input
                                        id="password"
                                        name="password"
                                        class="form__input _reqReg _password"
                                        type="password"
                                        placeholder=" "
                                />
                                <div class="errors"></div>
                            </div>
                            <div class="input-form content__container">
                                <div class="input-form__text">Повторите пароль</div>
                                <input
                                        id="rapeatPassword"
                                        name="reqPassword"
                                        class="form__input _reqReg _repPas"
                                        type="password"
                                        placeholder=" "
                                />
                                <div class="errors"></div>
                            </div>
                        </div>
                        <div class="checkbox__container">
                            <input
                                    type="checkbox"
                                    name="checkbox"
                                    class="form-check _reqReg"
                                    value="1"
                            />
                            <p id="checkbox" class="checkbox">Я принимаю соглашение</p>
                        </div>

                        <div class="content__button content__container">
                            <div class="input-form button">
                                <font style="vertical-align: inherit">
                                    <font style="vertical-align: inherit">
                                        <button class="btn btn-primary" id="#signUpBtn">
                                            Зарегистрироваться
                                        </button>
                                    </font>
                                </font>
                            </div>
                        </div>

                        <div class="content__link content__container">
                            <a href="#popup" class="link popup-link">
                                <font style="vertical-align: inherit">
                                    <font style="vertical-align: inherit"> Войти </font>
                                </font>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<script src="public/script/popups.js"></script>
<script src="public/script/reg.js"></script>
<script src="public/script/sign.js"></script>
<script src="public/script/ajax.js"></script>
</body>
</html>