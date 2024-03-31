@extends('backend.layouts.app')
@section('controller','Trang')
@section('controller_route',route('pages.list'))
@section('action','Danh sách')
@section('content')
	<div class="content">
		<div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
               	@include('flash::message')
               	<form action="{{ route('pages.build.post') }}" method="POST">
					{{ csrf_field() }}
					<input name="type" value="{{ $data->type }}" type="hidden">

	               	<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label for="">Trang</label>
								<input type="text" class="form-control" value="{{ $data->name_page }}" disabled="">

								@if (\Route::has($data->route))
									<h5>
										<a href="{{ route($data->route) }}" target="_blank">
					                        <i class="fa fa-hand-o-right" aria-hidden="true"></i>
					                        Link: {{ route($data->route) }}
					                    </a>
									</h5>
				                @endif
							</div>

						</div>
					</div>
					<div class="nav-tabs-custom">
				        <ul class="nav nav-tabs">
				        	<li class="active">
				            	<a href="#about" data-toggle="tab" aria-expanded="true">Giới thiệu</a>
				            </li>
				        </ul>
				    </div>
				    <?php if(!empty($data->content)){
				    	$content = json_decode($data->content);

				    } ?>
				    <div class="tab-content">

						<div class="tab-pane active" id="about">
							<div class="row">
								<div class="col-sm-12">
                                    <label for="">Đầu trang</label>
                                    <div class="form-group">
                                        <label>Banner</label>
                                        <div class="image">
                                            <div class="image__thumbnail">
                                                <img src="{{ $data->banner ?  $data->banner : __IMAGE_DEFAULT__ }}"
                                                     data-init="{{ __IMAGE_DEFAULT__ }}">
                                                <a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
                                                    <i class="fa fa-times"></i></a>
                                                <input type="hidden" value="{{ @$data->banner }}" name="banner"/>
                                                <div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
										<label for="">Khối</label>
										<input type="text" name="content[block]" value="{!! @$content->block !!}" class="form-control">
									</div>

                                    <div class="form-group">
										<label for="">Tiêu đề</label>
										<input type="text" name="content[name]" value="{!! @$content->name !!}" class="form-control">
									</div>
									<div class="form-group">
										<label for="">Nội dung</label>
										<textarea class="content" name="content[content]">{!! @$content->content !!}</textarea>
									</div>
								</div>
							</div>
						</div>

			           <button type="submit" class="btn btn-primary">Lưu lại</button>
			        </div>
				</form>
			</div>
		</div>
	</div>
@stop
