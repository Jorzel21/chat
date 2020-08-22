<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClienteUser extends Model
{

    use SoftDeletes;

    protected $table = 'cliente_user';

    protected $fillable =
    [
        'cliente_id', 'user_id', 'nivel'
    ];


}