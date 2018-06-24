<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    protected $table = 'vendedores';
    protected $fillable = [
        'id',
        'nome',
        'contato',
        'id_fornecedor'
    ];
    public function estoque() {
        return $this->hasOne(Fornecedor::class);
    }

}
