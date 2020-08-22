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
        if($invite->status){
            return "Token já utiliado";
        }else{         
            $invite->status = true;
            $invite->save();  

            return $invite->cliente_id;
        }
        
        
    }

    public function verificaStatus($id){
        
        $invite = Invite::find($id);
        if($invite->status){
            return true;
        }else{         
            return false;
        }
        
        
    }
  
}