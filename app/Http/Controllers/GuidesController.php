<?php

namespace App\Http\Controllers;

use App\Models\Guides;
use Illuminate\Http\Request;

class GuidesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guides = Guides::all();
        return view('guide.guides', ['guides' => $guides]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("guide.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $guides= new Guides;
        $guides->nom_Guides= $request->input('nom_Guides');
        $guides->prenom_Guides= $request->input('prenom_Guides');
        $guides->email_Guides= $request->input('email_Guides');
        $guides->motdepasse_Guides= $request->input('motdepasse_Guides');
        $guides->save();
        return redirect()->route('guide.index');
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
    public function edit(int $code_Guides)
    {
        $guides= Guides::find($code_Guides);
        return view('guide.update',['guide'=>$guides]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $code_Guides)
    {
        $guides= Guides::find($code_Guides);
        $guides->nom_Guides= $request->input('nom_Guides');
        $guides->prenom_Guides= $request->input('prenom_Guides');
        $guides->email_Guides= $request->input('email_Guides');
        $guides->motdepasse_Guides= $request->input('motdepasse_Guides');
        $guides->save();
        return redirect()->route('guide.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $code_Guides)
    {
        $guides= Guides::find($code_Guides);
        $guides->delete();
        return redirect()->route('guide.index')->with('success','rapport deleted successfully');
    }
}
