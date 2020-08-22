<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Departamento extends Model
{
    use UuidTrait;
    use SoftDeletes;

    protected $table = 'departamentos';

    protected $fillable =
    [
        'nome',
        'cliente_id',
        'status'
    ];

}
