<?php


namespace App\Http\Services;

use App\Repositories\DepartamentoRepository;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class DepartamentoService
{
    public $departamentoRepository;

    public function __construct()
    {
        $this->departamentoRepository = new DepartamentoRepository();
    }


    public function saveDepartamentoData($data)
    {

        $validator = Validator::make($data,
        [
            'nome'       => 'required',
            'status'     => 'in:ativo,inativo',
            'cliente_id' => 'required'
        ]);

        if($validator->fails()) {

            throw new InvalidArgumentException($validator->errors()->first());

        }

        $result = $this->departamentoRepository->save($data);

        return $result;

    }

    public function getAllDepartamentos()
    {

        $result = $this->departamentoRepository->getAll();

        return $result;

    }

    public function getAllStatus()
    {

        $status = $this->departamentoRepository->getStatus();

        return $status;

    }

    public function getDepartamento($id)    {

        $canal = $this->departamentoRepository->getDepartamento($id);

        return $canal;

    }

    public function update($request,$id)
    {
        $result = $this->departamentoRepository->update($request, $id);

        return $result;

    }


}
