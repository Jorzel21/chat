<?php

namespace App\Http\Controllers;

use App\Http\Services\DepartamentoService;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{

    protected $departamentoService;

    public function __construct (DepartamentoService $departamentoService){

        $this->departamentoService = $departamentoService;

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = ['status' => 200];

        try {
           $status        = $this->departamentoService->getAllStatus();
           $departamentos = $this->departamentoService->getAllDepartamentos();

        }catch(\Exception $e){

            $result =
                [
                    'status' => 500,
                    'error'  => $e->getMessage()
                ];

        }

        return view('departamentos.index', compact('departamentos','status'));
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
        $data = $request->all();

        $result = ['status' => 200];

        try {

            $result['data'] = $this->departamentoService->saveDepartamentoData($data);

        }
        catch(\Exception $e){

            $result =
                [
                    'status' => 500,
                    'error'  => $e->getMessage()
                ];

        }

        
        return redirect()->route('departamentos.index');
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
        $departamento = $this->departamentoService->getDepartamento($id);
        $status = $this->departamentoService->getAllStatus();
        return view('departamentos.edit', compact('departamento', 'status'));
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
        try{
            $cliente = $this->departamentoService->update($request,$id);
        }catch(\Exception $e){
            flash('Não foi possível atualizar.', $e)->error();
        }

        return redirect()->route('departamentos.index');
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
