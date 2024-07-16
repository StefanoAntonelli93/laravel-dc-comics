<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'price', 'series'];
    // oppure se ci sono molti metodi da salvare si usa GUARDED che invece esclude i metodi da salvare
}
