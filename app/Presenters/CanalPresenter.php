<?php


namespace App\Presenters;

use App\Models\Cliente;
use Carbon\Carbon;
use Laracodes\Presenter\Presenter;
use App\Repositories\ClienteRepository;

class CanalPresenter extends Presenter
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

    public function dataCancelamento()
    {
        $data_cancelamento = ' - ';

        if($this->model->data_cancelamento){
            $data_cancelamento = $this->model->data_cancelamento->format('d/m/Y');
        }

        return $data_cancelamento;
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