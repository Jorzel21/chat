<?php

namespace App\Repositories;

use App\User;

class UserRepository{

    public function store($request){

        $user = User::create($request);
        $user->save();

        return $user;

    }

}
