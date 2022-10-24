<?php

namespace App\Http\Controllers\ProductManage;

use \Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RBooks\Services\APIAdminService;
use RBooks\Services\BlogService;
use RBooks\Services\UserService;
use App\Http\Requests\BlogStoreRequest;
use RBooks\Models\Blog;

class BlogController extends Controller
{
    public function __construct(BlogService $service)
    {
        parent::__construct($service);

        $this->setViewPrefix('product-manage.blog.');
        $this->setRoutePrefix('blogs-');

        $this->view->setHeading('BLOG');
    }

    public function index(Request $request)
    {
                       
        return $this->view('index');
    }
    
    public function manage(Request $request)
    {
        $this->view->setHeading('QUẢN LÝ BLOG');

        return $this->view('manage');
    }    

    public function store(BlogStoreRequest $request)
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
    
    public function update(BlogStoreRequest $request, $id)
    {

        return $this->view('manage');
    }
        
    public function delete($id)
    {

        return $this->view('manage');
    }      
}
