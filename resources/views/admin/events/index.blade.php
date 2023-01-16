@extends('admin.layouts.admin')

@section('title', 'PAINEL DE CONTROLE CICLOMOBI')

@section('content')
<div class="card card-default">
    <div class="card-header">
      <h2>Lista / Eventos</h2>
      <a href="{{ route('evento.create') }}"><button type="button" class="mb-1 btn btn-pill btn-dark">Adicionar</button></a> 
    </div>
    <div class="card-body">
      <table id="productsTable" class="table table-default table-product" style="width:100%">
        <thead>
          <tr>
            <th>Id</th>
            <th>nome</th>
            <th>Imagem</th>
            <th>Data inicio do Evento</th>
            <th>Data fim do Evento</th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
         @foreach ($eventos as $evento)
          <tr>
            <td>{{$evento->id}}</td>
            <td>{{$evento->nome}}</td>
            <td><img src="<?=Config::get('constantes.MIDIA_DIR')?>evento/{{$evento->imagem}}" class="user-image rounded-circle" alt="User Image" /></td>
            <td>{{$evento->data_inicio}}</td>
            <td>{{$evento->data_fim}}</td>
            <td> <a href="{{ route('evento.show',['evento' => $evento->id])}}"><button type="submit" class="btn btn-dark">Visualizar</button></a> </td>
            <td> <a href="{{ route('evento.edit', ['evento' => $evento->id])}}"><button type="submit" class="btn btn-warning">Editar</button></a> </td>
            <td>
                <form id="form_{{$evento->id}}" method="post" action="{{ route('evento.destroy', ['evento' => $evento->id]) }}">
                  @method('DELETE')
                  @csrf
                  <!--<button type="submit">Excluir</button>-->
                  
                  <a href="#" onclick="document.getElementById('form_{{$evento->id}}').submit()"><button type="button" class="btn btn-danger">Excluir</button></a>
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