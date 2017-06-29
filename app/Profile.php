<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable= ['full_name', 'about', 'skills', 'job_title', 'company', 'business_email', 'phone1', 'phone2',
        'address1', 'address2', 'facebook', 'twitter', 'user_id'];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
