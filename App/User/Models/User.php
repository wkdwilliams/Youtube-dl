<?php

namespace App\User\Models;

use Core\BaseModel;

class User extends BaseModel
{
    protected $table    = "users";
    protected $fillable = ['id', 'name', 'email'];

    public function getPosts()
    {
        return $this->hasMany(Post::class);
    }
}
