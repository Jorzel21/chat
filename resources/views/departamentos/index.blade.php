@extends('layouts.app')

@section('content')

    <div class="container-fluid py-4 d-flex flex-column flex-grow-1" style="min-height: calc(100vh - 82px)">

        <div class="row justify-content-center mt-4">
            <div class="col-12 col-sm-10 col-md-10 col-lg-8 col-xl-8">     
                <div class="card">
                    <div class="card-header">
                        <div class="row d-flex align-items-center">
                            <div class="col-4">
                                Clientes
                            </div>
                            <div class="col-8 d-flex justify-content-end">
                                <button type="button" class="btn btn-sm btn-info m-1" data-toggle="modal"
                                        data-target="#adicionarCliente" data-tooltip="tooltip" data-placement="top"
                                        title="Adicionar"><i class="fal fa-plus"></i> Incluir
                                </button>                                
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover table-condensed">
                            <thead>
                                <tr>
                                    <th class="text-center"></th>
                                    <th class="text-center">Cliente</th>
                                    <th class="text-center">Departamento</th>  
                                    <th class="text-center">Status</th>  
                                    <th class="text-center">Data de criação</th>  
                                    <th class="text-center"></th>                                  
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($departamentos as $item)
                                <tr>
                                    <td class="align-middle text-center"> {{ $item->id }}</td>
                                    <td class="align-middle text-center"> {{ $item->present()->nome }}</td>
                                    <td class="align-middle text-center"> {{ $item->nome }}</td>
                                    <td class="align-middle text-center"> {{ $item->present()->status }}</td>
                                    <td class="align-middle text-center"> {{ $item->present()->data }}</td>
                                    <td class="text-right"><a href="{{ route('departamentos.edit', $item->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-pencil"></i></a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

<div class="modal fade" id="adicionarCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
       <div class="modal-content">
           {!! Form::open(array('route' => array('departamentos.store'))) !!}         
           <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Adicionar Departamento</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
           </div>
           <div class="modal-body">
            <input type="hidden" name="cliente_id" value="f6ff8a91-4616-4f7c-91da-524047c9faa9">
               <div class="row">
                   <div class="col-md-12">
                       <div class="form-group">
                           {{ Form::label('nome', 'Nome') }}
                           {{ Form::text('nome', null, ['class' => 'form-control', 'required']) }}
                       </div>
                   </div>
               </div>
               <div class="row">
                   <div class="col-md-12">
                       <div class="form-group">
                           {{ Form::label('status', 'Status') }}
                           {{ Form::select('status', $status, null , ['class' => 'form-control'] ) }}
                       </div>
                   </div>
               </div>
               
           </div>
           <div class="modal-footer">
               <button type="submit" class="btn btn-success btn-block">Salvar</button>
           </div>
           {!! Form::close() !!}
       </div>
   </div>
</div>
@endsection
