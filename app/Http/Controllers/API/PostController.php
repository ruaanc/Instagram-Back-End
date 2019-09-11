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

    /**
     * Update post
    */
    public function update(Request $request, $id) {
        try {
            $postData = $request->all();
            $post = $this->post->find($id);
            $post->update($postData);
            return response()->json(['msg' => 'Post atualizado com sucesso!'], 201);
        } catch (\Exception $e) {
            if(config('app.debug')){
                return response()->json(ApiError::errorMessage($e->getMessage(), 1011), 500);
            }
            return reponse()->json(ApiError::errorMessage('Houve um erro ao realizar operação atualizar', 1011), 500);
        }
    }

    /**
     * Delete post
    */
    public function destroy(Post $id) {
        try {
            $id->delete();
            return response()->json(['data' => ['msg' => 'Post: '. $id->name . ' removido com sucesso!']], 200);
        } catch (\Exception $e) {
            if(config('app.debug')){
                return response()->json(ApiError::errorMessage($e->getMessage(), 1012), 500);
            }
            return reponse()->json(ApiError::errorMessage('Houve um erro ao realizar operação de remover', 1012), 500);
        }
    }

    /**
     * Like post
    */
    public function like(Request $request, $id) {
        try {
            $postData = $request->all();
            $post = $this->post->find($id);
            $post->like += 1;
            $post->update($postData);
            return response()->json(['msg' => 'Curtida!'], 201);
        } catch (\Exception $e) {
            if(config('app.debug')){
                return response()->json(ApiError::errorMessage($e->getMessage(), 1011), 500);
            }
            return reponse()->json(ApiError::errorMessage('Houve um erro ao realizar operação atualizar', 1011), 500);
        }
    }
}
