<?php

namespace App\Http\Controllers;
use App\Models\CenDocente;
use Illuminate\Http\Request;




class CenDocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
     return view ('cen_docentes');
 }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('cen_docentes');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //establece las validaciones de campos dentro de los inputs del formulario
        $request->validate([
          'denominacion'=>'required|string|min:2|max:12',
            'codigo'=>'required|string|min:2|max:12',
            'cif'=>'required|string|min:2|max:12',
            'titularidad' => 'required|in:publica,privada,concertada',
            'dir_postal' => 'nullable|string|max:100',
            'cp' => 'nullable|digits:5',
            'nombre_director'=>'required|string|min:2|max:15',
            'apellido1_director'=>'required|string|min:2|max:15',
            'apellido2_director' => 'nullable|string|max:15',
            'identificador'=> 'required|string|max:15|unique:cen_docentes',
            'tipo_identificador' => 'required|in:dni,nie,pasaporte,sin especificar'

        ]);

        $cen_docente = new CenDocente([
            'denominacion' => $request->get('denominacion'),
            'codigo' => $request->get('codigo'),
            'cif' => $request->get('cif'),
            'titularidad' => $request->get('titularidad'),
            'dir_postal' => $request->get('dir_postal'),
            'cp' => $request->get('cp'),
            'nombre_director' => $request->get('nombre_director'),
            'apellido1_director' => $request->get('apellido1_director'),
            'apellido2_director' => $request->get('apellido2_director'),
            'identificador' => $request->get('identificador'),
            'tipo_identificador' => $request->get('tipo_identificador'),
        ]);
        $cen_docente->save();
        return redirect('/')->with('success', 'Centro docente creado');


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
