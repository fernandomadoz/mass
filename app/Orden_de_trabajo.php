<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orden_de_trabajo extends Model
{
	protected $guarded = ['id'];    

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    protected $table = 'ordenes_de_trabajo';
}
