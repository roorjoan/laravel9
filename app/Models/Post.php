<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //especificando el nombre de la tabla de la base de datos
    //protected $table = 'posts';

    //activar asignacion masiva
    //protected $fillable = ['title', 'body'];

    /*
        desabilitar proteccion contra asignacion masiva
        no se debe utilizar $request->all()
        en el controlador para guardar datos
        datos validados $request->validated()
    */
    protected $guarded = [];
}
