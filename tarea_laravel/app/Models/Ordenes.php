<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Ordenes extends Model
{
    //Relacion con Uders:un pedido pertenece a un usuario 
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
