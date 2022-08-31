<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ciudad extends Model
{
    use HasFactory;

    protected $table = "ciudad";

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function obtenerPais()
    {

        return $this->belongsTo(Pais::class, 'PaisCapital', 'id');
    }
}
