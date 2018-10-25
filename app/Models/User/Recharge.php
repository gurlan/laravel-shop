<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Recharge extends Model
{
    // 充值记录
    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'recharge';

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

    // 用户
    public function user()
    {
        return $this->belongsTo('\App\Models\User\User','user_id','id');
    }
}
