<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidTrait;

class Invite extends Model
{
    use UuidTrait;

    protected $fillable = [
        'email', 'cliente_id', 'nivel'
    ];
}
