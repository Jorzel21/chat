<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidTrait;
use Laracodes\Presenter\Traits\Presentable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Canal extends Model
{
    use UuidTrait;
    use Presentable;
    use SoftDeletes;

    protected $presenter = 'App\Presenters\CanalPresenter';

    protected $table = 'canais';

    protected $fillable =
    [
        'nome',
        'cliente_id',
        'status'
    ];

}
