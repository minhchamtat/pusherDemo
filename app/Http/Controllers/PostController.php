<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Transformers\PostsTransformer;

class PostController extends Controller
{
    protected $postTransformer;

    public function __construct(PostsTransformer $postTransformer)
    {
    	$this->postTransformer = $postTransformer;
    }

    public function getPost()
    {
    	$post = Post::with('user')->first();
    	$a = $this->postTransformer->transform($post);
    	dd($a);
    }
}
