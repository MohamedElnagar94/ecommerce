<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class papers extends Model
{
    protected $table = 'papers';
    protected $fillable = [
        'description',
    ];
}
