<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    protected $table = 'detail_courses';
    protected $fillable = [
        'title',
        'description',
        'tags',
        'pengajar_id',
        'category_id',
        'levels_id',
        'duration',
        'total_videos',
        'price',
        'discount_price',
        'is_discount_enabled',
        'additional_information',
    ];



    public function pengajar()
    {
        return $this->belongsTo('App\Models\Pengajar', 'pengajar_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    public function level()
    {
        return $this->belongsTo('App\Models\Level', 'levels_id');
    }
}
