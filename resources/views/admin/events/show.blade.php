@extends('admin.layouts.admin')

@section('title', 'PAINEL DE CONTROLE CICLOMOBI')

@section('content')
<div class="row">
    <div class="col-xl-12">

        <!-- Iconic Input Group -->
        <div class="card card-default">
        <div class="card-header">
            <h2>Evento / {{$evento->nome}}</h2>
            <a href="{{ route('evento.index')}}"><button type="button" class="mb-1 btn btn-pill btn-dark">Lista</button></a> 


        </div>
        <div class="card-body text-center">
            <h5 class="card-title">Nome: {{$evento->nome}}</h5>
            <img class="card-img-top" style="width: 40%;  margin-bottom: 10px" src="<?=Config::get('constantes.MIDIA_DIR')?>evento/{{$evento->imagem}}" alt="Card image cap">
            <p class="card-text">
                <small class="text-muted">O evento irá acontecer em {{$evento->cidade}} na {{$evento->rua}}, bairro {{$evento->bairro}}.</small>
            </p>
            @if ($evento->data_inicio === $evento->data_fim)
                <p class="card-text">
                    <small class="text-muted">O evento ocorrera no dia {{$evento->data_inicio}}</small>
                </p> 
            @elseif($evento->data_inicio != $evento->data_fim)
                <p class="card-text">
                    <small class="text-muted">O evento ocorrera entre os dias {{$evento->data_inicio}} e {{$evento->data_fim}}</small>
                </p>   
            @endif
            <p class="card-text">
            <small class="text-muted">Link: {{$evento->link}}</small>
            </p>   
        </div>
        </div>

    </div>    
</div>

  @endsection  