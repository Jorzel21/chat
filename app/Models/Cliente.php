<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use UuidTrait;
    use SoftDeletes;

    protected $table = 'clientes';

    protected $fillable =
    [
        'nome', 'doc'
    ];

}
