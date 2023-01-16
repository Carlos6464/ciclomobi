@extends('admin.layouts.admin')

@section('title', 'PAINEL DE CONTROLE CICLOMOBI')

@section('content')
<div class="card card-default">
    <div class="card-header">
      <h2>Lista / Posts</h2>
      <a href="{{ route('post.create') }}"><button type="button" class="mb-1 btn btn-pill btn-dark">Adicionar</button></a> 
    </div>
    <div class="card-body">
      <table id="productsTable" class="table table-default table-product" style="width:100%">
        <thead>
          <tr>
            <th>Id</th>
            <th>Titulo</th>
            <th>Imagem</th>
            <th>Link</th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($posts as $post)
          <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->titulo}}</td>
            <td><img src="<?=Config::get('constantes.MIDIA_DIR')?>post/{{$post->imagem}}" class="user-image rounded-circle" alt="User Image" /></td>
            <td>{{$post->link}}</td>
            <td> <a href="{{ route('post.show', ['post' => $post->id]) }}"><button type="submit" class="btn btn-dark">Visualizar</button></a> </td>
            <td> <a href="{{ route('post.edit', ['post' => $post->id]) }}"><button type="submit" class="btn btn-warning">Editar</button></a> </td>
            <td>
                <form id="form_{{$post->id}}" method="post" action="{{ route('post.destroy', ['post' => $post->id]) }}">
                  @method('DELETE')
                  @csrf
                  <!--<button type="submit">Excluir</button>-->
                  
                  <a href="#" onclick="document.getElementById('form_{{$post->id}}').submit()"><button type="button" class="btn btn-danger">Excluir</button></a>
                </form>
               </td>
          </tr>
          @endforeach
        </tbody>
      </table>
  
    </div>
  </div>
  </div>
      
                  
  
@endsection