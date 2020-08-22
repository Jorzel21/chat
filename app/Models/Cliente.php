<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;

class Cliente extends Model
{
    use UuidTrait;
    use SoftDeletes;


    public function usuarios()
    {
        return $this->belongsToMany(User::class, 'cliente_user');
    }
}
