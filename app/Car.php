<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'workers';

    protected $primaryKey = 'worker_id';

    public $incrementing = true;

    public $timestamps = false;

}
