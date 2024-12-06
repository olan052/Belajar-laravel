<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorty extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug'];
}
