<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Evento::all()
                  ->where('excluido', '==', 0);                   
        return view('admin.events.index', ['eventos' => $eventos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.events.create');
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
            'nome' => 'required|min:3|max:100',
            'data_inicio' => 'required',
            'data_fim' => 'required',
            'imagem' => 'required',
            'rua' => 'required|max:100',
            'bairro' => 'required|max:100',
            'cidade' => 'required|max:100',
            'uf' => 'required|min:2|max:2',
            'descricao' => 'required',
            'link' => 'required'
        ];

        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido',

            'bairro.max' => 'O campo bairro deve ter no maximo 100 caracteres',
            'cidade.max' => 'O campo cidade deve ter no maximo 100 caracteres',
            'uf.min' => 'O campo uf deve ter no minimo 2 caracteres',
            'uf.max' => 'O campo uf deve ter no maximo 2 caracteres',
        ];

        $request->validate($regras, $feedback);
        $data = $request->all();

        if ($request->hasFile('imagem') && $request->file('imagem')->isValid() ) {
            $requestImage = $request->imagem;

            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move("midia/evento", $imageName);

            $data['imagem'] = $imageName;
        };

        $evento = new Evento();
        $evento::create($data);

        session()->flash('sucesso','Evento cadastrado com sucesso!!');
        return redirect()->route('evento.index');






    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evento = Evento::findOrfail($id);

        return view('admin.events.show',['evento' => $evento]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evento = Evento::findOrfail($id);

        return view('admin.events.edit',['evento' => $evento]);
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
            'nome' => 'required|min:3|max:100',
            'data_inicio' => 'required',
            'data_fim' => 'required',
            'rua' => 'required|max:100',
            'bairro' => 'required|max:100',
            'cidade' => 'required|max:100',
            'uf' => 'required|min:2|max:2',
            'descricao' => 'required',
            'link' => 'required'
        ];

        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido',

            'bairro.max' => 'O campo bairro deve ter no maximo 100 caracteres',
            'cidade.max' => 'O campo cidade deve ter no maximo 100 caracteres',
            'uf.min' => 'O campo uf deve ter no minimo 2 caracteres',
            'uf.max' => 'O campo uf deve ter no maximo 2 caracteres',
        ];

        $request->validate($regras, $feedback);

        $data = $request->all();

        if ($request->hasFile('imagem') && $request->file('imagem')->isValid() ) {
            $requestImage = $request->imagem;

            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move("midia/evento", $imageName);

            $data['imagem'] = $imageName;
        };

        $event = new Evento();
        $event::findOrfail($id)->update($data);

        $evento = $event::findOrfail($id);

        session()->flash('sucesso','Evento atualizado com sucesso!!');
        return redirect()->route('evento.show',['evento' => $evento]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Evento::findOrfail($id)
                ->update(['excluido' => 1]);

        session()->flash('sucesso','Evento excluido com sucesso!!');
        return redirect()->route('evento.index'); 
    }
}
