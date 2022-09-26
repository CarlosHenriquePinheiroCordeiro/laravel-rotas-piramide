<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    use HasFactory;

    protected $primaryKey = 'tuscodigo';
    protected $fillable = ['tuscodigo', 'tusnome'];
}
