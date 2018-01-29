<div class="modal fade" id="login_form">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Đăng nhập</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                {{--<form method="POST" id="form" action="{{route('accountkit')}}">--}}
                    {{--<div class="form-group">--}}
                        {{--<div class="input-group">--}}
                            {{--<div class="input-group-addon">--}}
                                {{--+84--}}
                            {{--</div>--}}
                            {{--<input type="number" name="phoneNumber" id="phone" class="form-control" placeholder="Nhập vào số điện thoại của bạn"/>--}}
                        {{--</div>--}}
                        {{--<input type="hidden" name="code" id="code" />--}}
                        {{--<input type="hidden" name="countryCode" id="country" value="+84" />--}}
                        {{--<input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<button type="button" class="btn btn-primary" onclick="smsLogin()">Đăng nhập</button>--}}
                    {{--</div>--}}
                {{--</form>--}}
                <a href="{{route('facebookredirect')}}" class="btn btn-primary" style="cursor: pointer;">
                    <span class="fa fa-facebook-official"></span>
                    Đăng nhập với facebook
                </a>
                <br/>
                <a href="https://www.facebook.com/" style="font-size: 14px;">Chưa có tài khoản !? Đăng ký ngay</a>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

{{--@push('js')--}}
    {{--<script src="{{asset('js/accountkit.js')}}"></script>--}}
    {{--<script type="text/javascript" src="https://sdk.accountkit.com/en_US/sdk.js"></script>--}}
{{--@endpush--}}