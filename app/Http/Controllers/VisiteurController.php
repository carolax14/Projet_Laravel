<?php

namespace App\Http\Controllers;

use App\Models\Visiteur;
use Illuminate\Http\Request;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VisiteurController extends Controller
{
    public function index()
    {
        $visiteurs = Visiteur::all();
        return view('visiteurs.liste', compact('visiteurs'));
    }

    public function create()
    {
        return view('visiteurs.ajout');
    }

    public function store(Request $request)
    {
        $request->validate([
            "visiteur_nom" => "required",
            "visiteur_prenom" => "required",
            "visiteur_mail" => "required"
        ]);

        Visiteur::create($request->all());


        return redirect()->route('visiteurs.ajout')
            ->with('success', 'Un nouveau visiteur a été ajouté');
    }

    public function edit($id)
    {

        if (Visiteur::find($id) != null) {
            $visiteur = Visiteur::find($id);
            return view('visiteurs.modif', compact('visiteur'));
        }
        return back();

        /* return view('visiteurs.modif', ['visiteur' => $id]); */
    }



    public function update(Request $request)
    {
        $update = [
            "id" => $request->id,
            "visiteur_nom" => $request->visiteur_nom,
            "visiteur_prenom" => $request->visiteur_prenom,
            "visiteur_mail" => $request->visiteur_mail,
        ];

        Visiteur::where('id', $request->id)->update($update);
        return redirect('visiteurs.liste')->with('successUpdate', 'Modification réussit !');
    }

    public function destroy($id)
    {
        $visiteur = Visiteur::find($id);
        $visiteur->delete();

        return redirect('visiteurs.liste')->with('successDelete', 'Le visiteur a été supprimer');
    }
}
