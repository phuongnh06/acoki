<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Acoki</title>
    <script src="{{asset('js/jquery-3.2.1.js')}}"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('bootstrap-4.0.0/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
	<div class="color-part">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-xl-3">
                        <span class="icorn icorn-logo float-left"></span>
                        <p class="acoki float-left">ACOKI</p>
                        <a href="#" class="border-only text-uppercase float-right sign-in sign-in-right">
                            Đăng nhập
                        </a>
                    </div>
                    <div class="col-xl-8 offset-xl-1">
                        <div style="margin-top: 26px;">
                            <ul class="menu text-uppercase">
                                <li class="link-active"><a href="#">Trang chủ</a></li>
                                <li><a href="#intro">Giới thiệu</a></li>
                                <li><a href="#news">Tin tức</a></li>
                                <li><a href="#download">Tải về</a></li>
                                <li>
                                    <a href="#more">Thêm</a>
                                </li>
                                <li>
                                    <a href="#" class="border-only text-uppercase sign-in">
                                        Đăng nhập
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="menu-block">
                            <div class="menu-block-header">
                                <p class="h4">
                                    <span class="fa fa-paper-plane"></span>
                                    ĐĂNG VIỆC NGAY
                                </p>
                            </div>
                            <form method="post" action="">
                                <div class="form-group">
                                    <label>Tiêu đề</label>
                                    <input type="text" title="Tiêu đề" class="form-control" name="title">
                                </div>
                                <div class="form-group">
                                    <label>Nội dung công việc</label>
                                    <textarea title="Nội dung công việc" rows="9" class="form-control" name="content"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Đăng việc</button>
                                <a href="#" class="btn btn-success float-right">Việc của tôi</a>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="menu-block">
                            <div class="menu-block-header">
                                <p class="h4">
                                    <span class="fa fa-search"></span>
                                    TÌM VIỆC NGAY
                                    <a class="radius-button bg-success float-right">
                                        Xem thêm &gt;&gt;
                                    </a>
                                </p>
                            </div>
                            <div class="menu-block-content">
                                <div class="menu-block-left">
                                    <img src="https://scontent.fhan3-1.fna.fbcdn.net/v/t1.0-9/20842298_2359923707566363_5413325016726449840_n.jpg?oh=55098cb14d7631f7744ca1505fda8c9c&oe=5AB45F29" width="60" height="60" style="border-radius: 50%">
                                    <div style="margin-top: 4px;">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                                <div class="menu-block-info">
                                    <p class="menu-info-name">Phát tờ rơi</p>
                                    <p class="menu-info-address">
                                        <span class="fa fa-map-marker"></span>
                                        Minh Khai, Hà Nội
                                    </p>
                                    <p class="menu-info-info">5 ứng tuyển, 8 bình luận</p>
                                </div>
                                <div class="menu-block-right">
                                    <p class="menu-info-price">70.000đ</p>
                                    <p class="menu-info-status">Đang tuyển</p>
                                    <p class="menu-info-day">30/12/2017</p>
                                </div>
                            </div>
                            <div class="menu-block-content">
                                <div class="menu-block-left">
                                    <img src="https://scontent.fhan3-1.fna.fbcdn.net/v/t1.0-9/20842298_2359923707566363_5413325016726449840_n.jpg?oh=55098cb14d7631f7744ca1505fda8c9c&oe=5AB45F29" width="60" height="60" style="border-radius: 50%">
                                    <div style="margin-top: 4px;">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                                <div class="menu-block-info">
                                    <p class="menu-info-name">Phát tờ rơi</p>
                                    <p class="menu-info-address">
                                        <span class="fa fa-map-marker"></span>
                                        Minh Khai, Hà Nội
                                    </p>
                                    <p class="menu-info-info">5 ứng tuyển, 8 bình luận</p>
                                </div>
                                <div class="menu-block-right">
                                    <p class="menu-info-price">70.000đ</p>
                                    <p class="menu-info-status">Đang tuyển</p>
                                    <p class="menu-info-day">30/12/2017</p>
                                </div>
                            </div>
                            <div class="menu-block-content">
                                <div class="menu-block-left">
                                    <img src="https://scontent.fhan3-1.fna.fbcdn.net/v/t1.0-9/20842298_2359923707566363_5413325016726449840_n.jpg?oh=55098cb14d7631f7744ca1505fda8c9c&oe=5AB45F29" width="60" height="60" style="border-radius: 50%">
                                    <div style="margin-top: 4px;">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                                <div class="menu-block-info">
                                    <p class="menu-info-name">Phát tờ rơi</p>
                                    <p class="menu-info-address">
                                        <span class="fa fa-map-marker"></span>
                                        Minh Khai, Hà Nội
                                    </p>
                                    <p class="menu-info-info">5 ứng tuyển, 8 bình luận</p>
                                </div>
                                <div class="menu-block-right">
                                    <p class="menu-info-price">70.000đ</p>
                                    <p class="menu-info-status">Đang tuyển</p>
                                    <p class="menu-info-day">30/12/2017</p>
                                </div>
                            </div>
                            <div class="menu-block-content">
                                <div class="menu-block-left">
                                    <img src="https://scontent.fhan3-1.fna.fbcdn.net/v/t1.0-9/20842298_2359923707566363_5413325016726449840_n.jpg?oh=55098cb14d7631f7744ca1505fda8c9c&oe=5AB45F29" width="60" height="60" style="border-radius: 50%">
                                    <div style="margin-top: 4px;">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                                <div class="menu-block-info">
                                    <p class="menu-info-name">Phát tờ rơi</p>
                                    <p class="menu-info-address">
                                        <span class="fa fa-map-marker"></span>
                                        Minh Khai, Hà Nội
                                    </p>
                                    <p class="menu-info-info">5 ứng tuyển, 8 bình luận</p>
                                </div>
                                <div class="menu-block-right">
                                    <p class="menu-info-price">70.000đ</p>
                                    <p class="menu-info-status">Đang tuyển</p>
                                    <p class="menu-info-day">30/12/2017</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
    <div id="intro" class="background-image-part">
        <div class="container">
            <div class="content">
                <h2 class="introduction">Bạn muốn tìm hiểu về acoki?</h2>
                <p style="width: 160px; border-top: 2px solid #9bbeda; margin: 50px 0;"></p>
                <p class="intro-param">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lobortis, velit eu interdum rhoncus,massa neque commodo risus, ac eleifend mauris augue vitae lectus. Praesent blandit, massa non sodales cursus, quam elit tempus urna, sit amet mattis sem enim et odio. Nam at diam eget erat convallis facilisis in at diam. Proin gravida tortor erat, sit amet gravida urna commodo at. Donec vitae felis
                </p>
                <a class="intro-more" href="" onclick="alert('Bị lừa rồi ahahah')">
                    Xem thêm
                </a>
            </div>
        </div>
    </div>
    <div id="more" class="color-part">
        <div class="application-background">
            <p class="app-text">
                Acoki application
            </p>
            <div style="text-align: center">
                <p style="width: 140px; border-top: 2px solid #fff; display: inline-block"></p>
            </div>
            <div class="screen-mobile">
                <img src="{{asset('images/screenmobile.png')}}" class="screen screenMobile">
                <img src="{{asset('images/screen1.png')}}" class="screen screen1" id="screen1">
                <img src="{{asset('images/screen4.png')}}" class="screen screen2" id="screen2">
                <img src="{{asset('images/screen5.png')}}" class="screen screen3" id="screen3">
                <img src="{{asset('images/screen3.png')}}" class="screen screen4" id="screen4">
                <img src="{{asset('images/screen2.png')}}" class="screen screen5" id="screen5">
                <img src="{{asset('images/screen5.png')}}" class="screen screen6" id="screen6">
            </div>
        </div>
    </div>
    <div id="news" class="white-part">
        <div class="container">
            <div class="content">
                <div class="customer-said">
                    <p>Khách hàng nói gì về acoki</p>
                </div>
                <div style="text-align: center">
                    <p style="width: 140px; border-top: 2px solid #9bbeda; display: inline-block"></p>
                </div>
                <div class="customer-detail detail-1">
                    <div class="customer-info">
                        <img src="https://scontent.fhan3-1.fna.fbcdn.net/v/t1.0-9/10590573_498302647016806_8415941919985221539_n.jpg?oh=5451b9cee3b49371bfc0f46cd81e57e3&oe=5ABCAFBA">
                        <p class="h3">Đào Quang Duy - Leader Team Tester</p>
                    </div>
                    <div class="customer-comment">
                        <span class="icorn icorn-open icorn-top-left"></span>
                        <span class="icorn icorn-close icon-bottom-right"></span>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lobortis,
                            velit eu interdum rhoncus, massa neque commodo risus, ac eleifend mauris augue vitae lectus.
                            Praesent blandit, massa non sodales cursus, quam elit tempus urna, sit amet mattis sem enim
                            et odio. Nam at diam eget erat convallis facilisis in at diam. Proin gravida tortor erat,
                            sit amet gravida urna commodo at.
                        </p>
                    </div>
                </div>
                <div class="customer-detail detail-2 hide">
                    <div class="customer-info">
                        <img src="https://scontent.fhan3-1.fna.fbcdn.net/v/t1.0-9/10590573_498302647016806_8415941919985221539_n.jpg?oh=5451b9cee3b49371bfc0f46cd81e57e3&oe=5ABCAFBA">
                        <p class="h3">Nguyễn Minh Đức - Dev Acoki</p>
                    </div>
                    <div class="customer-comment">
                        <span class="icorn icorn-open icorn-top-left"></span>
                        <span class="icorn icorn-close icon-bottom-right"></span>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                    </div>
                </div>
                <div class="customer-detail detail-3 hide">
                    <div class="customer-info">
                        <img src="https://scontent.fhan3-1.fna.fbcdn.net/v/t1.0-9/10590573_498302647016806_8415941919985221539_n.jpg?oh=5451b9cee3b49371bfc0f46cd81e57e3&oe=5ABCAFBA">
                        <p class="h3">Bùi Quang Phú - Best Xàm</p>
                    </div>
                    <div class="customer-comment">
                        <span class="icorn icorn-open icorn-top-left"></span>
                        <span class="icorn icorn-close icon-bottom-right"></span>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lobortis,
                            velit eu interdum rhoncus, massa neque commodo risus, ac eleifend mauris augue vitae lectus.
                        </p>
                    </div>
                </div>
                <div class="slider-box">
                    <span class="slider-tick slider-black" slide="detail-1"></span>
                    <span class="slider-tick" slide="detail-2"></span>
                    <span class="slider-tick" slide="detail-3"></span>
                </div>
            </div>
        </div>
    </div>
    <div id="download" class="black-part">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-xl-4">
                        <p class="h5">Liên hệ</p>
                        <p>
                            <span class="fa fa-map-marker"></span>
                            Tòa nhà HH2 Bắc Hà, Nam Từ Liêm, Hà Nội
                        </p>
                        <p>
                            <span class="fa fa-phone"></span>
                            Điện thoại: 0931 051 333
                        </p>
                        <p>
                            <span class="fa fa-envelope"></span>
                            Email: contact@rabiloo.com
                        </p>
                    </div>
                    <div class="col-xl-4">
                        <p class="h5">Bản đồ</p>
                        <div>
                            <a href="https://goo.gl/PmHGMe" target="_blank">
                                <img src="{{asset('images/map.png')}}" class="img-map">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <p class="h5">Tải ứng dụng</p>
                        <div>
                            <a>
                                <img src="{{asset('images/ios.png')}}" class="img-apps">
                            </a>
                            <a>
                                <img src="{{asset('images/android.png')}}" class="img-apps">
                            </a>
                        </div>
                        <p class="h5 we-are">Chúng tôi</p>
                        <div class="isocial">
                            <a>
                                <span class="fa fa-facebook-official"></span>
                            </a>
                            <a>
                                <span class="fa fa-google-plus-square"></span>
                            </a>
                            <a>
                                <span class="fa fa-youtube-square"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blue-part">
        <div class="content">
            <p>
                <span class="fa fa-copyright"></span>
                2018 Rabiloo giữ mọi quyền
            </p>
        </div>
    </div>
    <script src="{{asset('bootstrap-4.0.0/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
</body>
</html>