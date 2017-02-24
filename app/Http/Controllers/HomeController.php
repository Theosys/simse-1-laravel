<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.2/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return Response
     */

    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function inicio()
    {
        return view('cenepred.inicio');
    }
    public function glosario()
    {
        return view('cenepred.glosario');
    }
    public function normativas()
    {
        return view('cenepred.normativas');
    }
    public function directorio()
    {
        return view('cenepred.directorio');
    }
    public function directorio_grd()
    {
        return view('cenepred.directorio_grd');
    }
    public function directorio_mapas()
    {
        return view('cenepred.directorio_mapas');
    }
    public function escenario_riesgos()
    {
        return view('cenepred.escenario_riesgos');
    }
    public function er_001()
    {
        return view('cenepred.er_001');
    }
    public function tm_er()
    {
        return view('cenepred.tm_er');
    }
    public function contacto()
    {
        return view('cenepred.contacto');
    }
    public function estadistica()
    {
        return view('cenepred.estadistica');
    }
    public function consulta()
    {
        return view('cenepred.consulta');
    }
    public function dep()
    {
        return view('cenepred.departamentos');
    }
    public function guardar(Request $request)    {
        
        //requiere: use Laracasts\Flash\Flash;
        //Flash::success('Estimado '.$request->name.'Estaremos en contacto con usted lo mas pronto. Gracias por contactarnos.');
        flash('Estimado '.$request->name.' estaremos en contacto con usted lo mas pronto. Gracias por contactarnos.', 'info');
        return view('cenepred.contacto');
    }
}
