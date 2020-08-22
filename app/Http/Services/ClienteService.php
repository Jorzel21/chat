<?php


namespace App\Http\Services;

use App\Repositories\ClienteRepository;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class ClienteService
{
    public $clienteRepository;

    public function __construct()
    {
        $this->clienteRepository = new ClienteRepository();
    }


    public function saveClienteData($data)
    {

        $validator = Validator::make($data,
        [
            'nome'       => 'required',
        ]);

        if($validator->fails()) {

            throw new InvalidArgumentException($validator->errors()->first());

        }

        $result = $this->clienteRepository->save($data);

        return $result;

    }

    public function getAllClientes()
    {

        $result = $this->clienteRepository->getAll();

        return $result;

    }

}
