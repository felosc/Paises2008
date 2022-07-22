<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ciudad extends Model
{
    use HasFactory;

    
    public function ObtenerPais(){
        return $this->belongsTo(Pais::class,'PaisCodigo','PaisCodigo');
    }
}
