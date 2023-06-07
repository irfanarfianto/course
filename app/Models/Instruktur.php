<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instruktur extends Model
{
    use HasFactory;

    protected $table = 'instruktur';

    protected $fillable = [
        'nama',
        'email',
        'password',
        'foto',
    ];

    // Relasi dengan model Kursus
    public function kursus()
    {
        return $this->hasMany(Kursus::class);
    }
}
