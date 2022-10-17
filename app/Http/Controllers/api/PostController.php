<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return Post::all();
    }

    public function store(Request $request)
    {
       Post::create($request->all());
        
    }
    
    public function show(int $id)
    {
        return Post::findOrFail($id);


        // $postMolde = Post::witch(relations: 'seasons.post')->find($posts);
        // if ($postMolde === null){

        //     return response()->jason(['mensage' => 'Post not found'], status: 404);
        // }
        // return $postMolde;
    }
    
   
    public function update(Request $request, $id)
    {
       $post = Post::findOrFail($id);
       $post->update($request->all());
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
    }


}
