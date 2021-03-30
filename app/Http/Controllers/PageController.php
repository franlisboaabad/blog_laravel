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
//isos 
public function responsabilidad_social(){
    return view('pagina.isos.responsabilidad_social');
}
 
public function sistema_alimentaria(){
    return view('pagina.isos.sistema_alimentaria');
}

public function sistema_ambiental(){
    return view('pagina.isos.sistema_ambiental');
}

public function sistema_antisoborno(){
    return view('pagina.isos.sistema_antisoborno');
}

public function sistema_calidad(){
    return view('pagina.isos.sistema_calidad');
}

public function sistema_energetica(){
    return view('pagina.isos.sistema_energetica');
}

public function sistema_gestion(){
    return view('pagina.isos.sistema_gestion');
}

public function sistema_trabajo(){
    return view('pagina.isos.sistema_trabajo');
}

public function sistema_vial(){
    return view('pagina.isos.sistema_vial');
}
//servicios 

public function auditoria(){
    return view('pagina.servicios.auditoria');
}

public function capacitacion(){
    return view('pagina.servicios.capacitacion');
}

public function cumplimiento(){
    return view('pagina.servicios.cumplimiento');
}

public function implementacion(){
    return view('pagina.servicios.implementacion');
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
