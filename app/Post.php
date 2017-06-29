<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'slug', 'content', 'number_of_views', 'status', 'is_featured', 'user_id'];

    public function publisher() {
        return $this->belongsTo('App\User');
    }
}
