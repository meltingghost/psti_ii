<?php

namespace App\Http\Controllers;

use App\Models\Assist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AssistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto=trim($request->get('texto'));
        $assists = DB::table('assists')
            ->join('employees', 'assists.employee_id', '=', 'employees.id')
            ->select('assists.id','employees.cedula','assists.fecha','assists.hora','employees.nombre','employees.apellido','assists.observacion')
            ->where('employees.apellido','LIKE', '%'.$texto.'%')
            ->orWhere('employees.nombre','LIKE', '%'.$texto.'%')
            ->orderBy('assists.id','asc')
            ->paginate(10);
        return view('control.control', compact('assists','texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('control.controlcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mensaje=[
            'required'=>'El :attribute es requerido',
        ];

        $this->validate($request, $mensaje);

        $datosAssist = request()->except('_token');
        Assist::insert($datosAssist);
        return redirect('control')->with('mensaje','Asistencia agregada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Assist  $assist
     * @return \Illuminate\Http\Response
     */
    public function show(Assist $assist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Assist  $assist
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $assist=Assist::findOrFail($id);
        return view('control.controledit', compact('assist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Assist  $assist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosAssist = request()->except(['_token','_method']);
        Assist::where('id', '=', $id)->update($datosAssist);

        $assist=Assist::findOrFail($id);
        return redirect('control.index')->with('mensaje','Asistencia Modificada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Assist  $assist
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Assist::destroy($id);
        return redirect('control.index')->with('mensaje','Asistencia Borrada');
    }
}
