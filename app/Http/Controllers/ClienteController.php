<?php

namespace App\Http\Controllers;

use App\Http\Services\ClienteService;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    protected $clienteService;

    public function __construct (ClienteService $clienteService){

        $this->clienteService = $clienteService;

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

            $result['data'] = $this->clienteService->getAllClientes();

        }catch(\Exception $e){

            $result =
                [
                    'status' => 500,
                    'error'  => $e->getMessage()
                ];

        }

        return $result;
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

            $result['data'] = $this->clienteService->saveClienteData($data);

        }catch(\Exception $e){

            $result =
                [
                    'status' => 500,
                    'error'  => $e->getMessage()
                ];

        }

        return $result;
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
