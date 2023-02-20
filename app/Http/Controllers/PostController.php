<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class PostController extends Controller
{
    #[NoReturn] public function index()
    {
        return view('posts.index', [
            'posts' => Post::paginate(15)
        ]);
    }
}
