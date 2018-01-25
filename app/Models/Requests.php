<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    protected $table = 'user_request_work';
    protected $primaryKey = 'request_id';

    public $timestamps = false;
}
