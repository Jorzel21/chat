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

    public function getCanal($id){

        $canal = Canal::find($id);
        return $canal;

    }
    public function getStatus(){

        $array = array(
            'inativo' => 'Inativo',
            'ativo' => 'Ativo'
        );

        return $array;
    }


    public function update($request, $id){

        $canal = Canal::find($id);
        $canal->nome = $request->nome;
        $canal->status = $request->status;
        $canal->save();

        return $canal;

    }

}
