<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oeuvre extends Model
{
    protected $fillable = [
        'titre',
        'artiste',
        'date_fabrication',
        'date_acquisition',
        'prix',
        'description',
        'photo',
        'categorie_id'
    ];
    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }
}
