<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public static function tambahData()
    {
            return view('tambah_data', [
                "tittle" => "tambahData",
                "posts" => Post::all()
            ]);    
    }
    public static function readData(Post $post)
    {
            return view('read_data', [
                "tittle" => "Baca Selengkapnya",
                "selengkapnya" => $post
            ]);
    }
}
