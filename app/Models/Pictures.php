<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pictures extends Model
{
    protected $table = 'picture';
    protected $primaryKey = 'picture_id';

    public $timestamps = false;
    protected $fillable = ['url_small', 'url_medium', 'url_large', 'create_time'];
}
