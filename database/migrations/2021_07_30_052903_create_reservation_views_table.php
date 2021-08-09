<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateReservationViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW reservation_views AS SELECT reservations.id, reserv_date, visiteur_prenom, visiteur_nom, visiteur_mail,
        ordi_libelle, creneau_horaire
         FROM visiteurs INNER JOIN reservations
         ON visiteurs.id = reservations.visiteur_id_fk 
         INNER JOIN ordinateurs ON reservations.ordinateurs_id_fk = ordinateurs.id
         INNER JOIN creneaus ON reservations.creneau_id_fk = creneaus.id");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation_views');
    }
}
