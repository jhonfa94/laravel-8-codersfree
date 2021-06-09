<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    /**
     * La propiedad $fillable permite definir los campos que se pueden hacer insert
     */
    // protected $fillable = ['name', 'description', 'categoria'];

    /**
     * La propieedad $guarded permite definir que campos no se deben agregar a la tabla
     * es decir que los ignora
     */
    protected $guarded = [];

    public function getRouteKeyName()
    {
        // return $this->getKeyName();
        return 'slug';
    }
}
