<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function index()
    {
        $posts = Post::take(3)->get();
        return view('welcome', compact('posts'));
    }

    public function nosotros(){
        return view('pagina.nosotros');
    }

    public function servicios(){
        return view('pagina.servicios');
    }

    public function normas(){
        return view('pagina.normas');
    }

    public function contacto(){
        return view('pagina.contacto');
    }


    public function post($id)
    {        
        $post = Post::findOrFail($id);
        return view('entrada', compact('post'));
    }

    public function posts()
    {
        $posts = Post::paginate(6);
        return view('entradas', compact('posts'));
    }
}
