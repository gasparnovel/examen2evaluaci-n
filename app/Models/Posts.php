<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Posts extends Model
{
    use HasFactory;
    // eliminacion temporal (suave)
    use softDeletes;

    // protege los campos para permitir actualizacion
    protected $fillable = [
        'user_id',
        'titulo', 
        'extracto', 
        'contenido', 
        'caducable', 
        'comentable', 
        'acceso'  
    ];

    public function user(){
        // belongsTo nos permite relacionar registros
        return $this->belongsTo(User::class);
    }
}
