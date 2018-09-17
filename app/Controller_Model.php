<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Controller_Model extends Model
{
    protected $table = 'controller_models';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'serialnumber', 'company',
    ];

}
