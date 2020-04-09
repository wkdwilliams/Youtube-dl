<?php

namespace Core;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class View
{

    private static function getTwig(): Environment
    {
        $loader = new FilesystemLoader('resources/views', getcwd() . '/../');

        return new Environment($loader);
    }

    public static function render(string $name, array $data = [])
    {
        $view = self::getTwig()->load($name . ".twig");

        return $view->render($data);
    }

}