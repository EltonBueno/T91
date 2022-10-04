<?php

namespace App\Http\Controllers;

use App\Models\Bebidas;
use Illuminate\Http\Request;

class BebidasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bebidas = Bebidas::all();
        return view('home.index')->with(compact('bebidas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $bebida  = Bebidas::orderBy('bebida')->get();
        return view('home.form')
                ->with(compact('bebida'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bebida = new Bebidas();
        $bebida->fill($request->all());
        $bebida->save();

        return redirect()
                ->route('home.index');
               
    }

    
    public function show(int $id)
    {
        $bebida = Bebidas::find($id);
        return view('home.show')
                ->with(compact('bebida'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bebidas  $bebidas
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $bebida = Bebidas::find($id);
        return view('home.formEdit')
                ->with(compact('bebida'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bebidas  $bebidas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $bebida = Bebidas::find($id);
        $bebida->fill($request->all());
        $bebida->save();

        return redirect()
                ->route('home.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $bebida = Bebidas::find($id);        
        $bebida->delete();

        return redirect()
                ->route('home.index');
    }
}
