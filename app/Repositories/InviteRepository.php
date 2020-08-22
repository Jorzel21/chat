<?php

namespace App\Repositories;

use App\Models\Invite;

class InviteRepository{   

    public function store($request){
        
        $invite = Invite::create($request);
        $invite->save();
        
        return $invite->id;
        
    }

    public function updateStatus($id){
        
        $invite = Invite::find($id);
        
        $invite->status = true;
        $invite->save();
        
    }
  
}