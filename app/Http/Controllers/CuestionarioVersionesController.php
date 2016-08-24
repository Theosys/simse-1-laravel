<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CuestionarioVersionesController extends Controller
{
    public function index(Requests $request)    {
        //$request = new Request
        dd($request);
        $cuestionarios = Cuestionario::where('i_codinst','=',1)->get();
        return view('cuestionarios.index', ['cuestionarios' => $cuestionarios]);
    }
}
