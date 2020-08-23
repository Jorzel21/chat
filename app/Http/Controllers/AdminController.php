<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Services\AdminService;
use Illuminate\Http\Request;
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
        $clientes = $this->adminService->getClientes();
        return view('admin.enviarConvite',compact('clientes'));
    }

    public function enviarConvite(Request $request){
        
        $invite = $this->adminService->criarInvite($request);

        $this->adminService->enviarConvite($invite); 
        
    }
    
    public function accept($token){
        dd($token);
    }

}
