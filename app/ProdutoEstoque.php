<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoEstoque extends Model
{
    protected $table = 'produtos_estoque';
    protected $fillable = [
        'id',
        'id_estoque',
        'id_produto',
        'quantidade'
    ];
    public function estoque() {
        return $this->hasMany(Pecas::class);
    }
    public function produtp() {
        return $this->hasMany(Produto::class);
    }
}
