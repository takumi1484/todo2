<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name', 'is_done'];

//    protected $hidden = ['creted_at','updated_at','deleted_at'];

    protected $casts = [
        'is_done' => 'boolean',
    ];

}
