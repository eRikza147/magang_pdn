<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mapel extends Model
{
    use HasFactory;
    protected $table = 'mapel';
    protected $fillable = ['nmapel','guru','jadwal','kelas','foto'];
}
