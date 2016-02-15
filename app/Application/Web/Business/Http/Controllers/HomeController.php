<?php
namespace App\Application\Web\Business\Http\Controllers;


class HomeController extends BaseController
{

    public function index()
    {
        return view('business::home');
    }

}

