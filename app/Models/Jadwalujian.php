<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwalujian extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $table = 'jadwalujian';
    protected $fillable = [
        'tanggalujian',
        'jammulai',
        'namamatakuliah',
    ];
}
