<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{

    protected $table = 'counters';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'modelid','address','port' ,'slaveId',
    ];

}
