<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table='Users';
    protected $primaryKey= 'Id';
    public $timestamps=false; 
}
