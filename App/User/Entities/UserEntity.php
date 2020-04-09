<?php

namespace App\User\Entities;

use App\User\Models\Post;
use Core\Entity\Entity;
use Core\Entity\EntityCollection;

class UserEntity extends Entity
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $posts;

    /**
     * @return string
     */
    public function getPosts(): string
    {
        return $this->posts;
    }

    /**
     * @param string $posts
     */
    public function setPosts(string $posts): void
    {
        $this->posts = $posts;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }




}
