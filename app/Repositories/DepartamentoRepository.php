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

    public function getDepartamento($id){

        $departamento = Departamento::find($id);
        return $departamento;

    }
    public function getStatus(){

        $array = array(
            'inativo' => 'Inativo',
            'ativo' => 'Ativo'
        );

        return $array;
    }


    public function update($request, $id){

        $departamento = Departamento::find($id);
        $departamento->nome = $request->nome;
        $departamento->status = $request->status;
        $departamento->save();

        return $departamento;

    }
}