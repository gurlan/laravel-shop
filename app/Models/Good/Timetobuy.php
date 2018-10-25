<?php

namespace App\Models\Good;

use Illuminate\Database\Eloquent\Model;

class Timetobuy extends Model
{
    // 限时抢购表
    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'timetobuy';

    // 不可以批量赋值的字段，为空则表示都可以
    protected $guarded = [];

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $hidden = [];
    /**
     * 表明模型是否应该被打上时间戳
     *
     * @var bool
     */
    public $timestamps = true;
    // 商品
    public function good()
    {
        return $this->belongsTo('\App\Models\Good\Good','good_id','id');
    }
}
