<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use RBooks\Services\APIAdminService;
use RBooks\Services\CashAccountService;
use RBooks\Services\CashIncomeService;
use RBooks\Services\CashPlanService;
use RBooks\Services\CashAssetService;
use RBooks\Services\StatisticService;
use Illuminate\Support\Facades\Crypt;
use \Auth;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function __construct()
    {
        parent::__construct(null);

        $this->setViewPrefix('dashboard.');
        $this->view->setHeading('');
    }

    public function index(Request $request)
    {
       // if (app(APIAdminService::class)->hasAnyRole($request->user()->role, 'dashboard', 'cview') == 0){
       //     return app(APIAdminService::class)->authorizeRoles(0); //chuyen den trang thong bao loi truy cap
       // }   

//       if (app(APIAdminService::class)->hasUserAccess($request->user()->role, 'dashboard', 'cuserview', $request->user()->id) == 0){
//           return app(APIAdminService::class)->authorizeRoles(0); //chuyen den trang thong bao loi truy cap
//       } 

        $this->view->leftmenu = app(APIAdminService::class)->setLeftMenu();

        $role = Auth()->user()->role;
        if ($role == 'KH'){
            return redirect('/customer');
        }

        return redirect('/manage');
    }

    public function customer(Request $request)
    {
        $this->view->leftmenu = app(APIAdminService::class)->setLeftMenu();


        return $this->view('customer');
    }
    
    public function manage(Request $request)
    {
        $this->view->leftmenu = app(APIAdminService::class)->setLeftMenu();


        return $this->view('manage');
    }        
}
