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
        'create_time', 'user_id', 'number_people', 'price', 'purchase_location', 'picture_id', 'gender',
        'deadline', 'name_receiver', 'phone_receiver', 'delivery_location', 'time_work'];

    public function getShowPriceAttribute()
    {
        $prices = explode('-', $this->price);
        $result = '';
        foreach($prices as $price) {
            $result .= number_format($price).'-';
        }
        return rtrim($result, '-');
    }

    public function getShortTitleAttribute()
    {
        $result = $this->cutStringBySpace($this->title, 20);

        return $result;
    }

    public function getShortAddressAttribute()
    {
        $result = $this->cutStringBySpace($this->purchase_location, 20);

        return $result;
    }

    public function getAvatarAttribute()
    {
        return $this->user->avatar;
    }

    public function getTimeFinishAttribute()
    {
        $time = $this->time_begin;
        if($time) {
            $time = date('d-m-Y', $time/1000);
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

    function cutStringBySpace($str, $length, $minword = 3)
    {
        $sub = '';
        $len = 0;
        foreach (explode(' ', $str) as $word)
        {
            $part = (($sub != '') ? ' ' : '') . $word;
            $sub .= $part;
            $len += strlen($part);
            if (strlen($word) > $minword && strlen($sub) >= $length)
            {
                break;
            }
        }
        return $sub . (($len < strlen($str)) ? '...' : '');
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
