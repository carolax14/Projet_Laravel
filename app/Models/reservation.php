<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ordinateur;

class reservation extends Model
{
    use HasFactory;
    protected $fillable = ["reserv_date", "creneau_id_fk", "visiteur_id_fk", "ordinateurs_id_fk"];

    public function ordinateur()
    {
        return $this->belongsTo(Ordinateur::class);
    }
}
