<?php

namespace App\Http\Controllers;

use App\Models\Abris;
use App\Models\Concerner;
use App\Models\Randonnees;
use App\Models\Reserver;
use App\Models\Sommets;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('home');
    }

    public function admin()
    {
        return view('admin');
    }

    public function randonnes(){
        $randonne=Randonnees::with('reserver','concerner')->get();
        $abris= Abris::with('reserver')->get();
        $sommets=Sommets::with('concerner');
        $reserver=Reserver::with('randonne','abri')->get();
        $concerner=Concerner::with('randonne','sommets')->get();

        return view('home',compact('randonne','abris','reserver','concerner','sommets'));


    }

}
