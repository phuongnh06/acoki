<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'comment';
    protected $primaryKey = 'comment_id';

    public $timestamps = false;
}
