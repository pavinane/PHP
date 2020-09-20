<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{

     /* fetching fake json method */

    public function getAllPost()
    
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $response -> json();
    }

    public function getPostById($id)
    {
        $post = Http::get('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $post ->json();
    }
    
    /* Add a new post in json fetching method */

    public function addPost()
    {
        $post = Http::post('https://jsonplaceholder.typicode.com/posts/',[
            'userId' => 1,
            'id' => 101,
            'title' => 'New Post Title',
            'body' => 'New Post Description'
        ]);
        return $post ->json();
    }

    public function updatePost()
    {
        $response = Http::put('https://jsonplaceholder.typicode.com/posts/1',[
            'title' => 'Update Post Title',
            'body' => 'update Post in Description',
            'id' => 11
        ]);
        return $response->json();
    }
    public function deletePost($id)
    {
        $post = Http::delete('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $post ->json();
    }
}
