<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

class Pais extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public $timestamps = false;

    public function ciudad()
    {
        return $this->hasMany(ciudad::class, 'id', 'PaisCapital');
    }

    public function paisContinente($continente)
    {
        $PaisesSegunContinente = DB::select('SELECT PaisNombre,PaisPoblacion FROM pais WHERE PaisContinente =' . "'" . $continente . "'");



        return compact('PaisesSegunContinente');
    }
}
