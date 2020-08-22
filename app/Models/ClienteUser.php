<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClienteUser extends Model
{
       
    protected $table = 'cliente_user';
    protected $fillable = ['user_id', 'cliente_id'];

}
