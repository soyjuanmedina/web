<?php

namespace App;

//use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    protected $primaryKey = 'user_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email'
    ];

    public function interests()
    {
        return $this->belongsTo('App\UserInterest', 'user_id');
    }

    public function matches_as_one()
    {
        return $this->belongsTo('App\Match', 'user_id_one', 'user_id');
    }

    public function matches_as_two()
    {
        return $this->belongsTo('App\Match', 'user_id_two', 'user_id');
    }

    public function paths()
    {
        return $this->belongsTo('App\Path', 'user_id');
    }

}
