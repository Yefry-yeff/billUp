<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelSegmento extends Model
{
    use HasFactory;
    protected $table = 'segmento';
    protected $fillable = ['id', 'descripcion', 'bodega_id'];
}
