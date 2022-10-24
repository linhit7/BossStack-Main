<?php

namespace App\Http\Controllers\ProductManage;

use \Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RBooks\Services\APIAdminService;
use RBooks\Services\CareerService;
use RBooks\Services\UserService;
use App\Http\Requests\CareerStoreRequest;
use RBooks\Models\Career;

class CareerController extends Controller
{
    public function __construct(CareerService $service)
    {
        parent::__construct($service);

        $this->setViewPrefix('product-manage.career.');
        $this->setRoutePrefix('careers-');

        $this->view->setHeading('TUYỂN DỤNG');
    }

    public function index(Request $request)
    {
                       
        return $this->view('index');
    }
    
    public function manage(Request $request)
    {
        $this->view->setHeading('QUẢN LÝ TUYỂN DỤNG');

        return $this->view('manage');
    }    

    public function store(CareerStoreRequest $request)
    {

        return $this->view('manage');
    }

    public function edit($id)
    {
        $this->view->setSubHeading('Chỉnh sửa');

        return $this->view('edit');
    }

    public function detail($id)
    {
        $this->view->setSubHeading('Chi tiết');

        return $this->view('detail');
    }
    
    public function update(CareerStoreRequest $request, $id)
    {

        return $this->view('manage');
    }
        
    public function delete($id)
    {

        return $this->view('manage');
    }      
}
