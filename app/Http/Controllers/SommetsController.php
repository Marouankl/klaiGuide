<?php

namespace App\Http\Controllers;

use App\Models\Sommets;
use Illuminate\Http\Request;

class SommetsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sommets = Sommets::all();
        return view('sommets.sommets', ['sommets' => $sommets]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("sommets.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sommets= new Sommets;
        $sommets->nom_Sommets= $request->input('nom_Sommets');
        $sommets->altitude_Sommets= $request->input('altitude_Sommets');
        $sommets->save();
        return redirect()->route('sommets.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $code_Sommets)
    {
        $guides= Sommets::find($code_Sommets);
        return view('sommets.update',['sommets'=>$guides]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $code_Sommets)
    {
        $sommets= Sommets::find($code_Sommets);
        $sommets->nom_Sommets= $request->input('nom_Sommets');
        $sommets->altitude_Sommets= $request->input('altitude_Sommets');
        $sommets->save();
        return redirect()->route('guide.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $code_Sommets)
    {
        $sommets= Sommets::find($code_Sommets);
        $sommets->delete();
        return redirect()->route('sommets.index')->with('success','rapport deleted successfully');
    }
}
