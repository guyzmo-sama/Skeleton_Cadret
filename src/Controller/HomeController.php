<?php
 
namespace App\Controller;
 

use Cadret\AbstractController;

 
class HomeController extends AbstractController
{
    public function print() 
    {
        return $this->render('web/home');
    }
}
