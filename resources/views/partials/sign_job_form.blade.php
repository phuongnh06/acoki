<div class="modal fade" id="sign_job_form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Đăng việc làm</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="col-xs-6">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {!! Form::open(['url' => $route, 'method' => $method, 'files' => true]) !!}
                        <div class="form-group">
                            {{Form::label('type', 'Loại công việc')}}
                            {{Form::select('type', config('jobs'), 1,
                                ['class' => "form-control"])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('title', "Tên công việc", ['class' => 'field-required'])}}
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-briefcase"></i>
                                </div>
                            {{Form::text('title', null, ['class' => "form-control", 'placeholder' => 'Tên công việc/sản phẩm'])}}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('image', 'Ảnh mô tả') }}
                            {{ Form::file('image', ['class' => 'form-control', 'accept' => "image/*"]) }}
                        </div>
                        <div class="form-group">
                            {{Form::label('description', 'Mô tả công việc', ['class' => 'field-required'])}}
                            {{Form::textarea('description', null, ['class' => "form-control", 'placeholder' => 'Mô tả'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('purchase_location', 'Vị trí nhận', ['class' => 'field-required'])}}
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                {{Form::text('purchase_location', null, ['class' => "form-control", 'placeholder' => 'Địa điểm nhận việc'])}}
                            </div>
                        </div>
                        <div class="form-group ship buy">
                            {{Form::label('delivery_location', 'Vị trí giao')}}
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                            {{Form::text('delivery_location', null, ['class' => "form-control", 'placeholder' => 'Địa điểm giao hàng hóa/sản phẩm'])}}
                            </div>
                        </div>
                        <div class="form-group ship buy">
                            {{Form::label('name_receiver', 'Tên người nhận')}}
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                            {{Form::text('name_receiver', null, ['class' => "form-control", 'placeholder' => 'Tên người nhận hàng hóa/sản phẩm'])}}
                            </div>
                        </div>
                        <div class="form-group ship buy">
                            {{Form::label('phone_receiver', 'SĐT người nhận')}}
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </div>
                            {{Form::text('phone_receiver', null, ['class' => "form-control", 'placeholder' => 'SĐT người nhận hàng hóa/sản phẩm'])}}
                            </div>
                        </div>
                        <div class="form-group">
                            {{Form::label('time_begin', 'Thời gian bắt đầu', ['class' => 'field-required'])}}
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                {{Form::text('time_begin', null, ['class' => "form-control pull-right datepicker"])}}
                            </div>
                        </div>
                        <div class="form-group pg talk work">
                            {{Form::label('time_end', 'Thời gian kết thúc')}}
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                {{Form::text('time_end', null, ['class' => "form-control pull-right datepicker"])}}
                            </div>
                        </div>
                        {{--<div class="form-group online">--}}
                            {{--{{Form::label('deadline', 'Thời gian hoàn thành')}}--}}
                            {{--<div class="input-group date">--}}
                                {{--<div class="input-group-addon">--}}
                                    {{--<i class="fa fa-calendar"></i>--}}
                                {{--</div>--}}
                                {{--{{Form::text('deadline', null, ['class' => "form-control pull-right datepicker"])}}--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="form-group">
                            {{Form::label('time_work', 'Thời gian làm (giờ)')}}
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                {{Form::text('time_work', null, ['class' => "form-control pull-right", 'placeholder' => '1'])}}
                            </div>
                        </div>
                        <div class="form-group">
                            {{Form::label('price', 'Tiền công', ['class' => 'field-required'])}}
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-dollar"></i>
                                </div>
                            {{Form::text('price', null, ['class' => "form-control", 'placeholder' => '20000'])}}
                            </div>
                        </div>
                        <div class="form-group pg talk work">
                            {{Form::label('number_people', 'Số lượng người')}}
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-users"></i>
                                </div>
                            {{Form::text('number_people', null, ['class' => "form-control", 'placeholder' => '1'])}}
                            </div>
                        </div>
                        <div class="form-group pg talk work">
                            {{Form::label('gender', 'Yêu cầu giới tính')}}
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-transgender"></i>
                                </div>
                            {{Form::select('gender', [null => 'Cả hai', 0 => 'Nam', 1 => 'Nữ'], null,
                                ['class' => "form-control"])}}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::submit('Đăng việc', ['class' => 'btn btn-info']) }}
                        </div>
                        <i>Các mục có dấu <span style="color: red;">*</span> là bắt buộc.</i>
                    {!! Form::close() !!}
                </div>
            </div>

            <!-- Modal footer -->
            {{--<div class="modal-footer">--}}
                {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
            {{--</div>--}}
        </div>
    </div>
</div>
@push('js')
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.datepicker').datepicker({
                autoclose: true,
                format: 'dd-mm-yyyy',
                clearBtn: true,
                language: '{{ App::getLocale() }}',
            });
        })
    </script>
@endpush