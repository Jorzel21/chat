<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Services\AdminService;
use App\Models\Cliente;

class AdminController extends Controller
{

    protected $requests;   

    public function __construct(AdminService $adminService)
    {
        $this->adminService = $adminService;
    }

    public function index()
    {        
        $cliente = new Cliente();
        $cliente->nome = "Teste";

        $cliente->save();


        // return view('admin.index');
    }

    public function enviarConvite(){
        $id_invite = $this->adminService->criarInvite();

        $this->adminService->enviarConvite($id_invite); 
        
    }
    
    public function accept($token){
        dd($token);
    }

}
