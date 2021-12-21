<?php

use Controller\ControlDate;
use Controller\ControlHome;
use Controller\ControlPost;
use Service\RouterService;

include "src/Service/RouterService.php";

RouterService::registerRoute('', ControlHome::class, 'home', 'GET');
RouterService::registerRoute('/logout', ControlHome::class, 'logout', 'GET');
RouterService::registerRoute('/post/<id>', ControlPost::class, 'detailPost', 'GET');
RouterService::registerRoute('/create', ControlPost::class, 'create', 'GET');
RouterService::registerRoute('/create_post', ControlPost::class, 'createPost', 'POST');
RouterService::registerRoute('/add_score', ControlPost::class, 'addScore', 'POST');
RouterService::registerRoute('/ajax_load_more', ControlDate::class, 'loadMore', 'POST');
RouterService::registerRoute('/ajax_register', ControlDate::class, 'registerUser', 'POST');
RouterService::registerRoute('/ajax_login', ControlDate::class, 'loginUser', 'POST');

RouterService::enable();
