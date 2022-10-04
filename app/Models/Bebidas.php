<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bebidas extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'bebidas';
    protected $primaryKey = 'id_bebida';
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $fillable = ['bebida','valor','marca','imagem'];
}
