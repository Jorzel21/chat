<?php


namespace App\Http\Services;


use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Repositories\InviteRepository;

class AdminService
{   
    public $repository;
    public $inviteRepository;

    public function __construct(InviteRepository $inviteRepository)
    {
        $this->inviteRepository = $inviteRepository;
    }
   

    public function enviarConvite($id)
    {
        Mail::send('emails.index',['id' => $id], function ($m) use ($id) {
            $m->from('sistema@beedelivery.com.br', 'Your Application');

            $m->to('jorzelalves@hotmail.com')->subject('Your Reminder!');
        });
    }  

    public function criarInvite(){
        $request = [
            'email' => 'jorzel@beedelivery.com.br',            
            'cliente_id' => '701271b9-c6cf-4262-a8d9-edd1e79cbfb9',
            'nivel' => 'maneger'
        ];

        $id_invite = $this->inviteRepository->store($request);
        
        return $id_invite;
    }
}