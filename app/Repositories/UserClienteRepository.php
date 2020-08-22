<?php

namespace App\Repositories;

use App\Models\ClienteUser;

class UserClienteRepository{

    public function store($request){

        $clienteUser = new ClienteUser();

        $clienteUser->user_id = $request['user_id'];
        $clienteUser->cliente_id = $request['cliente_id'];
        $clienteUser->nivel = $request['nivel'];

        $clienteUser->save();

        return $clienteUser;

    }

    public function getNivel($id){
        $nivel = ClienteUser::select('nivel')->where('user_id', '=', $id)->get();
        return $nivel;
    }

}
