<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromocionServicio extends Model
{
    use HasFactory;

    protected $table = 'promociones_servicios';

    protected $with = ['servicio'];

    public function servicio() {
        return $this->belongsTo('App\Models\Servicio', 'servicio');
    }
}
