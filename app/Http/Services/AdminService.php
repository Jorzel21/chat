<?php


namespace App\Http\Services;


use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Repositories\InviteRepository;
use App\Repositories\ClienteRepository;

class AdminService
{   
    public $repository;
    public $inviteRepository;

    public function __construct(InviteRepository $inviteRepository, ClienteRepository $clienteRepository)
    {
        $this->inviteRepository = $inviteRepository;
        $this->clienteRepository = $clienteRepository;
    }
   

    public function enviarConvite($invite)
    {
        Mail::send('emails.index',['id' => $invite->id], function ($m) use ($invite) {
            $m->from('sistema@beedelivery.com.br', 'Convite para participar do chat');

            $m->to($invite->email)->subject('Convite TalkBee - '. $invite->cliente_id);
        });
    }  

    public function criarInvite($request){
        
        $data = [
            'email' => $request->email,            
            'cliente_id' => $request->cliente_id,
            'nivel' => $request->nivel
        ];

        $invite = $this->inviteRepository->store($data);
        
        return $invite;
    }

    public function getClientes(){
        return $this->clienteRepository->getAll();
    }
}