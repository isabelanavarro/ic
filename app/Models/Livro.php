<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Livros;

class Livro extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'livro',
        'users_id',
        'namel',
        'autor',
        'editora',
        'categoria',
        'classificação',
        'descricao',
        'image',

    ];

}
