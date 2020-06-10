<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Relations\Pivot;

class JobUser extends Pivot {
    /**
     * The database table used by the model.
     *
     * @vendor Contus
     *
     * @package User
     * @var string
     */
    protected $table = 'job_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'job_id', 'user_id'
    ];

}