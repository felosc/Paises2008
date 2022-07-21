<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pais extends Model
{
    use HasFactory;

    public function ObtenerCiudades()
    {
        return $this->belongsTo(Ciudad::class,'CiudadID','PaisCapital');
    }
}
