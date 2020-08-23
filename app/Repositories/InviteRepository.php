<?php

namespace App\Repositories;

use App\Models\Invite;

class InviteRepository{

    public function store($request){

        $invite = Invite::create($request);
        $invite->save();
        
        return $invite;
        
    }  

    public function find($id){

        $invite = Invite::find($id);

        return $invite;

    }

}
