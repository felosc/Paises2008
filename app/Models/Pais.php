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

    public function paisContinente()
    {
        $PaisesNorteAmerica = DB::select('SELECT PaisNombre,PaisPoblacion FROM pais WHERE PaisContinente = "North America";');
        $PaisesAfrica = DB::select('SELECT PaisNombre,PaisPoblacion FROM pais WHERE PaisContinente = "Africa";');
        $PaisesEuropa = DB::select('SELECT PaisNombre,PaisPoblacion FROM pais WHERE PaisContinente = "Europe";');
        $PaisesAsia = DB::select('SELECT PaisNombre,PaisPoblacion FROM pais WHERE PaisContinente = "Asia";');
        $PaisesSurAmerica = DB::select('SELECT PaisNombre,PaisPoblacion FROM pais WHERE PaisContinente = "South America";');
        $PaisesArtantica = DB::select('SELECT PaisNombre,PaisPoblacion FROM pais WHERE PaisContinente = "Antarctica";');
        $PaisesOceania = DB::select('SELECT PaisNombre,PaisPoblacion FROM pais WHERE PaisContinente = "Oceania";');

        return compact('PaisesNorteAmerica', 'PaisesAfrica', 'PaisesEuropa', 'PaisesAsia', 'PaisesSurAmerica', 'PaisesArtantica', 'PaisesOceania');
    }
}
