@extends('admin.layouts.admin')

@section('title', 'PAINEL DE CONTROLE CICLOMOBI')

@section('content')
 <div class="row">
    <div class="col-xl-12">

        <!-- Iconic Input Group -->
        <div class="card card-default">
        <div class="card-header">
            <h2>Editar / Evento / {{$evento->nome}} </h2>

            <a href="{{ route('evento.index')}}"><button type="button" class="mb-1 btn btn-pill btn-dark">Lista</button></a> 
        </div>
        <div class="card-body">
            @component('admin.events.components.form_event', ['evento' => $evento])
           @endcomponent
        </div>
        </div>

    </div>    
</div>
@endsection