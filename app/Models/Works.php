<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Works extends Model
{
    protected $table = 'work';

    protected $primaryKey = 'work_id';
    public $timestamps = false;

    protected $fillable = ['type', 'title', 'description', 'time_begin', 'time_end', 'image_default',
        'create_time', 'user_id', 'number_people', 'price', 'purchase_location', 'picture_id', 'gender'];

    public function getShortTitleAttribute()
    {
        if (mb_strlen($this->title) >= 30) {
            return substr($this->title, 0, 27).' ...';
        }

        return $this->title;
    }

    public function getShortAddressAttribute()
    {
        if (mb_strlen($this->purchase_location) >= 0) {
            return substr($this->purchase_location, 0, 20).' ...';
        }

        return $this->purchase_location;
    }

    public function getAvatarAttribute()
    {
        return $this->user->avatar;
    }

    public function getTimeFinishAttribute()
    {
        if($this->time_end) {
            $time = date('d/m/Y', $this->time_end/1000);
            return $time;
        }
        return '';
    }

    public function getStatusAttribute()
    {
        if($this->time_end && ($this->time_end/1000) < strtotime(Carbon::now())) {
            return 'Hết hạn';
        }
        return 'Đang tuyển';
    }

    public function getNumberOfCommentAttribute()
    {
        return count($this->comment);
    }

    public function getNumberOfRequestAttribute()
    {
        return count($this->request);
    }

    public function user()
    {
        return $this->belongsTo(Users::class, 'user_id');
    }

    public function comment()
    {
        return $this->hasMany(Comments::class, 'work_id');
    }

    public function request()
    {
        return $this->hasMany(Requests::class, 'work_id');
    }
}
