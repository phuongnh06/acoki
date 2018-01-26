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
                <button type="button" class="btn btn-primary"
                        data-toggle="modal" data-target="{{ Auth::check() ? '#sign_job_form' : '#login_form' }}" >Đăng việc</button>
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
            <div class="menu-block-body">
                @foreach($works as $work)
                    <div class="menu-block-content">
                        <div class="menu-block-left">
                            <img src="{{ $work->avatar }}" width="60" height="60" style="border-radius: 50%">
                            <div style="margin-top: 4px;">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                        <div class="menu-block-info">
                            <p class="menu-info-name" title="{{$work->title}}">{{$work->shortTitle}}</p>
                            <p class="menu-info-address" title="{{$work->purchase_location}}">
                                <span class="fa fa-map-marker"></span>
                                {{ ucfirst($work->shortAddress) }}
                            </p>
                            <p class="menu-info-info">
                                {{$work->numberOfComment}} ứng tuyển, {{$work->numberOfRequest}} bình luận
                            </p>
                        </div>
                        <div class="menu-block-right">
                            <p class="menu-info-price">{{number_format($work->price)}}đ</p>
                            <p class="menu-info-status">{{ $work->status }}</p>
                            <p class="menu-info-day">{{ $work->timeFinish }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>