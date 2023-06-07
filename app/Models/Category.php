<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';
    protected $fillable = ['name', 'slug'];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
    
    public function getRouteKeyName()
    {
        return 'slug';
    }

}
