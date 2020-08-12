<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ficha extends Model
{
    protected $table = 'ficha';
    protected $primaryKey = 'id_fic';
    public $timestamps = true;
}
