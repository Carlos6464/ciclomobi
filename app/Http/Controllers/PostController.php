<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $posts = Post::all()
                ->where('excluido', '==', 0);
        return view('admin.post.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regras = [
            'titulo' => 'required|min:3|max:40',
            'img' => 'required',
            'link' => 'required'
        ];
        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido',

            'titulo.min' => 'O campo titulo deve ter no mínimo 3 caracteres',
            'titulo.max' => 'O campo titulo deve ter no maximo 40 caracteres'

        ];

        $request->validate($regras, $feedback);

        $post = new Post;

         $post->titulo = $request->titulo;
        if ($request->hasFile('img') && $request->file('img')->isValid()) {
            $requestImage = $request->img;

            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move("midia/post", $imageName);

            $post->imagem = $imageName;
        }
        $post->link = $request->link;
        $post->save();

        session()->flash('sucesso','Post cadastrado com sucesso!!');
        return redirect()->route('post.index');
        
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrfail($id);

        return view('admin.post.show', ['post'=> $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrfail($id);

        return view('admin.post.edit', ['post'=> $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $regras = [
            'titulo' => 'required|min:3|max:40',
            'link' => 'required'
        ];
        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido',

            'titulo.min' => 'O campo titulo deve ter no mínimo 3 caracteres',
            'titulo.max' => 'O campo titulo deve ter no maximo 40 caracteres'

        ];

        $request->validate($regras, $feedback);

        
        $newPost = $request->all();
        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
            $requestImage = $request->imagem;

            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move("midia/post", $imageName);

        $newPost['imagem'] = $imageName;
        }
       Post::findOrfail($id)->update($newPost);

       $post = Post::findOrfail($id);

        session()->flash('sucesso','Post atualizado com sucesso!!');
        return redirect()->route('post.show',['post' => $post]);
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::findOrfail($id)->update(['excluido' => 1]);

        session()->flash('sucesso','Post excluido com sucesso!!');
        return redirect()->route('post.index');
    }
}
