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

        $invite = $this->inviteRepository->find($data['id_invite']);

        $user = $this->userRepository->store($data);

        $this->userClienteRepository->store( ['user_id' => $user->id,
        'cliente_id' => $invite->cliente_id,
        'nivel' => $invite->nivel
       ]);
        // dd($data, $invite->status, $cliente_id, $user_id);
        return $user;
    }

    public function updateUser($data, $id)
    {

        $user_id = $this->userRepository->update($data, $id);
        dd('em', $user_id);
        return $user_id;
    }


    public function updateStatusInvite($id)
    {
        $cliente_id = $this->inviteRepository->updateStatus($id);

        return $cliente_id;

    }

    public function verficaUsuarioExiste($data)
    {
        $invite = $this->inviteRepository->find($data['id_invite']);

        $user = $this->userRepository->store($data);
    }

}
