<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laracodes\Presenter\Traits\Presentable;

class Departamento extends Model
{
    use UuidTrait;
    use SoftDeletes;
    use Presentable;
    

    protected $presenter = 'App\Presenters\DepartamentoPresenter';
    protected $table = 'departamentos';

    protected $fillable =
    [
        'nome',
        'cliente_id',
        'status'
    ];

}
