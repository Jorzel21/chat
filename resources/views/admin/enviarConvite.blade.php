@extends('layouts.app')

@section('content')
    <div class="card bg-secondary shadow">
        <form method="POST" action="{{ route('admin.enviarConvite') }}">
      
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Enviar convite</h3>
                    </div>      
                           
                </div>              
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="row text-center">                               
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-2">
                                        <div class="form-group">
                                            <label>E-mail</label>
                                            <input id="email" type="email" class="form-control" name="email" required autocomplete="email">
                                      
                                        </div>
                                    </div>    
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-2">
                                        <div class="form-group">
                                            <label>Nível</label>
                                            <input id="nivel" type="nivel" class="form-control" name="nivel" required>
                                           
                                        </div>
                                    </div>                         
                                    <div class="col-4 text-right">                   
                                        <button type="submit" class="btn btn-primary btn-sm"><i class="far fa-save"></i> Salvar</button>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection



