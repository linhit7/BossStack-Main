<?php

return [
    'repositories' => [
        \RBooks\Repositories\AuthorRepository::class,
        \RBooks\Repositories\CategoryRepository::class,
        \RBooks\Repositories\ImageRepository::class,
        \RBooks\Repositories\ProductRepository::class,
        \RBooks\Repositories\SupplierRepository::class,
        \RBooks\Repositories\CustomerRepository::class,
        \RBooks\Repositories\UserRepository::class,
        \RBooks\Repositories\WarehouseRepository::class,
        \RBooks\Repositories\AttributeRepository::class,
        \RBooks\Repositories\CustomerGroupRepository::class,
    ],

    'services' => [
        \RBooks\Services\AuthorService::class,
        \RBooks\Services\CategoryService::class,
        \RBooks\Services\ImageService::class,
        \RBooks\Services\ProductService::class,
        \RBooks\Services\SupplierService::class,
        \RBooks\Services\CustomerService::class,
        \RBooks\Services\UserService::class,
        \RBooks\Services\WarehouseService::class,
        \RBooks\Services\AttributeService::class,
        \RBooks\Services\CustomerGroupService::class,
    ],

    'GENDERTYPE' => ['0'=>_('Nam'), 
            '1'=>_('Nữ'),
          ],   

    'CUSTOMERTYPE' => ['0'=>_('Tổ chức'), 
            '1'=>_('Cá nhân'),
            '2'=>_('Học sinh/sinh viên'),
            '9'=>_('Khác'),
          ], 

    'CURRENCYTYPE' => ['VND'=>_('VND'), 
            'USD'=>_('USD'),
          ],   

    'FINISHTYPE' => ['0'=>_('CÒN HẠN'), 
            '1'=>_('HẾT HẠN'),
          ],   

    'TERMTYPE' => ['Y'=>_('Năm'), 
            'P'=>_('Quý'),
            'M'=>_('Tháng')
          ],           

    'CONTRACTSTATUSTYPE' => ['1'=>_('Mới mở'), 
            '2'=>_('Hoạt động'),
            '3'=>_('Tất toán'),
          ],           

    'APPROVESTATUSTYPE' => ['P'=>_('Đang chờ duyệt'), 
            'A'=>_('Đã duyệt'),            
            'R'=>_('Không duyệt'),
          ], 

    'ACCOUNTSTATUSTYPE' => [ 
            '0'=>_('Hoạt động'),
            '1'=>_('Tất toán'),
          ], 

    'PERIODTYPES' => [ 
            'd'=>_('Ngày'),
            'm'=>_('Tháng'),
            'y'=>_('Năm'),
          ],            

    'OPERATIONLOG' => [ 
            '0'=>_('Đăng nhập'),
            '1'=>_('Đăng xuất'),
            '2'=>_('Thêm mới'),
            '3'=>_('Cập nhật'),
            '4'=>_('Xóa'),
          ], 

    'ERRORLOG' => [ 
            '1'=>_('Mật khẩu cũ nhập vào không khớp với mật khẩu đã lưu.'),
            '2'=>_('Mật khẩu mới không đủ chiều dài tối thiểu.'),
            '3'=>_('Mật khẩu mới và mật khẩu xác nhận không giống nhau.'),
            '4'=>_('Tài khoản quý khách đã hết hạn sử dụng. Vui lòng liên hệ bộ phận chăm sóc khách hàng để được hỗ trợ.'),
            '5'=>_('Tài khoản quý khách đã bị khóa. Vui lòng liên hệ bộ phận chăm sóc khách hàng để được hỗ trợ.'),
            '6'=>_('Mã kiểm tra không chính xác. Quý khách vui lòng kiểm tra lại.'),            
          ],

    'PAYMENTTYPE' => [ 
            '0'=>_('Chưa thanh toán'),
            '1'=>_('Đã thanh toán'),
          ], 
                    
    'PAYMENTMOTHOD' => [ 
            '0'=>_('Trực tiếp tại văn phòng'),
            '1'=>_('Chuyển khoản ngân hàng'),
            '2'=>_('Thanh toán qua MOMO'),
          ],

    'ACCOUNTTYPE' => ['0'=>_('Mở'), 
            '1'=>_('Khóa'),
          ],

    'PRODUCTACCESSPAGES' => [ 
            '1' => ['retireplans-index', 'cash-index', 'cashplans-index', 'cash-process', 'cashassets-index'],//Goi ca nhan
            '2' => ['retireplans-index', 'cash-index', 'cashplans-index', 'cash-process', 'cashassets-index'],//Goi doanh nghiep
            '3' => ['retireplans-index', 'cash-index', 'cashplans-index', 'invests-index', 'managetransactions-index', 'cash-process', 'cashassets-index'],//Goi vip
            '4' => ['retireplans-index', 'cash-index', 'cashassets-index'],//Goi mien phi
          ],

];
