<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contatos extends Model
{
    use HasFactory;
    protected $table = 'contatos';
    protected $primaryKey = 'id';
    protected $fillable = ['nome', 'email', 'detalhes'];
}
