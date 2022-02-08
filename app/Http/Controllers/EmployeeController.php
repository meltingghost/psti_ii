<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto=trim($request->get('texto'));
        $employees = DB::table('employees')
            ->select('id','cedula','nombre','apellido','fecha_de_nacimiento','edad','sexo','correo','telefono','cargo')
            ->where('apellido','LIKE', '%'.$texto.'%')
            ->orWhere('nombre','LIKE', '%'.$texto.'%')
            ->orderBy('id','asc')
            ->distinct('cedula','nombre')
            ->paginate(10);
        return view('registro.registro', compact('employees','texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registro.registrocreate');
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

        $datosEmployee = request()->except('_token');
        Employee::insert($datosEmployee);
        return redirect('registro')->with('mensaje','Empleado agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        
        $employee=Employee::findOrFail($id);
        return view('registro.registroedit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosEmployee = request()->except(['_token','_method']);
        Employee::where('id', '=', $id)->update($datosEmployee);

        $employee=Employee::findOrFail($id);

        return redirect('registro.index')->with('mensaje','Empleado Modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*$employee=Employee::findOrFail($id);*/
        Employee::destroy($id);
        return redirect('registro.index')->with('mensaje','Empleado Borrado');
    }
}
