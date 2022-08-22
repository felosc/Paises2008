<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pais extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function ciudad()
    {
        return $this->hasMany(ciudad::class, 'id', 'PaisCapital');
    }
}
