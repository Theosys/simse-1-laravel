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
<<<<<<< HEAD
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
=======
>>>>>>> master
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        return view('home');
    }
<<<<<<< HEAD
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
}
=======
}
>>>>>>> master
