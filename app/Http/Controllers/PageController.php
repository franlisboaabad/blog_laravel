<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        return view('pagina.nosotros');
    }

    public function servicios()
    {
        return view('pagina.servicios');
    }

    public function normas()
    {
        return view('pagina.normas');
    }
    //isos 
    public function responsabilidad_social()
    {
        $posts = Post::take(6)->get();
        return view('pagina.isos.responsabilidad_social', compact('posts'));
    }

    public function sistema_alimentaria()
    {
        $posts = Post::take(6)->get();
        return view('pagina.isos.sistema_alimentaria', compact('posts'));
    }

    public function sistema_ambiental()
    {
        $posts = Post::take(6)->get();
        return view('pagina.isos.sistema_ambiental', compact('posts'));
    }

    public function sistema_antisoborno()
    {
        $posts = Post::take(6)->get();
        return view('pagina.isos.sistema_antisoborno', compact('posts'));
    }

    public function sistema_calidad()
    {
        $posts = Post::take(6)->get();
        return view('pagina.isos.sistema_calidad', compact('posts'));
    }

    public function sistema_energetica()
    {
        $posts = Post::take(6)->get();
        return view('pagina.isos.sistema_energetica', compact('posts'));
    }

    public function sistema_gestion()
    {
        $posts = Post::take(6)->get();
        return view('pagina.isos.sistema_gestion', compact('posts'));
    }

    public function sistema_trabajo()
    {
        $posts = Post::take(6)->get();
        return view('pagina.isos.sistema_trabajo', compact('posts'));
    }

    public function sistema_vial()
    {
        $posts = Post::take(6)->get();
        return view('pagina.isos.sistema_vial', compact('posts'));
    }
    //servicios 

    public function auditoria()
    {
        return view('pagina.servicios.auditoria');
    }

    public function capacitacion()
    {
        return view('pagina.servicios.capacitacion');
    }

    public function cumplimiento()
    {
        return view('pagina.servicios.cumplimiento');
    }

    public function implementacion()
    {
        return view('pagina.servicios.implementacion');
    }

    public function contacto()
    {
        return view('pagina.contacto');
    }


    public function post($id)
    {
        $post = Post::findOrFail($id);
        $posts = Post::take(6)->get();
        return view('entrada', compact('post','posts'));
    }

    public function posts()
    {
        $posts = Post::paginate(6);
        return view('entradas', compact('posts'));
    }

    public function contacto_email(Request $request)
    {
        $subject = $request->titulo;
        $for = "ideassoftperu@gmail.com";
        Mail::send('email', $request->all(), function ($msj) use ($subject, $for) {
            $msj->from("webmaster@ostconsultores.com", "FORMULARIO CONTACTO OSTCONSULTORES");
            $msj->subject($subject);
            $msj->to($for);
        });
        // return redirect()->back();

        return back()->with('status', 'Mensaje enviado con exito !!!');
    }
}
