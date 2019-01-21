<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'status',
    ];

    
    public $timestamps = false;
}
