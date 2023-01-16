@extends('admin.layouts.admin')

@section('title', 'PAINEL DE CONTROLE CICLOMOBI')

@section('content')
 <div class="row">
    <div class="col-xl-12">

        <!-- Iconic Input Group -->
        <div class="card card-default">
        <div class="card-header">
            <h2>Adicionar / Posts</h2>

            <a href="<?=Config::get('constantes.PUBLIC_DIR')?>admin/post"><button type="button" class="mb-1 btn btn-pill btn-dark">Lista</button></a> 
        </div>
        <div class="card-body">
            @component('admin.post.components.form_post')
           @endcomponent
        </div>
        </div>

    </div>    
</div>
@endsection