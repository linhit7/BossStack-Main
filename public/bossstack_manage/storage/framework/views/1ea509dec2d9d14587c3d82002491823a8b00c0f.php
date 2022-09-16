<div class="header-top-mobile">

    <nav class="menu-mobile" role="navigation">
        <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <ul id="menuToggle-item">

                <li><a href="<?php echo e(route('about-us'), false); ?>">Về chúng tôi</a></li>
                <!-- <li class="menu">
                    <a href="#" onclick="return false;">Sản phẩm</a>
                    <ul class="menu-item">
                        <li><a href="<?php echo e(route('introproducts'), false); ?>">Giới thiệu</a></li>
                        <li><a href="<?php echo e(route('personalcash'), false); ?>">Dòng tiền cá nhân</a></li>
                        <li><a href="<?php echo e(route('saving'), false); ?>">Tiết kiệm</a></li>
                        <li><a href="<?php echo e(route('predictindex'), false); ?>">Dự báo đầu tư</a></li>
                    </ul>
                </li> -->

                <li><a href="<?php echo e(route('personalcash'), false); ?>">Ứng Dụng FIINVES</a></li>
                <li><a href="<?php echo e(route('advisory'), false); ?>">Dịch vụ hỗ trợ</a></li>
                <li class="menu">
                    <a href="#" onclick="return false;">Khóa học Fiinves</a>
                    <ul class="menu-item">
                        <li><a href="<?php echo e(route('coaching-money'), false); ?>">Coaching Về Tiền (Miễn phí)</a></li>
                        <li><a href="<?php echo e(route('fiinves-money'), false); ?>">Fiinves Money Pro (Cá nhân)</a></li>
                        <li><a href="<?php echo e(route('fiinves-business'), false); ?>">Fiinves Business (Doanh nghiệp)</a></li>
                        <!-- <li><a href="<?php echo e(route('invest'), false); ?>">Đầu tư</a></li> -->
                        <li><a href="<?php echo e(route('fiinves-coaching-1'), false); ?>">Coaching 1:1 - Tiền đẻ ra tiền</a></li>
                        <li><a href="<?php echo e(route('fiinves-coaching-2'), false); ?>">Coaching 1:1 - Xử lý dòng tiền</a></li>
                        <li><a href="<?php echo e(route('fiinves-coaching-3'), false); ?>">Coaching 1:1 - Tăng Trưởng Đa Dòng Tiền</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo e(route('contact'), false); ?>">Liên hệ</a></li>
                <!-- <li class="select-language">
                    <form action="">
                        <div class="form-group">
                            <select class="form-control">
                                <option>Chọn ngôn ngữ</option>
                                <option>Vietnamese</option>
                                <option>English</option>
                            </select>
                        </div>
                    </form>
                </li> -->
            </ul>
        </div>
    </nav>

    <div class="logo-mobile">
        <a href="https://fiinves.vn/">
            <img src="<?php echo e(asset('img/logo-finves.png'), false); ?>">
        </a>
    </div>

    <div class="user-mobile">
        <a class="sign-in" href="<?php echo e(route('login'), false); ?>">
            <span><b>Đăng nhập</b></span>
        </a>

        <a class="registration" href="#">
            <span><b>Đăng kí</b></span>
        </a>

        <div class="user d-none">
            <a href="#">
                <span class="name">Đỗ Trùng Dương</span>
                <span class="avatar">
                    <img src="https://fiinves.vn/public/img/user-avt.png">
                </span>
            </a>
        </div>
    </div>

</div>


<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="logo-fund">
                    <a href="https://fiinves.vn/"><img src="<?php echo e(asset('img/logo-finves.png'), false); ?>"></a>
                </div>
            </div>

            <div class="col-md-7">
                <div class="menu-fund">
                    <ul>
                        <li><a href="<?php echo e(route('about-us'), false); ?>">Về chúng tôi</a></li>
                        <li><a href="<?php echo e(route('personalcash'), false); ?>">Ứng Dụng <span>FIINVES</span></a></li>
                        <li><a href="<?php echo e(route('advisory'), false); ?>">Dịch vụ hỗ trợ</a></li>
                        <!-- <li><a href="<?php echo e(route('recruitment'), false); ?>">Tuyển dụng</a></li> -->
                        <li class="menu">
                            <a href="#" onclick="return false;">Khóa học <span>Fiinves</span></a>
                            <ul class="menu-item">
                                <li><a href="<?php echo e(route('coaching-money'), false); ?>">Coaching Về Tiền (Miễn phí)</a></li>
                                <li><a href="<?php echo e(route('fiinves-money'), false); ?>">Fiinves Money Pro (Cá nhân)</a></li>
                                <li><a href="<?php echo e(route('fiinves-business'), false); ?>">Fiinves Business (Doanh nghiệp)</a></li>
                                <!-- <li><a href="<?php echo e(route('invest'), false); ?>">Đầu tư</a></li> -->
                                <li><a href="<?php echo e(route('fiinves-coaching-1'), false); ?>">Coaching 1:1 - Xử Lý Dòng Tiền</a></li>
                                <li><a href="<?php echo e(route('fiinves-coaching-2'), false); ?>">Coaching 1:1 - Tiền Đẻ Ra Tiền</a></li>
                                <li><a href="<?php echo e(route('fiinves-coaching-3'), false); ?>">Coaching 1:1 - Tăng Trưởng Đa Dòng Tiền</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo e(route('contact'), false); ?>">Liên hệ</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3">
                <ul class="language">
                    <li class="sign-in">
                        <a href="<?php echo e(route('login'), false); ?>" style="color: #D55E00; font-weight: bold;">Đăng nhập</a>
                    </li>
                    <li class="sign-in">
                        <a href="<?php echo e(route('customers-register'), false); ?>" style="color: #D55E00; font-weight: bold;">Đăng ký</a>
                    </li>
                    <!-- <li class="select-language">
                        <form action="">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Chọn ngôn ngữ</option>
                                    <option>Vietnamese</option>
                                    <option>English</option>
                                </select>
                            </div>
                        </form>
                    </li> -->
                    <!-- <li>
                        <a href="#">
                            <img src="<?php echo e(asset('img/vietnam.png'), false); ?>">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo e(asset('img/english.png'), false); ?>">
                        </a>
                    </li> -->
                </ul>
            </div>
        </div>
    </div>
</div>


