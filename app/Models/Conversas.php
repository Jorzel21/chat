<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
class Conversas extends Model
{
    use UuidTrait;
    use SoftDeletes;
}
