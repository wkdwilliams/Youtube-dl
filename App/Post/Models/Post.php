<?php

namespace App\User\Models;

use Core\BaseModel;

class Post extends BaseModel
{
    protected $table = "posts";
    protected $fillable = ['id', 'user_id', 'content'];

}
