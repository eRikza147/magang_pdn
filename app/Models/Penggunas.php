<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penggunas extends Model
{
    use HasFactory;
    protected $table = 'penggunas';
    protected $fillable = ['nama','email','telepon','foto'];
}
