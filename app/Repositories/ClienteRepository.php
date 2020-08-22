<?php

namespace App\Repositories;

use App\Models\Cliente;

class ClienteRepository{


    public function save($data){

        $cliente = new Cliente();

        $cliente->fill($data);
        $cliente->save();

        return $cliente->fresh();

    }

    public function getAll(){

        $clientes = Cliente::all();

        return $clientes;

    }

}
