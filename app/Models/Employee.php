<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'celular', 'setor', 'ramal', 'email1', 'email2', 'email3', 'email4'];
}
