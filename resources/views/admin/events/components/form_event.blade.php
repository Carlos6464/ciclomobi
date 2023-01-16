@if (isset($evento->id))
<form action="{{ route('evento.update',[$evento->id])}}" method="POST" enctype="multipart/form-data">
    @csrf    
    @method('PUT')   
@else
  <form action="{{ route('evento.store')}}" method="POST" enctype="multipart/form-data">
    @csrf 
@endif     
        <br/>
        <div class="form-group">
            <label for="exampleFormControlInput1">Nome</label>
            <input type="text" name="nome" value="{{ $evento->nome ?? old('nome')}}" class="form-control" id="exampleFormControlInput1" placeholder="digite o titulo">
            {{$errors->has('nome') ? $errors->first('nome') : ''}}
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Data Inicio</label>
            <input type="date" name="data_inicio" value="{{ $evento->data_inicio ?? old('data_inicio')}}"  class="form-control" id="exampleFormControlInput1" placeholder="digite o titulo">
            {{$errors->has('data_inicio') ? $errors->first('data_inicio') : ''}}
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Data Fim</label>
            <input type="date" name="data_fim" value="{{ $evento->data_fim ?? old('data_fim')}}"  class="form-control" id="exampleFormControlInput1" placeholder="digite o titulo">
            {{$errors->has('data_fim') ? $errors->first('data_fim') : ''}}
        </div>
        
        @if (isset($evento->id))
        <div class="form-group">
            <label for="exampleFormControlInput1">Imagem Atualizar</label>
            <input type="file" name="imagem" class="form-control" id="exampleFormControlInput1" >
            <img style="width: 10em; height: 10em; object-fit: cover; margin-top: 15px" src="<?=Config::get('constantes.MIDIA_DIR').'evento/'?>{{ $evento->imagem}}" 
            class="user-image rounded-circle" alt="User Image" />
        </div>
        
        @else

        <div class="form-group">
            <label for="exampleFormControlInput1">Imagem cadastrar</label>
            <input type="file" name="imagem"  class="form-control" id="exampleFormControlInput1" >
            {{$errors->has('imagem') ? $errors->first('imagem') : ''}}
        </div>
        @endif

        <div class="form-group">
            <label for="exampleFormControlInput1">Rua</label>
            <input type="text" name="rua" value="{{$evento->rua ?? old('rua')}}"  class="form-control" id="exampleFormControlInput1" >
            {{$errors->has('rua') ? $errors->first('rua') : ''}}
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Bairro</label>
            <input type="text" name="bairro" value="{{ $evento->bairro ?? old('bairro')}}"  class="form-control" id="exampleFormControlInput1" >
            {{$errors->has('bairro') ? $errors->first('bairro') : ''}}
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">cidade</label>
            <input type="text" name="cidade" value="{{$evento->cidade ?? old('cidade')}}"  class="form-control" id="exampleFormControlInput1" >
            {{$errors->has('cidade') ? $errors->first('cidade') : ''}}
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">UF</label>
            <input type="text" name="uf" value="{{ $evento->uf ?? old('uf')}}"  class="form-control" id="exampleFormControlInput1" >
            {{$errors->has('uf') ? $errors->first('uf') : ''}}
        </div>


        <div class="form-group">
            <label for="exampleFormControlInput1">Descrição</label>
            <textarea name="descricao" class="form-control" id="exampleFormControlInput1" cols="30" rows="10">{{ isset($evento->id) ?  $evento->descricao : (old('descricao')  ?? '')}}</textarea>
            {{$errors->has('descricao') ? $errors->first('descricao') : ''}}
        </div>
     
        <div class="form-group">
            <label for="exampleFormControlInput1">Link para as redes</label>
            <input type="link" name="link" value="{{$evento->link ?? old('link')}}"  class="form-control" id="exampleFormControlInput1" placeholder="digite o link para sua rede social" >
            {{$errors->has('link') ? $errors->first('link') : ''}}
        </div>
       @if (isset($evento->id))
        <div class="form-group">
            <button type="submit" class="mb-1 btn btn-pill btn-dark">Atualizar</button>
        </div>
       @else
        <div class="form-group">
            <button type="submit" class="mb-1 btn btn-pill btn-dark">Cadastrar</button>
        </div>
       @endif
           
        
       
</form>