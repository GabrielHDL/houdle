<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $connection = 'mysql2';

    use HasFactory;

    //Relación polimorfica
    public function imageable()
    {
        return $this->morphTo();
    }
}
