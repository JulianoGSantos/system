<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
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
        'birth'
    ];

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
