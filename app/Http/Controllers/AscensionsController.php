<?php

namespace App\Http\Controllers;

use App\Models\Ascension;
use Illuminate\Http\Request;

class AscensionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ascens= Ascension::all();
        return view('ascensions.ascension', ['ascension' => $ascens]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("ascensions.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ascens= new Ascension;
        $ascens->abris->code_Abris= $request->input('code_Abris');
        $ascens->sommets->code_Sommets= $request->input('code_Sommets');
        $ascens->defficulte_Ascension= $request->input('defficulte_Ascension');
        $ascens->duree_Ascension= $request->input('duree_Ascension');
        $ascens->save();
        return redirect()->route('ascensions.index');

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
    public function edit(int $code_Abris,int $code_Sommets)
    {
        $ascens= Ascension::find($code_Abris,$code_Sommets);
        return view('ascensions.update',['ascensions'=>$ascens]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,int $code_Abris,int $code_Sommets)
    {
        $ascens= Ascension::find($code_Abris,$code_Sommets);
        $ascens->abris->code_Abris= $request->input('code_Abris');
        $ascens->sommets->code_Sommets= $request->input('code_Sommets');
        $ascens->defficulte_Ascension= $request->input('defficulte_Ascension');
        $ascens->duree_Ascension= $request->input('duree_Ascension');
        $ascens->save();
        return redirect()->route('ascensions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $code_Abris,int $code_Sommets)
    {
        $ascens= Ascension::find($code_Abris,$code_Sommets);
        $ascens->delete();
        return redirect()->route('ascensions.index')->with('success','rapport deleted successfully');;
    }
}
