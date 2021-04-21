<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{

    public function index()
    {
        $data = Etudiant::all();
        return view('liste_etudiant',compact('data'));
    }

    // save etudiant
    public function store(Request $request)
    {
        $data = $request->all();
        $user =Etudiant::create($data);
        return redirect('liste');
    }

    public function get($id)
    {
        $etudiant = Etudiant::find($id);
        return view('details',compact('etudiant'));
    }
}
