<?php

namespace App\User\Repositories;

use App\User\DataMappers\UserDataMapper;
use App\User\Models\User;
use Core\Repository;

class UserRepository extends Repository
{
    public function __construct()
    {
        parent::__construct(new UserDataMapper(), new User());
    }
}
