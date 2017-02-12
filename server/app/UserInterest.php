<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInterest extends Model
{
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_interests';

    public function user()
    {
        return $this->hasOne('App\User', 'user_id');
    }

    public function interest()
    {
        return $this->hasOne('App\User', 'interest_id');
    }

}
