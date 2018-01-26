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
                            {{Form::label('title', 'Tiêu đề')}}
                            {{Form::text('title', isset($job->title) ? $job->title : null,
                                ['class' => "form-control"])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('description', 'Tóm tắt công việc')}}
                            {{Form::textarea('description', isset($job->description) ? $job->description : null,
                                ['class' => "form-control"])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('time_begin', 'Thời gian bắt đầu')}}
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                {{Form::text('time_begin', isset($job->time_begin) ? $job->time_begin->format('Y-m-d') : null,
                                    ['class' => "form-control pull-right datepicker"])}}
                            </div>
                        </div>
                        <div class="form-group">
                            {{Form::label('time_end', 'Thời gian kết thúc')}}
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                {{Form::text('time_end', isset($job->time_end) ? $job->time_end->format('Y-m-d') : null,
                                    ['class' => "form-control pull-right datepicker"])}}
                            </div>
                        </div>
                        <div class="form-group">
                            {{Form::label('price', 'Tiền lương')}}
                            {{Form::text('price', isset($job->price) ? $job->price : null, ['class' => "form-control"])}}
                        </div>
                        <div class="form-group">
                            {{ Form::label('image', 'Ảnh công việc') }}
                            {{ Form::file('image', ['class' => 'form-control', 'accept' => "image/*"]) }}
                        </div>
                        <div class="form-group">
                            {{Form::label('number_people', 'Số lượng người')}}
                            {{Form::text('number_people', isset($job->number_people) ? $job->number_people : null,
                                ['class' => "form-control"])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('gender', 'Yêu cầu giới tính')}}
                            {{Form::select('gender', [0 => 'Cả hai', 1 => 'Nam', 2 => 'Nữ'], 0,
                                ['class' => "form-control"])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('purchase_location', 'Địa điểm thanh toán')}}
                            {{Form::text('purchase_location', isset($job->purchase_location) ? $job->purchase_location : null,
                                ['class' => "form-control"])}}
                        </div>
                        <div class="form-group">
                            {{ Form::submit('Đăng việc', ['class' => 'btn btn-info']) }}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
            </div>
        </div>
    </div>
</div>
@push('js')
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.datepicker').datepicker({
                autoclose: true,
                format: 'yyyy-mm-dd',
                clearBtn: true,
                language: '{{ App::getLocale() }}',
            });
        })
    </script>
@endpush