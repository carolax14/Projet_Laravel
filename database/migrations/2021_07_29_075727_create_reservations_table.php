<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string("reserv_date");
            $table->foreignId("creneau_id_fk")->constrained("creneaus");
            $table->foreignId("visiteur_id_fk")->constrained("visiteurs");
            $table->foreignId("ordinateurs_id_fk")->constrained("ordinateurs");
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     * 
     * @return void
     */
    public function down()
    {
        Schema::table("creneaus", function (Blueprint $table) {
            $table->dropForeign("creneau_id_fk");
        });
        Schema::table("visiteurs", function (Blueprint $table) {
            $table->dropForeign("visiteur_id_fk");
        });
        Schema::table("ordinateurs", function (Blueprint $table) {
            $table->dropForeign("ordinateur_id_fk");
        });
        Schema::dropIfExists('reservations');
    }
}
