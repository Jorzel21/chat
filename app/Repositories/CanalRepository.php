<?php

namespace App\Repositories;

use App\Models\Canal;

class CanalRepository{


    public function save($data){

        $canal = new Canal();

        $canal->fill($data);
        $canal->save();

        return $canal->fresh();

    }

    public function getAll(){

        $canais = Canal::all();

        return $canais;

    }

}
