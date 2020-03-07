<?php

namespace App\Http\Controllers;

use App\Pedido;
use App\Produto;
use App\User;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Pedido::latest()->paginate(5);
        return view('pedidos.index', compact('pedidos'))
            ->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = User::all('id', 'name');
        $produtos = Produto::all('id', 'nome');

        return view('pedidos.create',compact('usuarios','produtos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        Pedido::create($request->all());

        return redirect()->route('pedidos.index')
            ->with('success', 'Produto criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Pedido $pedido)
    {
        $pedidosFinal = Pedido::where('users.id',$pedido['user'])->join('produtos','pedidos.prato','=','produtos.id')->join('users','pedidos.user','=','users.id')->select('users.name','produtos.nome','pedidos.id')->first();
        return view('pedidos.show', compact('pedidosFinal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $pedido)
    {
        return view('pedidos.edit', compact('pedido'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedido $pedido)
    {
        $request->validate([
            'user' => 'required',
            'prato' => 'required',
        ]);

        $pedido->update($request->all());

        return redirect()->route('pedidos.index')
            ->with('success', 'Pedido atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $pedido)
    {
        $pedido->delete();

        return redirect()->route('pedidos.index')
            ->with('success', 'Pedido removido com sucesso!');
    }
}
