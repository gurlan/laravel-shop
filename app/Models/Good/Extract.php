<?php

namespace App\Models\Good;

use Illuminate\Database\Eloquent\Model;

class Extract extends Model
{
    // 自提点
    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'extract';

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
    // 订单
    public function order()
    {
        return $this->hasMany('\App\Models\Good\Order','ziti','id');
    }
}
