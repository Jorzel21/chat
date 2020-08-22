<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clientes extends Model
{
    use UuidTrait;
    use SoftDeletes;
}
