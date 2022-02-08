<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto=trim($request->get('texto'));
        $permissions = DB::table('permissions')
            ->join('employees', 'permissions.employee_id', '=', 'employees.id')
            ->select('permissions.id','employees.cedula','employees.nombre','employees.apellido','permissions.fecha_de_inicio','permissions.fecha_de_culminacion')
            ->where('employees.apellido','LIKE', '%'.$texto.'%')
            ->orWhere('employees.nombre','LIKE', '%'.$texto.'%')
            ->orderBy('permissions.id','asc')
            ->paginate(10);
        return view('permissions.permisos', compact('permissions','texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permissions.permisoscreate');
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

        $datosPermission = request()->except('_token');
        Permission::insert($datosPermission);
        return redirect('permisos')->with('mensaje','Permiso agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $permission=Permission::findOrFail($id);
        return view('permissions.permisosedit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosPermission = request()->except(['_token','_method']);
        Permission::where('id', '=', $id)->update($datosPermission);

        $permission=Permission::findOrFail($id);
        return redirect('permisos.index')->with('mensaje','Permiso Modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Permission::destroy($id);
        return redirect('permisos.index')->with('mensaje','Permiso Borrado');
    }
}
