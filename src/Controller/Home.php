<?php
/**
 * vim:ft=php et ts=4 sts=4
 * @author z14 <z@arcz.ee>
 * @version
 * @todo
 */

namespace App\Controller;

// use App\Controller\Abstr;

class Home extends Abstr
{
    private $a;
    private $b;
    private $c;
    
    public function __construct()
    {
        echo $this->render('index.html', ['name' => 'jack']);
    }

    public function __destruct()
    {
    }
}

