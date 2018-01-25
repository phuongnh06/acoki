<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pictures extends Model
{
    protected $table = 'picture';
    protected $primaryKey = 'picture_id';

    public $timestamps = false;
}
