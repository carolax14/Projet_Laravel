<?php

namespace App\Http\Controllers;

use App\Models\reservation;
use App\Models\Visiteur;
use App\Models\Ordinateur;
use App\Models\Creneau;
use App\Models\ReservationView;
use Illuminate\Http\Request;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Throwable;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = ReservationView::all();
        $visiteurs = Visiteur::all();
        $ordinateurs = Ordinateur::all();
        $creneaus = Creneau::all();
        return view('reservations.liste', compact('reservations', 'visiteurs', 'ordinateurs', 'creneaus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "visiteur_id_fk" => "required",
            "ordinateurs_id_fk" => "required",
            "reserv_date" => "required",
            "creneau_id_fk" => "required"
        ]);
        try {
            reservation::create($request->all());
            return redirect()->route('reservations.liste')
                ->with('success', 'Un nouvelle réservation a été ajouté');
        } catch (Throwable $e) {
            report($e);
            return redirect()->route('reservations.liste')
                ->with('error', 'Ce poste est déja réservé pour ce créneau horaire !');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservation = reservation::find($id);
        $reservation->delete();

        return redirect('reservations.liste')->with('successDelete', 'La réservation a été annulé');
    }
}
