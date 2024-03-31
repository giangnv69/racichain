@extends('backend.layouts.app')
@section('controller', $module['name'] )
@section('controller_route', route($module['module'].'.index'))
@section('action', renderAction(@$module['action']))
@section('content')
	<div class="content">
		<div class="clearfix"></div>
       	@include('flash::message')
       	<form action="{!! updateOrStoreRouteRender( @$module['action'], $module['module'], @$data) !!}" method="POST">
			@csrf
			@if(isUpdate(@$module['action']))
		        {{ method_field('put') }}
		    @endif
			<div class="row">
				<div class="col-sm-9">
					<div class="nav-tabs-custom">
		                <ul class="nav nav-tabs">
		                    <li class="active">
		                        <a href="#activity" data-toggle="tab" aria-expanded="true">Thông tin </a>
		                    </li>
		                </ul>
		                <div class="tab-content">

		                    <div class="tab-pane active" id="activity">
		                    	<div class="row">
		                    		<div class="col-sm-12">
										<input type="hidden" name="type" value="{{ request()->type ? request()->type : (@$data->type ? @$data->type : 1) }}">
		                    			<div class="form-group">
		                                    <label>Tên khóa học</label>
		                                    <input type="text" class="form-control" name="name" id="name" value="{!! old('name', @$data->name) !!}" required="">
		                                </div>
		                    			<div class="form-group">
		                                    <label>Tiêu đề popup</label>
											<textarea name="name2" id="name2">{!! old('name2', @$data->name2) !!}</textarea>
		                                </div>
										<div class="form-group">
											<label>Mô tả</label>
											<textarea name="desc" id="desc">{!! old('desc', @$data->desc) !!}</textarea>
										</div>
										<div class="form-group">
											<label>Nội dung</label>
											<textarea name="content" id="content">{!! old('content', @$data->content) !!}</textarea>
										</div>
		                    			<div class="form-group">
		                                    <label>Thời gian</label>
		                                    <input type="text" class="form-control" name="time" id="time" value="{!! old('time', @$data->time) !!}" required="">
		                                </div>
		                    		</div>
		                    	</div>
		                    </div>
		                </div>
		            </div>
				</div>
				<div class="col-sm-3">
		            <div class="box box-success">
		                <div class="box-header with-border">
		                    <h3 class="box-title">Ảnh</h3>
		                </div>
		                <div class="box-body">
		                    <div class="form-group" style="text-align: center;">
		                        <div class="image">
		                            <div class="image__thumbnail">
		                                <img src="{{ !empty(@$data->image) ? @$data->image : __IMAGE_DEFAULT__ }}"
		                                     data-init="{{ __IMAGE_DEFAULT__ }}">
		                                <a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
		                                    <i class="fa fa-times"></i></a>
		                                <input type="hidden" value="{{ old('image', @$data->image) }}" name="image"/>
		                                <div class="image__button" onclick="fileSelect(this)">
		                                	<i class="fa fa-upload"></i>
		                                    Upload
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
						<div class="form-group text-right">
							<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Lưu lại</button>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
@stop

@section('scripts')
	<script>
		$(document).on('ready', function() {
		    $('.multislt').select2({
		        placeholder: "Chọn thương hiệu",
		    });
		});
	</script>
	<script>
		var editor = CKEDITOR.replace( 'name2');
		CKFinder.setupCKEditor(editor);
	</script>
	<script>
		var editor = CKEDITOR.replace( 'content');
		CKFinder.setupCKEditor(editor);
	</script>
	<script>
		var editor = CKEDITOR.replace( 'desc');
		CKFinder.setupCKEditor(editor);
	</script>
@endsection

@section('css')
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
@endsection
