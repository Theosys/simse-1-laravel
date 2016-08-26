<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\EstructuraCuestionario;
use App\Pregunta;

class EstrucCuestionariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estruccuest = EstructuraCuestionario::where('i_estreg','=',1)->where('i_codver','=',4)->whereIn('i_codpreg', [1, 4, 5])->get();
        //dd($estruccuest[0]->i_codpreg);
        //$preg = array();
        $preg = '[';$count=0;
        foreach ($estruccuest as $key => $value) {
            if ($key=='i_codpreg') {
                // array_push($preg, $value);
                $count+=1;
                $preg.=$value;
            }
        }
        foreach ($estruccuest as $est) {
            if ($est->i_codpreg) {
                $count+=1;
                //array_push($preg, $est->i_codpreg);
                $preg.=$est->i_codpreg;
            }
        }

        $preg.=']';
        //$preguntas = Pregunta::whereIn('i_codpreg',$preg);
        dd($preg);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
