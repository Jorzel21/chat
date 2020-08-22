<?php

namespace App\Repositories;

use App\Models\ClienteUser;

class UserClienteRepository{   

    public function store($request){
        
        $clienteUser = ClienteUser::create($request);
        $clienteUser->save();
                
    }
  
}