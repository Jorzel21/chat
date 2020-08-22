<?php

namespace App\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laracodes\Presenter\Traits\Presentable;

class Oferta extends Model
{
    use UuidTrait;
    use SoftDeletes;

    public $incrementing = false;
    protected $presenter = 'App\Presenters\OfertaPresenter';


    public function licenciado()
    {
        return $this->belongsTo(Licenciado::class);
    }

    public function comerciante()
    {
        return $this->belongsTo(Comerciante::class);
    }

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }

}
