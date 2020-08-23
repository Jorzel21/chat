<?php


namespace App\Http\Services;

use App\Repositories\CanalRepository;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class CanalService
{
    public $canalRepository;

    public function __construct(CanalRepository $canalRepository)
    {
        $this->canalRepository = $canalRepository;
    }


    public function saveCanalData($data)
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
        
        $result = $this->canalRepository->save($data);

        return $result;

    }

    public function getAllCanais()
    {

        $result = $this->canalRepository->getAll();

        return $result;

    }

    public function getAllStatus()
    {

        $status = $this->canalRepository->getStatus();

        return $status;

    }


    public function getCanal($id)    {

        $canal = $this->canalRepository->getCanal($id);

        return $canal;

    }

    public function update($request,$id)
    {
        $result = $this->canalRepository->update($request, $id);

        return $result;

    }

}
