<?php

namespace App\Controllers;

use \Core\View;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class CheckoutController extends \Core\Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function __construct()
    {
        if(!isset($_SESSION['username-client']))
        {
            header("location:/DoAn1/public/dang-nhap");
        }
    }
    
    public function indexAction()
    {
        View::render('Client/index.php', ['page'=>'ThanhToan']);
    }
}
