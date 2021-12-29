<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TecnicosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tecnicos = DB::select('SELECT * FROM Tecnicos');
        $parameters = [
            'tecnicos'=>$tecnicos,
            'titulo'=>"Técnicos"
        ];

        return view('tecnicos.tecnicos', $parameters);

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
        $tecnico = DB::select("SELECT * FROM Tecnicos where idTecnico = $id ");
        $especialidades = DB::select("SELECT idEspecialidades as ID, nombreEspecialidad as Nombre FROM `Especialidades`
        INNER JOIN Tecnico_Especialidad
        ON Especialidades.idEspecialidades = Tecnico_Especialidad.idEspecialidad
        AND Tecnico_Especialidad.idTecnico = $id ");

        $parameters = [
            'tecnico'=>$tecnico,
            'especialidades'=>$especialidades
        ];

        return view('tecnicos.editTecnico', $parameters);
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
        //Validar el parametro!!!
        $query = DB::table('Tecnicos')->where('idTecnico', $id)->delete();

    }
}
