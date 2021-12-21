<?php

use Repository\UserRepository;

include_once "src/Repository/UserRepository.php";

$userId = $_SESSION['user_id'];
if (isset($userId)) {
    $userRepo = new UserRepository();
    $userName = $userRepo->getUserName($userId);

    if (!isset($userName)) {
        unset($_SESSION['user_id']);
    }
}
?>


<!--Шапка-->
<header id="header" class="header lock-padding">
    <div class="header__container">
        <!--Логотип-->
        <h1 class="logo">califatr studio</h1>
        <!--Панель кнопок-->
        <nav class="header-buttons">
            <!--Кнопка "Главная"-->
            <a href="#" class="header-buttons__button">Главная</a>
            <?php if (!isset($userName)) : ?>
                <!--Кнопка "Войти"-->
                <a href="#popup" class="header-buttons__button popup-link">Войти</a>
                <!--Кнопка "Зарегистрироваться"-->
                <a href="#popup_2" class="header-buttons__button popup-link">Зарегистрироваться</a>
            <?php else: ?>
                <li class="menu__item">
                    <span class="menu__link">Добро пожаловать, <?= $userName ?> !</span>
                    <br>
                    <a href="/create" class="menu__link"> Создать пост </a>
                    <br>
                    <a href="/logout" class="menu__link"> Выйти из аккаунта </a>
                </li>
            <?php endif ?>
        </nav>
    </div>
</header>