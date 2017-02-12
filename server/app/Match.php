<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'matchs';

    protected $primaryKey = 'match_id';

    public function user_one()
    {
        return $this->hasOne('App\User', 'user_id', 'user_id_one');
    }

    public function user_two()
    {
        return $this->hasOne('App\User', 'user_id', 'user_id_two');
    }
}
