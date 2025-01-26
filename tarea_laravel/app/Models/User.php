<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    use HasFactory;

    protected $table = 'usuarios'; // Nombre de la tabla
    protected $fillable = ['nombre', 'correo', 'telefono'];

    public function pedidos()
    {
        return $this->hasMany(pedidos::class, 'id_usuario');
    }

    public function ordenes(){
        return $this->hasMany(Ordenes::class);
    }
}
