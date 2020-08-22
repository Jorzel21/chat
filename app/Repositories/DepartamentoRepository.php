<?php

namespace App\Repositories;

use App\Models\Departamento;

class DepartamentoRepository{


    public function save($data){

        $departamento = new Departamento();

        $departamento->fill($data);
        $departamento->save();

        return $departamento->fresh();

    }

    public function getAll(){

        $departamentos = Departamento::all();

        return $departamentos;

    }

}
