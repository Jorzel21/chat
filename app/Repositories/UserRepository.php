<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Hash;
use App\User;

class UserRepository{   

    public function store($data){
        
        $clienteUser = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        $clienteUser->save();

        return $clienteUser->id;
                
    }
  
}