<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'interests';

    protected $primaryKey = 'interest_id';

	public $timestamps = false;

    public function users()
    {
        return $this->belongsTo('App\UserInterest', 'interest_id');
    }
}
