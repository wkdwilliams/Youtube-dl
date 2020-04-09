<?php

namespace App\User\Controllers;

use App\User\DataMappers\UserDataMapper;
use App\User\Models\User;
use App\User\Repositories\UserRepository;
use Core\Entity\EntityFactory;
use Core\Http\Controllers\Controller;

class UserController extends Controller
{
    public function test()
    {
        $user = EntityFactory::create(UserDataMapper::class, User::class, [
            'name'  => 'Lewy',
            'email' => 'lewis@lewis.com'
        ]);

        (new UserRepository())->create($user);

        return 0;
    }
}
