<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetControl extends Model
{
    use HasFactory;

    protected $fillable = ['grupo', 'setor', 'codigo', 'produto', 'marca', 'cor', 'perifericos', 'data_entrada', 'descricao'];

    protected $casts = [ 'perifericos' => 'array' ];
}
