<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coche extends Model
{
    protected $fillable = ["nombre","matricula","color","año_fabricacion","foto"];
}
