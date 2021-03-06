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

    public function find($id){

        $cliente = Cliente::find($id);

        return $cliente;

    }

    public function getNome($id){

        $cliente = Cliente::find($id);

        return $cliente->nome;

    }

    public function update($request, $id){

        $cliente = Cliente::find($id);
        $cliente->nome = $request->nome;
        $cliente->doc = $request->doc;
        $cliente->save();

        return $cliente;

    }

}
