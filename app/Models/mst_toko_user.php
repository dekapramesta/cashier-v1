<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mst_toko_user extends Model
{
    use HasFactory;
    protected $fillable = [
        'fk_user',
        'fk_toko',
    ];
}
