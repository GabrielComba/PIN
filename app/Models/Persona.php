<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Persona extends Model
{
    use softDeletes;

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'apellido',
        'email',
    ];
}
