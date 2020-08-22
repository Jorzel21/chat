<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Departamentos extends Model
{
    use UuidTrait;
    use SoftDeletes;

}
