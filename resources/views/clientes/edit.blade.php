@extends('layouts.app')

@section('content')

    <div class="container-fluid py-4 d-flex flex-column flex-grow-1" style="min-height: calc(100vh - 82px)">

        <div class="row justify-content-center mt-4">
            <div class="col-12 col-sm-10 col-md-10 col-lg-8 col-xl-8">     
                <div class="card">
                    <div class="card-header">
                        <div class="row d-flex align-items-center">
                            <div class="col-4">
                                Cliente
                            </div>                     
                    </div>

                   <div class="row">
                    {!! Form::open(array('route' => array('cliente.update', $cliente->id), 'method' => 'PUT')) !!}         
                    
                    <div class="card">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    {{ Form::label('nome', 'Nome') }}
                                    {{ Form::text('nome', $cliente->nome, ['class' => 'form-control', 'required']) }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    {{ Form::label('doc', 'CPF ou CNPJ') }}
                                    {{ Form::text('doc', $cliente->doc, ['class' => 'form-control']) }}
                                    
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
        </div>
    </div>


@endsection
