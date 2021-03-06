<?php


namespace Controller;

use Repository\PostRepository;
use Service\RouterService;

class ControlHome
{
    public static function home()
    {
        $repo = new PostRepository();
        $posts = $repo->getPreviewPosts(-1);
        $data = [];
        foreach ($posts as $post) {
            $data[] = $post->toArray();
        }
        $_SESSION['posts'] = $data;
        RouterService::redirectToPage('home');
    }

    public static function logout()
    {
        unset($_SESSION['user_id']);
        RouterService::redirectToPage('home');
    }
}
