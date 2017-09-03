<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{


  public function index(){

      $post  = Post::all();
      return response()->json($post);


  }

}
