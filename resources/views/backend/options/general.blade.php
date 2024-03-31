@extends('backend.layouts.app')
@section('controller','Cấu hình chung')
@section('action','Cập nhật')
@section('controller_route', route('backend.options.general'))
@section('content')
	<div class="content">
        <div class="clearfix"></div>
        @include('flash::message')
       	<form action="{{ route('backend.options.general.post') }}" method="POST">
       		@csrf
       		 <div class="nav-tabs-custom">
	            <ul class="nav nav-tabs">
	               <li class="active">
	               		<a href="#activity" data-toggle="tab" aria-expanded="true">Thông tin chung</a>
	               	</li>

	               	<li class="">
	               		<a href="#activity3" data-toggle="tab" aria-expanded="true">Thông tin</a>
	               	</li>
                    <li class="">
                        <a href="#activity4" data-toggle="tab" aria-expanded="true">Chân trang</a>
                    </li>
	               	<li class="">
	               		<a href="#activity2" data-toggle="tab" aria-expanded="true">Cấu hình seo</a>
	               	</li>

	            </ul>
		        <div class="tab-content">

            		<div class="tab-pane active" id="activity">
	               		<div class="row">
	               			<div class="col-lg-2">
		                        <div class="form-group">
		                           <label>Favicon</label>
		                           <div class="image">
		                               <div class="image__thumbnail">
		                                   <img src="{{ !empty($content->favicon) ? $content->favicon :  __IMAGE_DEFAULT__ }}"  data-init="{{ __IMAGE_DEFAULT__ }}">
		                                   <a href="javascript:void(0)" class="image__delete"
		                                   onclick="urlFileDelete(this)">
		                                    <i class="fa fa-times"></i></a>
		                                   <input type="hidden" value="{{ @$content->favicon }}" name="content[favicon]"  />
		                                   <div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
		                               </div>
		                           </div>
		                       </div>
		                    </div>
		                    <div class="col-lg-2">
		                        <div class="form-group">
		                           <label>Logo</label>
		                           <div class="image">
		                               <div class="image__thumbnail">
		                                   <img src="{{ !empty($content->logo) ? $content->logo :  __IMAGE_DEFAULT__ }}"  data-init="{{ __IMAGE_DEFAULT__ }}">
		                                   <a href="javascript:void(0)" class="image__delete"
		                                   onclick="urlFileDelete(this)">
		                                    <i class="fa fa-times"></i></a>
		                                   <input type="hidden" value="{{ @$content->logo }}" name="content[logo]"  />
		                                   <div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
		                               </div>
		                           </div>
		                       </div>
		                    </div>

		                    <div class="col-lg-2">
		                        <div class="form-group">
		                           <label>Footer Logo</label>
		                           <div class="image">
		                               <div class="image__thumbnail">
		                                   <img src="{{ !empty($content->footer_logo) ? $content->footer_logo :  __IMAGE_DEFAULT__ }}"
		                                   data-init="{{ __IMAGE_DEFAULT__ }}">
		                                   <a href="javascript:void(0)" class="image__delete"
		                                   onclick="urlFileDelete(this)">
		                                    <i class="fa fa-times"></i></a>
		                                   <input type="hidden" value="{{ @$content->footer_logo }}" name="content[footer_logo]"  />
		                                   <div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
		                               </div>
		                           </div>
		                       </div>
		                    </div>

		                    <div class="col-lg-2">
		                        <div class="form-group">
		                           <label>Hình ảnh đại diện khi chia sẻ</label>
		                           <div class="image">
		                               <div class="image__thumbnail">
		                                   <img src="{{ !empty($content->logo_share) ? $content->logo_share :  __IMAGE_DEFAULT__ }}"  data-init="{{ __IMAGE_DEFAULT__ }}">
		                                   <a href="javascript:void(0)" class="image__delete"
		                                   onclick="urlFileDelete(this)">
		                                    <i class="fa fa-times"></i></a>
		                                   <input type="hidden" value="{{ @$content->logo_share }}" name="content[logo_share]"  />
		                                   <div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
		                               </div>
		                           </div>
		                       </div>
		                    </div>
	               		</div>

	               		<div class="row">
	               			<div class="col-sm-3">
	               				<div class="form-group">
	               					<label for="">Code Fanpages Facebook</label>
	               					<textarea name="content[code_facebook]" class="form-control" rows="10">{!! @$content->code_facebook !!}</textarea>
	               				</div>
	               			</div>
	               		</div>

	               		<div class="row">
	               			<div class="col-sm-12">
	               				<div class="form-group">
		               				<label for="">Link messenger</label>
		               				<input type="text" class="form-control" name="content[link_messenger]" value="{{ @$content->link_messenger }}">
		               			</div>
	               				<div class="form-group">
		               				<label for="">Zalo</label>
		               				<input type="text" class="form-control" name="content[zalo_phone]" value="{{ @$content->zalo_phone }}">
		               			</div>
	               				<div class="form-group">
		               				<label for="">Email nhận thông tin liên hệ</label>
		               				<input type="email" class="form-control" name="content[email_admin]" value="{{ @$content->email_admin }}">
		               			</div>
		               			<div class="form-group">
	                                <label class="custom-checkbox">
	                                    <input type="checkbox" name="content[index_google]" value="1" {{ @$content->index_google == 1 ? 'checked' : null }}>
	                                    Cho phép google tìm kiếm
	                                </label>
	                            </div>

                            </div>

	               		</div>
	               	</div>

	              	<div class="tab-pane" id="activity3">
	              		<div class="row">
	              			<div class="col-sm-12">
	              				<div class="form-group">
	              					<label for="">Tên công ty</label>
	              					<input type="text" class="form-control" name="content[name_company]"
               						value="{{ @$content->name_company }}">
	              				</div>

	              				<div class="form-group">
	              					<label for="">Địa chỉ</label>
	              					<input type="text" class="form-control" name="content[address]"
               						value="{{ @$content->address }}">
	              				</div>

	              				<div class="form-group">
	              					<label for="">Văn phòng đại diện</label>
	              					<input type="text" class="form-control" name="content[address_company]"
               						value="{{ @$content->address_company }}">
	              				</div>

	              				<div class="form-group">
	              					<label for="">Xưởng sản xuất</label>
	              					<input type="text" class="form-control" name="content[address_factory]"
               						value="{{ @$content->address_factory }}">
	              				</div>


	              				<div class="form-group">
	              					<label for="">Số điện thoại</label>
	              					<input type="text" class="form-control" name="content[phone]"
               						value="{{ @$content->phone }}">
	              				</div>


	              				<div class="form-group">
	              					<label for="">Email</label>
	              					<input type="text" class="form-control" name="content[email]"
               						value="{{ @$content->email }}">
	              				</div>

	              				<div class="form-group">
	              					<label for="">Thông tin chân trang</label>
	              					<input type="text" class="form-control" name="content[footer_text]"
               						value="{{ @$content->footer_text }}">
	              				</div>
	              			</div>
	              		</div>
	              	</div>

	               	<div class="tab-pane" id="activity2">
	               		<div class="row">
	               			<div class="col-sm-12">
	               				<div class="form-group">
               						<label for="">Tên website</label>
               						<input type="text" class="form-control" name="content[site_title]"
               						value="{{ @$content->site_title }}">
	               				</div>

	               				<div class="form-group">
               						<label for="">Mô tả ngắn</label>
               						<textarea class="form-control" rows="5"
               						name="content[site_description]">{{ @$content->site_description }}</textarea>
	               				</div>

	               				<div class="form-group">
               						<label for="">Meta keyword</label>
               						<input type="text" class="form-control" name="content[site_keyword]"
               						value="{{ @$content->site_keyword }}">
	               				</div>

	               			</div>
	               		</div>
	               	</div>
                    <div class="tab-pane" id="activity4">
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="">Mạng xã hội</label>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="">Facebook</label>
                                        <input type="text" name="content[social][fb]" value="{{ @$content->social->fb }}"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="">Youtube</label>
                                        <input type="text" name="content[social][youtube]" value="{{ @$content->social->youtube }}"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="">IG</label>
                                        <input type="text" name="content[social][ig]" value="{{ @$content->social->ig }}"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="">Pinterest</label>
                                        <input type="text" name="content[social][pink]" value="{{ @$content->social->pink }}"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
	        </div>
       		<div class="row">
       			<div class="col-lg-12">
       				<button class="btn btn-primary" type="submit">Lưu lại</button>
       			</div>
       		</div>
       	</form>
    </div>
@stop
