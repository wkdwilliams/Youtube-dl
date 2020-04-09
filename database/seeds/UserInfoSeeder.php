<?php

use App\User\Models\UserInfo;
use Illuminate\Database\Seeder;

class UserInfoSeeder extends Seeder
{
    public function run()
    {
        factory(UserInfo::class, 5)->create();
    }
}
