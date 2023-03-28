<?php

namespace App\Http\Controllers;

use App\Models\Abris;
use App\Models\Vallees;
use Illuminate\Http\Request;

class AbrisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abris = Abris::all();
        return view('abris.abris', ['abris' => $abris]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("abris.create");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $abris= new Abris;
        $abris->nom_Abris= $request->input('nom_Abris');
        $abris->type_Abris= $request->input('Type_Abris');
        $abris->altitude_Abris= $request->input('altitude_Abris');
        $abris->places_Abris= $request->input('places_Abris');
        $abris->prixNuit_Abris= $request->input('prixNuit_Abris');
        $abris->prixRepas_Abris= $request->input('prixRepas_Abris');
        $abris->telGardien_Abris= $request->input('telGardien_Abris');
        $abris->save();
        return redirect()->route('abris.index');

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $code_Abris)
    {
        $abris= Abris::find($code_Abris);
        return view('abris.update',['abris'=>$abris]);
    }

    /**
     * Update the specified resource in storage.
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $code_Abris)
    {

        $abris = Abris::find($code_Abris);
        $abris->nom_Abris= $request->input('nom_Abris');
        $abris->type_Abris= $request->input('Type_Abris');
        $abris->altitude_Abris= $request->input('altitude_Abris');
        $abris->places_Abris= $request->input('places_Abris');
        $abris->prixNuit_Abris= $request->input('prixNuit_Abris');
        $abris->prixRepas_Abris= $request->input('prixRepas_Abris');
        $abris->telGardien_Abris= $request->input('telGardien_Abris');
        $abris->save();
        return redirect()->route('abris.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $code_Abris)
    {
        $abris= Abris::find($code_Abris);
        $abris->delete();
        return redirect()->route('abris.index')->with('success','rapport deleted successfully');
    }
}
