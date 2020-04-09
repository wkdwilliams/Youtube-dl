<?php

namespace App\User\Repositories;

use App\User\DataMappers\UserInfoDataMapper;
use App\User\Models\UserInfo;
use Core\Repository;

class UserInfoRepository extends Repository
{
    public function __construct()
    {
        parent::__construct(new UserInfoDataMapper(), new UserInfo());
    }
}
