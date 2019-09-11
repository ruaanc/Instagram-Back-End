<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use \App\API\ApiError;

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

     /**
     * Show post by id
     */
    public function show($id) {
        $post = $this->post->find($id);

        if(! $post) return response()->json(['data' => ['msg' => 'Post não encontrado!']], 404);
        
        $data = ['data' => $post];
        return response()->json($data);
    }

    /**
     * Register post
     */
    public function store(Request $request) {
        try {
            $postData = $request->all();
            $this->post->create($postData);
            return response()->json(['msg' => 'Post criado com sucesso!'], 201);
        } catch (\Exception $e) {
            if(config('app.debug')){
                return response()->json(ApiError::errorMessage($e->getMessage(), 1010), 500);
            }
            return reponse()->json(ApiError::errorMessage('Houve um erro ao realizar operação', 1010), 500);
        }
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
