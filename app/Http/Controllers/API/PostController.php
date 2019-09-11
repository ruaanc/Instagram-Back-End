<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{   

    /**
     * @var Post
     */
    private $post;


    public function __construct(Post $post) {

        $this->post = $post;

    }

    /**
     * Show all posts
     */
    public function index() {
        return response()->json($this->post->paginate(10));
    }

    /*
        * Show post by id
    */
    public function show($id) {
        return 'Controller show created with successfully !';
    }

    /*
        * Register post
    */
    public function store() {
        return 'Controller store created with successfully !';
    }

    /*
        * Update post
    */
    public function update() {
        return 'Controller update created with successfully !';
    }

    /*
        * Delete post
    */
    public function destroy() {
        return 'Controller destroy created with successfully !';
    }

    /*
        * Like post
    */
    public function like() {
        return 'Controller like created with successfully !';
    }
}
