@if (isset($post->id))
<form action="{{ route('post.update', ['post' => $post]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
@else
<form action="{{ route('post.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
@endif
      
        <br/>
        <div class="form-group">
            <label for="exampleFormControlInput1">Titulo</label>
            <input type="text" name="titulo" value="{{ $post->titulo ?? old('titulo')}}"  class="form-control" id="exampleFormControlInput1" placeholder="digite o titulo">
            {{ $errors->has('titulo') ? $errors->first('titulo') : '' }}
        </div>
        @if (isset($post->id))
        <div class="form-group">
            <label for="exampleFormControlInput1">Imagem Atualizar</label>
            <input type="file" name="imagem" class="form-control" id="exampleFormControlInput1" >
            <img style="width: 10em; height: 10em; object-fit: cover; margin-top: 15px" src="<?=Config::get('constantes.MIDIA_DIR').'post/'?>{{ $post->imagem}}" 
            class="user-image rounded-circle" alt="User Image" />
        </div>
        
        @else
        <div class="form-group">
            <label for="exampleFormControlInput1">Imagem cadastrar</label>
            <input type="file" name="img" value="{{old('img')}}"  class="form-control" id="exampleFormControlInput1" >
            {{ $errors->has('img') ? $errors->first('img') : '' }}
        </div>
        @endif
        <div class="form-group">
            <label for="exampleFormControlInput1">Link para as redes</label>
            <input type="link" name="link" value="{{ $post->link ?? old('link')}}"  class="form-control" id="exampleFormControlInput1" placeholder="digite o link para sua rede social" >
            {{ $errors->has('link') ? $errors->first('link') : '' }}
        </div>
        @if (isset($post->id))
            <div class="form-group">
                <button type="submit" class="mb-1 btn btn-pill btn-dark">Atualizar</button>
            </div>
        @else
            <div class="form-group">
                <button type="submit" class="mb-1 btn btn-pill btn-dark">Cadastrar</button>
            </div>
        @endif
       
</form>
