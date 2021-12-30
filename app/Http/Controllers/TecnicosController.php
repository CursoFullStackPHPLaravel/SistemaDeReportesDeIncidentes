<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

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
        return view('tecnicos.agregar-tecnico');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:150',
            'cuil' => 'required'
        ]);

        $nombre = $request->input('nombre');
        $cuil = $request->input('cuil');
        $mail = $request->input('mail');
        $telefono = $request->input('telefono');

        DB::insert('INSERT INTO Tecnicos (nombre, cuil, mail, telefono)
        VALUES (?, ?, ?, ?)', [$nombre, $cuil, $mail, $telefono]);

        Session::flash('mensaje', 'Registro creado con exito');

        return redirect()->route('tecnicos.index');
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
        if (is_numeric($id) == false){
            return response('', 404);
        }

        $tecnico = DB::table('Tecnicos')->where('idTecnico', '=', $id)->first();
        $especialidades = DB::select("SELECT idEspecialidades as ID, nombreEspecialidad as Nombre FROM `Especialidades`
        INNER JOIN Tecnico_Especialidad
        ON Especialidades.idEspecialidades = Tecnico_Especialidad.idEspecialidad
        AND Tecnico_Especialidad.idTecnico = $id ");

        //var_dump($tecnico);

        $parameters = [
            'tecnico'=>$tecnico,
            'especialidades'=>$especialidades
        ];

        return view('tecnicos.edit-form', $parameters);
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
        $request->validate([
            'nombre' => 'required|max:150',
            'cuil' => 'required'
        ]);

        $nombre = $request->input('nombre');
        $cuil = $request->input('cuil');
        $mail = $request->input('mail');
        $telefono = $request->input('telefono');

        DB::update('UPDATE Tecnicos
        SET nombre = :nombre, cuil = :cuil, mail = :mail, telefono = :tel
        WHERE idTecnico = :id ',
        ['nombre' => $nombre, 'cuil'=>$cuil, 'mail'=>$mail, 'tel'=>$telefono, 'id'=>$id]);

        return redirect()->route('tecnicos.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (is_numeric($id) == false){
            return response('', 404);
        }

        DB::delete('DELETE FROM Tecnicos WHERE idTecnico = :id', ['id'=>$id]);

        Session::flash('mensaje', 'Registro eliminado con exito');

        return redirect()->route('tecnicos.index');
    }
}
