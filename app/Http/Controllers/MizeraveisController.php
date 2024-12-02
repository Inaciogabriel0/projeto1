<?php

namespace App\Http\Controllers;

use App\Models\Mizeraveis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MizeraveisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Pega o parâmetro de busca
        $search = request('search');

        if ($search) {
            // Realiza a busca pelo nome
            $mizeraveis = Mizeraveis::where('nome', 'like', '%' . $search . '%')->get();
        } else {
            // Se não houver busca, pega todos os registros
            $mizeraveis = Mizeraveis::all();
        }

        // Retorna a view com a lista e o termo de busca
        return view('site.home', [
            'mizeraveis' => $mizeraveis,
            'search' => $search
        ]);
    }

    // Outros métodos (create, store, etc.) podem ser implementados conforme necessário

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Mizeraveis $mizeraveis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mizeraveis $mizeraveis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mizeraveis $mizeraveis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mizeraveis $mizeraveis)
    {
        //
    }
}
