<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    use HasFactory;
    protected $table = 'ordenes'; 

    protected $fillable = ['producto', 'cantidad', 'total', 'user_id'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'user_id');
    }
}
