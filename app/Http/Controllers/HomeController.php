<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Session;
use DB;

class HomeController extends Controller
{
    public function __construct()
    {
        parent::__construct(null);

        $this->setViewPrefix('home.');
        $this->view->setHeading('Hệ thống quản lý đầu tư');
    }

    public function index(Request $request)
    {
        return $this->view('home');
    }

    public function aboutUs()
    {
        return $this->view('aboutus');
    }

    public function lossControl()
    {
        return $this->view('feature.lossControl');
    }

    public function coaching()
    {
        return $this->view('feature.coaching');
    }

    public function decisionSupport()
    {
        return $this->view('feature.decisionSupport');
    }

    public function contact()
    {
        return $this->view('contact');
    }
}
