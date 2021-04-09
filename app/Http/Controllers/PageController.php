<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Mail;

class PageController extends Controller
{
    //

    public function index()
    {
        $posts = Post::take(3)->get();
        return view('welcome', compact('posts'));
    }

    public function nosotros()
    {
        return view('nosotros');
    }

    public function servicios()
    {
        return view('servicios');
    }

    public function portafolio()
    {
        return view('portafolio');
    }

    // tours portfolio

    public function tortugas()
    {
        return view('portafolio.tortugas');
    }


    public function manglares()
    {
        return view('portafolio.manglares');
    }

    public function caracucho()
    {
        return view('portafolio.caracucho');
    }


    public function contacto()
    {
        return view('contacto');
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

    public function contacto_email(Request $request)
    {
        $subject = $request->titulo;
        $for = "informes@piuratrips.com";
        Mail::send('email', $request->all(), function ($msj) use ($subject, $for) {
            $msj->from("webmaster@piuratrips.com", "Formulario contacto - Piuratrips");
            $msj->subject($subject);
            $msj->to($for);
        });
        // return redirect()->back();

        return back()->with('status', 'Mensaje enviado con exito !!!');
    }
}
