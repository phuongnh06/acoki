<div class="row">
    <div class="col-xl-3">
        <span class="icorn icorn-logo float-left"></span>
        <p class="acoki float-left">ACOKI</p>
        @if(!Auth::check())
            <span class="border-only text-uppercase float-right sign-in sign-in-right"
                  data-toggle="modal" data-target="#login_form" >
                Đăng nhập
            </span>
        @else
            <a href="{{route('logout')}}" class="border-only text-uppercase float-right sign-in sign-in-right"
                  data-toggle="modal" data-target="#login_form" >
                Đăng xuất
            </a>
        @endif
    </div>
    <div class="col-xl-8 offset-xl-1">
        <div style="margin-top: 26px;">
            <ul class="menu text-uppercase">
                <li class="link-active"><a href="#">Trang chủ</a></li>
                <li><a href="#intro">Giới thiệu</a></li>
                <li><a href="#news">Tin tức</a></li>
                <li><a href="#download">Tải về</a></li>
                <li>
                    <a href="#more">Xem thêm</a>
                </li>
                <li>
                    @if(!Auth::check())
                        <span class="border-only text-uppercase sign-in"
                              data-toggle="modal" data-target="#login_form" >
                            Đăng nhập
                        </span>
                    @else
                        <a href="{{route('logout')}}" class="border-only text-uppercase sign-in">
                            Đăng xuất
                        </a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</div>