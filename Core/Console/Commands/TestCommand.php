<?php

namespace Core\Console\Commands;

use App\User\Repositories\UserRepository;
use Illuminate\Console\Command;

class TestCommand extends Command
{

    protected $signature = 'users:get';

    public function handle()
    {
        $users = (new UserRepository())
            ->whereNotNull('id')
            ->entityCollection()
            ->getEntities();

        $this->table(['id', 'name'], collect($users)->map(function($u){
            return [$u->getId(), $u->getName()];
        })->toArray());
    }

}