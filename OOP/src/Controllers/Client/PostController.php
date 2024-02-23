<?php

namespace Ngotr\Oop\Controllers\Client;

use Ngotr\Oop\Commons\Controller;
use Ngotr\Oop\Models\Post;

class PostController extends Controller
{
    private Post $post;
    public function __construct()
    {
        $this->post = new Post();
    }
    public function show($id)
    {
        $post = $this->post->getByID($id);
        return $this->renderViewClient(
            'post-show',
            [
                'post' => $post,
            ]
        );

    }
}
