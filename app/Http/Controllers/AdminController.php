<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Services\AdminService;
use App\Models\Cliente;

use function Ramsey\Uuid\v1;

class AdminController extends Controller
{

    protected $requests;   

    public function __construct(AdminService $adminService)
    {
        $this->adminService = $adminService;
    }

    public function index()
    {        
        // $cliente = new Cliente();
        // $cliente->nome = "Teste";

        // $cliente->save();

        return view('admin.enviarConvite');

        
    }

    public function enviarConvite($request){
        dd($request);
        $id_invite = $this->adminService->criarInvite($request);

        $this->adminService->enviarConvite($id_invite); 
        
    }
    
    public function accept($token){
        dd($token);
    }

}
