<?php

namespace App\User\Models;

use Core\BaseModel;

class UserInfo extends BaseModel
{
    protected $table    = "user_info";
    protected $fillable = ['id', 'name', 'email'];

}
