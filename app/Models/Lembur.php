<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lembur extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'idkaryawan',
        'tgllembur',
        'jumlahlembur',
    ];
}
