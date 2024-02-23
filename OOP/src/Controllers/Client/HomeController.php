<?php

namespace Ngotr\Oop\Controllers\Client;

use Ngotr\Oop\Commons\Controller;
use Ngotr\Oop\Models\Post;

class HomeController extends Controller
{
    private Post $post;
    public function __construct()
    {
        $this->post = new Post();
    }
    public function index()
    {


        $PostFirstLatest = $this->post->getFirstLatest();
        $postTop6 = $this->post->getTop6();
        $postTop6Chunk = array_chunk($postTop6, 3);
        // debug($PostFirstLatest);
        // debug($postTop6);
        // debug($postTop6Chunk);
        return $this->renderViewClient(
            'home',
            [
                'PostFirstLatest' => $PostFirstLatest,
                'postTop6Chunk' => $postTop6Chunk
            ]
        );

    }
}
