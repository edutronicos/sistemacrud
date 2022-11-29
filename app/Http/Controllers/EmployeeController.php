<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    
    public function index()
    {

        $search = request('search');

        if($search)
        {
            $dados = Employee::where('nome', 'like', '%' . $search . '%')->
                            orWhere('ramal', 'like', '%'. $search .'%')->
                            orWhere('celular', 'like', '%'. $search .'%')->
                            orWhere('setor', 'like', '%'. $search .'%')->
                            orWhere('email1', 'like', '%'. $search .'%')->
                            orWhere('email2', 'like', '%'. $search .'%')->
                            orWhere('email3', 'like', '%'. $search .'%')->
                            orWhere('email4', 'like', '%'. $search .'%')->get();
        }
        else
        {
            $dados = Employee::orderBy('nome', 'asc')->get();
        }
        
        
        return view('funcionarios.funcionarios-index', compact('dados'));
    }

    
    public function create()
    {
        return view('funcionarios.novo-funcionario');
    }

    
    public function store(Request $request)
    {
        Employee::create([
            'nome'      => $request->nome,
            'celular'   => $request->celular,
            'setor'     => $request->setor,
            'ramal'     => $request->ramal,
            'email1'     => $request->email1,
            'email2'     => $request->email2,
            'email3'     => $request->email3,
            'email4'     => $request->email4,

        ]);

        return view('funcionarios.sucesso');
    }

    
    public function show(Employee $employee)
    {
        //
    }

    
    public function edit(Employee $employee, $id)
    {
        $dados = Employee::find($id);
        
        return view ('funcionarios.editar-funcionario', compact('dados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee, $id)
    {
        Employee::find($id)->update([
            'nome'      => $request->nome,
            'celular'   => $request->celular,
            'setor'     => $request->setor,
            'ramal'     => $request->ramal,
            'email1'    => $request->email1,
            'email2'    => $request->email2,
            'email3'    => $request->email3,
            'email4'    => $request->email4,

        ]);

        return redirect('/funcionarios_index');
    }

    
    public function destroy(Employee $employee, $id)
    {
        Employee::find($id)->delete();

        return redirect('/funcionarios_index');

    }
}
