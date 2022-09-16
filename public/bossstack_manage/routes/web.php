<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

//Trang home website
Route::get('/', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

//Trang tin khách hàng/quản trị
Route::group(['middleware' => ['auth','web','checkauth']], function() {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/customer', 'DashboardController@customer')->name('dashboard-customer');
    Route::get('/manage', 'DashboardController@manage')->name('dashboard-manage');
});
    
//Thông tin đăng ký khách hàng
Route::group(['namespace' => 'ProductManage'], function () {
    //Đăng ký thông tin khách hàng
    Route::any('/registerCustomer', 'CustomerController@registerCustomer')->name('customers-register');
    Route::post('/addCustomer', 'CustomerController@addCustomer')->name('customers-addCustomer');
    Route::get('/editCustomer', 'CustomerController@editCustomer')->name('customers-editCustomer');
    Route::any('/updateCustomer/{id}', 'CustomerController@updateCustomer')->name('customers-updateCustomer');

    Route::post('/processPaymentMomo', 'CustomerController@processPaymentMomo')->name('customers-processPaymentMomo');
    Route::get('/resultPaymentMomo', 'CustomerController@resultPaymentMomo')->name('customers-resultPaymentMomo');
    Route::get('/ipnPaymentMomo', 'CustomerController@ipnPaymentMomo')->name('customers-ipnPaymentMomo');

    Route::get('/forgotPassword', 'CustomerController@forgotPassword')->name('customers-forgotPassword');
    Route::post('/mailForgotPassword', 'CustomerController@mailForgotPassword')->name('customers-mailForgotPassword');

    Route::get('/activeCoupon/{id}/{key}', 'CustomerController@activeCoupon')->name('customers-activeCoupon');
});

//API admin
Route::group(['namespace' => 'CompanyManage', 'prefix' => 'apiadmin'], function() {
    Route::get('/access', 'APIAdminController@access')->name('apiadmin-access');
    Route::get('/accessPage', 'APIAdminController@accessPage')->name('apiadmin-accesspage');
    Route::get('/getCaptcha', 'APIAdminController@getCaptcha')->name('apiadmin-getCaptcha');
});

//Thông tin quản trị hệ thống
Route::group(['namespace' => 'CompanyManage', 'middleware' => ['auth','web', 'checkauth']], function () {

    //Người dùng
    Route::group(['prefix' => 'users'], function () {
        Route::get('/', 'UserController@index')->name('users-index');
        Route::get('/add', 'UserController@add')->name('users-add');
        Route::post('/store', 'UserController@store')->name('users-store');
        Route::get('/edit/{id}', 'UserController@edit')->name('users-edit');
        Route::put('/update/{id}', 'UserController@update')->name('users-update');
        Route::delete('/delete/{id}', 'UserController@delete')->name('users-delete');
        Route::get('/export', 'UserController@export')->name('users-export');

        Route::get('user-detail/{parameter}', 'UserController@detail')->name('users-detail');
    });

    //Quản trị user khách hàng
    Route::group(['prefix' => 'usercustomers'], function () {
        Route::get('/', 'UserCustomerController@index')->name('usercustomers-index');
        Route::get('/add', 'UserCustomerController@add')->name('usercustomers-add');
        Route::post('/store', 'UserCustomerController@store')->name('usercustomers-store');
        Route::get('/edit/{id}', 'UserCustomerController@edit')->name('usercustomers-edit');
        Route::put('/update/{id}', 'UserCustomerController@update')->name('usercustomers-update');
        Route::delete('/delete/{id}', 'UserCustomerController@delete')->name('usercustomers-delete');
        Route::get('/export', 'UserCustomerController@export')->name('usercustomers-export');

        Route::get('user-detail/{parameter}', 'UserCustomerController@detail')->name('usercustomers-detail');
    });

    Route::group(['prefix' => 'applicationresources'], function() {
        Route::get('/', 'ApplicationResourcesController@index')->name('applicationresources-index');
        Route::get('/add', 'ApplicationResourcesController@add')->name('applicationresources-add');
        Route::post('/store', 'ApplicationResourcesController@store')->name('applicationresources-store');
        Route::get('/edit/{id}', 'ApplicationResourcesController@edit')->name('applicationresources-edit');
        Route::post('/update/{id}', 'ApplicationResourcesController@update')->name('applicationresources-update');
        Route::delete('/delete/{id}', 'ApplicationResourcesController@delete')->name('applicationresources-delete');
        Route::post('/getApplicationResources', 'ApplicationResourcesController@getApplicationResources')->name('applicationresources-getApplicationResources');
    });

    Route::group(['prefix' => 'applicationmodules'], function() {
        Route::get('/', 'ApplicationModulesController@index')->name('applicationmodules-index');
        Route::get('/add', 'ApplicationModulesController@add')->name('applicationmodules-add');
        Route::post('/store', 'ApplicationModulesController@store')->name('applicationmodules-store');
        Route::get('/edit/{id}', 'ApplicationModulesController@edit')->name('applicationmodules-edit');
        Route::post('/update/{id}', 'ApplicationModulesController@update')->name('applicationmodules-update');
        Route::delete('/delete/{id}', 'ApplicationModulesController@delete')->name('applicationmodules-delete');
    });

    Route::group(['prefix' => 'applicationroles'], function() {
        Route::get('/', 'ApplicationRolesController@index')->name('applicationroles-index');
        Route::get('/add', 'ApplicationRolesController@add')->name('applicationroles-add');
        Route::post('/store', 'ApplicationRolesController@store')->name('applicationroles-store');
        Route::get('/edit/{id}', 'ApplicationRolesController@edit')->name('applicationroles-edit');
        Route::post('/update/{id}', 'ApplicationRolesController@update')->name('applicationroles-update');
        Route::delete('/delete/{id}', 'ApplicationRolesController@delete')->name('applicationroles-delete');
        Route::get('/setResource/{rolecode}', 'ApplicationRolesController@setResource')->name('applicationroles-setResource');
        Route::post('/updateResource', 'ApplicationRolesController@updateResource')->name('applicationroles-updateResource');
        Route::get('/setMenu/{rolecode}', 'ApplicationRolesController@setMenu')->name('applicationroles-setMenu');
        Route::post('/updateMenu', 'ApplicationRolesController@updateMenu')->name('applicationroles-updateMenu');
        Route::post('/getApplicationRoles', 'ApplicationRolesController@getApplicationRoles')->name('applicationroles-getApplicationRoles');
    });

    Route::group(['prefix' => 'applicationfunctiongroups'], function() {
        Route::get('/{applicationmoduleid}', 'ApplicationFunctionGroupsController@index')->name('applicationfunctiongroups-index');
        Route::get('/add-applicationfunctiongroups/{applicationmoduleid}', 'ApplicationFunctionGroupsController@addApplicationFunctionGroups')->name('applicationfunctiongroups-add');
        Route::post('/store', 'ApplicationFunctionGroupsController@store')->name('applicationfunctiongroups-store');
        Route::get('/edit-applicationfunctiongroups/{applicationmoduleid}/{id}', 'ApplicationFunctionGroupsController@editApplicationFunctionGroups')->name('applicationfunctiongroups-edit');
        Route::post('/update/{id}', 'ApplicationFunctionGroupsController@update')->name('applicationfunctiongroups-update');
        Route::delete('/delete-applicationfunctiongroups/{applicationmoduleid}/{id}', 'ApplicationFunctionGroupsController@deleteApplicationFunctionGroups')->name('applicationfunctiongroups-delete');
    });

    Route::group(['prefix' => 'functionassignment'], function() {
        Route::get('/{applicationmoduleid}/{applicationfunctiongroupid}', 'FunctionAssignmentController@index')->name('functionassignment-index');
        Route::get('/add-functionassignment/{applicationmoduleid}/{applicationfunctiongroupid}', 'FunctionAssignmentController@addFunctionAssignment')->name('functionassignment-add');
        Route::post('/store', 'FunctionAssignmentController@store')->name('functionassignment-store');
        Route::get('/edit-functionassignment/{applicationmoduleid}/{applicationfunctiongroupid}/{id}', 'FunctionAssignmentController@editFunctionAssignment')->name('functionassignment-edit');
        Route::post('/update/{id}', 'FunctionAssignmentController@update')->name('functionassignment-update');
        Route::delete('/delete-functionassignment/{applicationmoduleid}/{applicationfunctiongroupid}/{id}', 'FunctionAssignmentController@deleteFunctionAssignment')->name('functionassignment-delete');
    });

    Route::group(['prefix' => 'securityresources'], function() {
        Route::get('/{applicationresourceid}', 'SecurityResourcesController@index')->name('securityresources-index');
        Route::get('/add-securityresources/{applicationresourceid}', 'SecurityResourcesController@addSecurityResources')->name('securityresources-add');
        Route::post('/store', 'SecurityResourcesController@store')->name('securityresources-store');
        Route::get('/edit-securityresources/{applicationresourceid}/{id}', 'SecurityResourcesController@editSecurityResources')->name('securityresources-edit');
        Route::post('/update/{id}', 'SecurityResourcesController@update')->name('securityresources-update');
        Route::delete('/delete-securityresources/{applicationresourceid}/{id}', 'SecurityResourcesController@deleteSecurityResources')->name('securityresources-delete');
    });

});

// Quản lý chức năng khách hàng
Route::group(['namespace' => 'ProductManage', 'middleware' => ['auth','web','checkauth']], function() {

    // Khách hàng
    Route::group(['prefix' => 'customers'], function (){
        Route::get('/', 'CustomerController@index')->name('customers-index');
        Route::get('/add', 'CustomerController@add')->name('customers-add');
        Route::post('/store', 'CustomerController@store')->name('customers-store');
        Route::get('/edit/{id}', 'CustomerController@edit')->name('customers-edit');
        Route::put('/update/{id}', 'CustomerController@update')->name('customers-update');
        Route::delete('/delete/{id}', 'CustomerController@delete')->name('customers-delete');
        Route::any('/export', 'CustomerController@export')->name('customers-export');

        Route::get('/profileCustomer', 'CustomerController@profileCustomer')->name('customers-profileCustomer');
        Route::get('/editSecurityCustomer', 'CustomerController@editSecurityCustomer')->name('customers-editSecurityCustomer');
        Route::get('/historyCustomer', 'CustomerController@historyCustomer')->name('customers-historyCustomer');
        Route::post('/updateSecurityCustomer', 'CustomerController@updateSecurityCustomer')->name('customers-updateSecurityCustomer');

    });

    // Hợp đồng
    Route::group(['prefix' => 'contracts'], function (){
        Route::get('/', 'ContractController@index')->name('contracts-index');
        Route::get('/add', 'ContractController@add')->name('contracts-add');
        Route::post('/store', 'ContractController@store')->name('contracts-store');
        Route::get('/edit/{id}', 'ContractController@edit')->name('contracts-edit');
        Route::put('/update/{id}', 'ContractController@update')->name('contracts-update');
        Route::delete('/delete/{id}', 'ContractController@delete')->name('contracts-delete');

        Route::get('/listContract', 'ContractController@listContract')->name('contracts-listContract');
        Route::get('/detailContract/{id}', 'ContractController@detailContract')->name('contracts-detailContract');
        Route::get('/editContract/{id}', 'ContractController@editContract')->name('contracts-editContract');
        Route::put('/updateContract/{id}', 'ContractController@updateContract')->name('contracts-updateContract');
        Route::delete('/deleteContract/{id}', 'ContractController@deleteContract')->name('contracts-deleteContract');

        Route::get('/listContractQueue', 'ContractController@listContractQueue')->name('contracts-listContractQueue');
        Route::get('/listContractRunning', 'ContractController@listContractRunning')->name('contracts-listContractRunning');
        Route::get('/listContractExpried', 'ContractController@listContractExpried')->name('contracts-listContractExpried');

        Route::get('/addContract', 'ContractController@addContract')->name('contracts-addContract');
        Route::post('/addProduct', 'ContractController@addProduct')->name('contracts-addProduct');
        Route::post('/storeProduct', 'ContractController@storeProduct')->name('contracts-storeProduct');
        Route::post('/processPaymentMomo', 'ContractController@processPaymentMomo')->name('contracts-processPaymentMomo');
        Route::get('/resultPaymentMomo', 'ContractController@resultPaymentMomo')->name('contracts-resultPaymentMomo');
        Route::get('/ipnPaymentMomo', 'ContractController@ipnPaymentMomo')->name('contracts-ipnPaymentMomo');

    });

});

