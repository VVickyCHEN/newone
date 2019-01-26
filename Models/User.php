<?php

namespace App;

// 登录认证

// 所有 Eloquent 模型都继承自 Illuminate\Database\Eloquent\Model 类。
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    // Eloquent 认为 User 模型存储记录在 Users 表
    // 关联到模型的数据表
    protected $table = 'users';

    protected $primaryKey = 'id';

        /**
     * 表明模型是否应该被打上时间戳
     *
     * @var bool
     */
    // public $timestamps = false;

    const CREATED_AT = 'createdate';

    const UPDATED_AT = 'last_update';

     // 加上对应的字段
    protected $fillable = ['name', 'password'];
}
