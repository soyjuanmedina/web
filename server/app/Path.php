<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Path extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'paths';

    protected $primaryKey = 'path_id';

    public function user()
    {
        return $this->hasOne('App\User', 'user_id');
    }
}
