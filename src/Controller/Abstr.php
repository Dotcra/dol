<?php
/**
 * vim:ft=php et ts=4 sts=4
 * @author z14 <z@arcz.ee>
 * @version
 * @todo
 */

namespace App\Controller;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class Abstr
{
    private $a;
    private $b;
    private $c;
    
    public function __construct()
    {
    }

    public function __destruct()
    {
    }

    public function render($template, $arr)
    {
        $loader = new FilesystemLoader('../src/templates');

        $twig = new Environment($loader, ['cache' => '../var']);

        return $twig->render($template, $arr);
    }
}

