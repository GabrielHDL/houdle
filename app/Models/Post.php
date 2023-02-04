<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $connection = 'mysql2';

    use HasFactory;

    //Relación polimorfica

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    //Relacion muchos a muchos

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    //Relacion uno a muchos inversa
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
