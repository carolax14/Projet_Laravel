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
        return view('/visiteurs/liste', compact('visiteurs'));
    }

    public function create()
    {
        return view('/visiteurs/ajout');
    }

    public function store(Request $request)
    {
        $request->validate([
            "visiteur_nom" => "required",
            "visiteur_prenom" => "required",
            "visiteur_mail" => "required"
        ]);

        Visiteur::create($request->all());


        return redirect('/visiteurs/ajout')->with("success", "Un nouveau visiteur a été ajouté");
    }

    public function edit(Visiteur $visiteur)
    {
        return view('/visiteurs/modif', ['visiteur' => $visiteur]);
    }

    public function update()
    {
        /*  $request->validate([
            "visiteur_nom" => "required",
            "visiteur_prenom" => "required",
            "visiteur_mail" => "required"
        ]); */

        /*   $updating = Visiteur::table('simplon')
            ->where('id', $request->input('id'))
            ->update([
                "visiteur_nom" => $request->input('visiteur_nom'),
                "visiteur_prenom" => $request->input('visiteur_prenom'),
                "visiteur_mail" => $request->input('visiteur_mail')

            ]); */

        return redirect('/visiteurs/liste');
    }

    /*  public function destroy(Visiteur $visiteur)
    {
        $visiteur->delete();

        return redirect('/visiteurs/liste');
    } */
}
