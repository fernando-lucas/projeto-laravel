<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public function pedidos(){
        return $this->hasMany('App\User');
    }
    protected $fillable = [
        'nome', 'detalhes'
    ];
}
