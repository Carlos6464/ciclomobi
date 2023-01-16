@extends('admin.layouts.admin')

@section('title', 'PAINEL DE CONTROLE CICLOMOBI')

@section('content')
<div class="row">
    <div class="col-xl-12">

        <!-- Iconic Input Group -->
        <div class="card card-default">
        <div class="card-header">
            <h2>Post / {{$post->titulo}}</h2>
            <a href="{{ route('post.index')}}"><button type="button" class="mb-1 btn btn-pill btn-dark">Lista</button></a> 


        </div>
        <div class="card-body text-center">
            <h5 class="card-title">Titulo: {{$post->titulo}}</h5>
            <img class="card-img-top" style="width: 40%;  margin-bottom: 10px" src="<?=Config::get('constantes.MIDIA_DIR')?>post/{{$post->imagem}}" alt="Card image cap">
            <p class="card-text">
            <small class="text-muted">Link: {{$post->link}}</small>
            </p>   
        </div>
        </div>

    </div>    
</div>

  @endsection  
        