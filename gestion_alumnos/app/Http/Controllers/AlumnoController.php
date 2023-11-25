<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Http\Requests\StoreAlumnoRequest;
use App\Http\Requests\UpdateAlumnoRequest;
use Illuminate\Support\Facades\Schema;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos= Alumno::all();
        $campos=Schema::getColumnListing("alumnos");
        unset($campos[array_search("created_at",$campos)]);
        unset($campos[array_search("updated_at",$campos)]);
        return view("alumnos.listado",[
            'campos'=>$campos,
            'filas'=>$alumnos,
            'titulo'=>"Alumnos"]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("alumnos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAlumnoRequest $request)
    {
        $alumno=new Alumno($request->input());
        $alumno->saveOrFail();
        $alumnos= Alumno::all();
        return view("alumnos.listado",["empresas"=>$alumnos]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        return view("alumnos.editar", ["alumno" => $alumno]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAlumnoRequest $request, Alumno $alumno)
    {
        $alumno->update($request->input());

        return redirect()->route('alumnos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        $alumnos=Alumno::all();
        return response()->json($alumnos);

    }
}
