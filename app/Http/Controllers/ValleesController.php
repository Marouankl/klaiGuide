<?php

namespace App\Http\Controllers;

use App\Models\Vallees;
use Illuminate\Http\Request;

class ValleesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vallees = Vallees::all();
        return view('vallees.vallees', ['vallees' => $vallees]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("vallees.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $vallees= new Vallees;
        $vallees->nom_Vallees= $request->input('nom_Vallees');
        $vallees->save();
        return redirect()->route('vallees.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $code_Vallees)
    {
        $vallees= Vallees::find($code_Vallees);
        return view('vallees.update',['vallees'=>$vallees]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $code_Vallees)
    {
        $vallees= Vallees::find($code_Vallees);
        $vallees->nom_Vallees= $request->input('nom_Vallees');
        $vallees->save();
        return redirect()->route('vallees.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $code_Vallees)
    {
        $vallees= Vallees::find($code_Vallees);
        $vallees->delete();
        return redirect()->route('vallees.index')->with('success','rapport deleted successfully');
    }
}
