<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    protected $table = 'courses';
    protected $fillable = [
        'judul_kursus',
        'deskripsi_singkat',
        'category_id',
        'level_id',
        'bahasa',
        'kursus_unggulan',
        'waktu_kursus',
        'jumlah_kuliah',
        'harga_kursus',
        'harga_diskon',
        'diskon_aktif',
        'deskripsi',
    ];

    

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function level()
    {
        return $this->belongsTo(Levels::class);
    }
}
