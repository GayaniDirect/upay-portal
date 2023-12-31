<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;

    protected $table = "field";
    public $timestamps = false;

    protected $fillable = [
        'name',
        'email',
        'actions'
    ];
}
