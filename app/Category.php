<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    public $table = 'categories';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'user_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function jobs()
    {
        return $this->belongsToMany(Job::class);
    }
}
