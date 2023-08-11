<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'date',
        'description',
        'boards_id'
    ];

    public function board(){
        return $this->belongsTo(Board::class);
    }
}
