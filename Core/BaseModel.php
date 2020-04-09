<?php

namespace Core;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    protected $keyType = 'uuid';

    public $incrementing = false;
}