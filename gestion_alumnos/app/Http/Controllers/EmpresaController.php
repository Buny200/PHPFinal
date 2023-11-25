<?php

namespace App\Http\Controllers;
use empresas;
use App\Models\Alumno;
use App\Http\Requests\StoreEmpresaRequest;
use App\Http\Requests\UpdateEmpresaRequest;
use Illuminate\Support\Facades\Redirect;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empresas= Alumno::all();
        return view("empresas.listado",["empresas"=>$empresas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("empresas.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmpresaRequest $request)
    {
        $empresa=new Alumno($request->input());
        $empresa->saveOrFail();
        $empresas= Alumno::all();
        return view("empresas.listado",["empresas"=>$empresas]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $empresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $empresa)
    {
                return view("empresas.editar",["empresa"=>$empresa]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmpresaRequest $request, Alumno $empresa)
    {
        $empresa->update($request->input());
        $empresas= Alumno::all();
        return view("empresas.listado",["empresas"=>$empresas]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $empresa)
    {
        $empresa->delete();
        $empresas= Alumno::all();
        return view("empresas.listado",["empresas"=>$empresas]);
    }
}
