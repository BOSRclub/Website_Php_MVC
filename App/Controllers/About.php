<?php

namespace App\Controllers;

use \Core\View;

class About extends \Core\Controller
{
    public function usAction()
    {
        View::renderTemplate('About/aboutus.html');
        
    }
}
