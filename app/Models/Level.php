<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $table = 'levels';

    protected $fillable = [
        'name',
    ];

    public function courses()
    {
        return $this->hasMany(Courses::class);
    }

    public function getRouteKeyName()
    {
        return 'name';
    }
}
