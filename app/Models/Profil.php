<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    protected $table = 'profils';
    protected $fillable = [
        'statut', 'nom_entreprise', 'num_entreprise', 'num_tvq', 'num_rbq', 'type', 'num_tel', 'poste', 'consentement'
    ];
}
