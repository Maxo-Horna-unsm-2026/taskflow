<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Notifiable;





class User extends Authenticatable
{
    use Notifiable, SoftDeletes;
    protected $table      = 'usuario';
    protected $primaryKey = 'id';
    protected $fillable   = [
        'nombre_usuario', 
        'contrasena'
    ];
    protected $hidden     = [
        'contrasena'
    ];
}
