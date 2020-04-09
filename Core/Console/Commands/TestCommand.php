<?php

namespace Core\Console\Commands;

use App\User\Repositories\UserInfoRepository;
use Illuminate\Console\Command;

class TestCommand extends Command
{

    protected $signature = 'users:get';

    public function handle()
    {
        $users = (new UserInfoRepository())
            ->whereNotNull('id')
            ->entityCollection()
            ->getEntities();

        $this->table(['id', 'name'], collect($users)->map(function($u){
            return [$u->getId(), $u->getName()];
        })->toArray());
    }

}