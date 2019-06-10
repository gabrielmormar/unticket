<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartaoCredito extends Model
{
    protected $table = 'cartao_creditos';

    protected $fillable = ['numero_cartao', 'cod_seguranca', 'data_validade'];

    public function usuario() {
        return $this->belongsTo(User::class, 'usuario_id');
    }

}
