<?php


namespace App\Http\Services;

use App\Repositories\ClienteRepository;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;
use App\Repositories\InviteRepository;
use App\Repositories\UserRepository;
use App\Repositories\UserClienteRepository;
use PhpParser\Node\Expr\Throw_;

class RegisterService
{
    public $clienteRepository;

    public function __construct(InviteRepository $inviteRepository, UserRepository $userRepository, UserClienteRepository $userClienteRepository)
    {
        $this->inviteRepository = $inviteRepository;
        $this->userRepository = $userRepository;
        $this->userClienteRepository = $userClienteRepository;
    }

    public function storeUser($data)
    {   
        $user_id = $this->userRepository->store($data);
        
        return $user_id;
    }

    public function updateStatusInvite($id)
    {   
        $cliente_id = $this->inviteRepository->updateStatus($id);        
        
        return $cliente_id;
       
    }

    public function storeUserCliente($data)
    {   
        $user_cliente = $this->userClienteRepository->store($data);
        
        return $user_cliente;
    }

    public function verficarStatus($id)
    {   
        $status = $this->inviteRepository->verificaStatus($id);
        
        if($status){
            throw new \Exception('Nã é possível criar esse usuário, token já utilizado!');
        }
        else{
            return $status;
        }
    }

}
