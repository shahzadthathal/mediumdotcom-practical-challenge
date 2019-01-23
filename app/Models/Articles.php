<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title','slug','user_id','topic_id', 'tags','image','description','status','is_popular','reading_time',
    ];

    public function user()
	{
		return $this->hasOne('App\User', 'id', 'user_id');
	}

    public function topic()
    {
        return $this->hasOne('App\Models\Topics', 'id', 'topic_id');
    }

}
