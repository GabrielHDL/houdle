<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $connection = 'mysql2';
    
    use HasFactory;

    //Relacion muchos a muchos

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
