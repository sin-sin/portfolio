<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sifre extends Model
{
    
    protected $table    = 'sifre';
    protected $fillable = ['ime', 'sifra', 'username', 'email', 'podesavanja'];
}
