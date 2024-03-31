<?php

namespace App\Http\Controllers\Admin;

use App\Models\Categories;
use App\Models\Menu;
use App\Models\Options;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pages;

class PagesController extends Controller
{

    public function __construct()
    {
        $site_info = Options::where('type', 'general')->first();
        $site_info = json_decode($site_info->content);

        $this->config_info = $site_info;
    }

    public function getListPages()
	{
		$data = Pages::orderBy('created_at', 'DESC')->get();
		return view('backend.pages.list', compact('data'));
	}

	public function postCreatePages(Request $request)
	{
		$page = new Pages;
		$page->name_page = $request->name_page;
		$page->type = $request->type;
		$page->route = $request->route;
		$page->save();
        flash('Thêm thành công !')->success();
		return redirect()->back();
	}



    public function getBuildPages(Request $request)
    {
    	$type = $request->page;
    	$data = Pages::where('type', $type)->firstOrFail();
        $categories = Categories::where('type', 'product_category')->get();
        if(view()->exists('backend.pages.layout.'.$type)){
            return view('backend.pages.layout.'.$type, compact('data', 'categories'));
        }
    	return view('backend.pages.layout.default', compact('data', 'categories'));
    }

    public function postBuildPages(Request $request)
    {
       	$type = $request->type;
    	$data = Pages::where('type', $type)->firstOrFail();
    	$data->content = !empty($request->content) ? json_encode($request->content) : null;
    	$data->meta_title = $request->meta_title;
    	$data->meta_description = $request->meta_description;
    	$data->meta_keyword = $request->meta_keyword;
    	$data->image = $request->image;
        $data->title_h1 = $request->title_h1;
        $data->banner = $request->banner;
    	$data->save();
        flash('Cập nhật thành công !')->success();
    	return redirect()->back();
    }
}
