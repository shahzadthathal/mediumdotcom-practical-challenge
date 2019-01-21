<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topics extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','slug','status',
    ];


    public $timestamps = false;
}
