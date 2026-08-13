<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory, SoftDeletes;
    protected $table      = 'tarea';
    protected $primaryKey = 'id';
    protected $fillable   = [
        'id_usuario',
        'id_categoria',
        'titulo',
        'descripcion',
        'estado'
    ]; 
    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }
}
