<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public function produto(){
        return $this->belongsTo('App\Produto');
    }
    public function usuario(){
        return $this->belongsTo('App\User');
    }

    protected $fillable = [
        'prato', 'user'
    ];
}
