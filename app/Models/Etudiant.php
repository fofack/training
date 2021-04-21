<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $table = 'etudiants';
    protected $fillable = ['nom_complet','date_naiss','niveau','filiere','email','remarque'];
}
