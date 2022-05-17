<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Albuns extends Model
{
    protected $guarded = ['foto'];
    use HasFactory;
}
