<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    use HasFactory;
    protected $fillable=[
        'email',
    'nombre',
    'apellidos',
    'phone',
    'departamento',
    'provincia',
    'distrito',
    'dir_av_calle',
    'dir_numero',
    'dir_bloq_lote',
    'imagen',
    'user_id',
    'status'
];

}
