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
				            <li class="">
                                <a href="#activity3" data-toggle="tab" aria-expanded="true">About</a>
				            </li>
				        </ul>
				    </div>
				    <?php if(!empty($data->content)){
						$content = json_decode($data->content);
					} ?>
				    <div class="tab-content">
			            <div class="tab-pane active" id="activity3">
			            	<div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="">Giới thiệu</label>
                                        <textarea name="content[about][des1]" id="des1">{!! @$content->about->des1 !!}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Popup giới thiệu</label>
                                        <textarea name="content[about][des2]" id="des2">{!! @$content->about->des2 !!}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Popup giới thiệu người hướng dẫn</label>
                                        <textarea name="content[about][des3]" id="des3">{!! @$content->about->des3 !!}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Sđt</label>
                                        <input type="text" name="content[experience][call]" value="{{ @$content->experience->call }}"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Zalo</label>
                                        <input type="text" name="content[experience][zalo]" value="{{ @$content->experience->zalo }}"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Messenger</label>
                                        <input type="text" name="content[experience][mess]" value="{{ @$content->experience->mess }}"
                                               class="form-control">
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
    <script>
        var editor = CKEDITOR.replace( 'des1');
        CKFinder.setupCKEditor(editor);
        var editor = CKEDITOR.replace( 'des2');
        CKFinder.setupCKEditor(editor);
        var editor = CKEDITOR.replace( 'des3');
        CKFinder.setupCKEditor(editor);
    </script>
@stop
