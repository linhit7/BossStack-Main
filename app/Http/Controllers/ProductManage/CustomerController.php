<?php

namespace App\Http\Controllers\ProductManage;

use \DB;
use \Auth;
use Illuminate\Support\Facades\Crypt;
use App\Constants\NotificationMessage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RBooks\Services\APIAdminService;
use RBooks\Services\CustomerService;
use RBooks\Services\UserService;
use RBooks\Services\UserCustomerService;
use RBooks\Services\OperationLogService;
use RBooks\Models\Customer;
use Excel;

class CustomerController extends Controller
{
    public function __construct(CustomerService $service)
    {
        parent::__construct($service);

        $this->setViewPrefix('product-manage.customer.');
        $this->setRoutePrefix('customers-');

        $this->view->setHeading('QUẢN LÝ KHÁCH HÀNG');

    }

    public function index(Request $request)
    {

        addToLog('aaaaaa');        
        return $this->view('index');
    }
   

    
}
