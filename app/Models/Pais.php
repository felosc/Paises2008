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
        //$Paises =Pais::join("Ciudad","Pais.PaisCapital","=","Ciudad.id")
        //->get();
       // return $Paises;
    }
}
