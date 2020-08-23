<?php


namespace App\Presenters;

use App\Models\Departamento;
use Carbon\Carbon;
use Laracodes\Presenter\Presenter;
use App\Repositories\ClienteRepository;

class DepartamentoPresenter extends Presenter
{ 

    public function nome(){
        $clienteRepo = new ClienteRepository();
        $cliente = $clienteRepo->getNome($this->model->cliente_id);
      

        return $cliente;
    }

    public function data()
    {
        $data = ' - ';

        if($this->model->created_at){
            $data = $this->model->created_at->format('d/m/Y');
        }

        return $data;
    }

     public function status()
    {
        $status     = $this->model->status;

        if($status == 'ativo'){
            return 'Ativo';
        }

        if($status == 'inativo'){
            return 'Inativo';
        }     

    }
    
}