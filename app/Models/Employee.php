<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'office',
        'departament',
        'cpf',
        'email',
        'street',
        'number',
        'complement',
        'city',
        'state',
        'cep',
        'cellphone',
        'cellphone2',
        'birth',
        'admission'
    ];
}
