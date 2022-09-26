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

    public function recruitment()
    {
        return $this->view('recruitment');
    }

    public function recruitmentDetail()
    {
        return $this->view('recruitmentDetail');
    }

    public function client()
    {
        return $this->view('client');
    }

    public function clientDetail()
    {
        return $this->view('clientDetail');
    }

    public function contact()
    {
        return $this->view('contact');
    }
}
