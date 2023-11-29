<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    use HasFactory;

    protected $primaryKey = 'KodeKasir';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'KodeKasir',
        'Nama',
        'HP'
    ];
}
