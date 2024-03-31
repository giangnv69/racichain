<?php

namespace App\Http\Controllers\Admin;

use App\Models\Subscribe;
use App\Models\SubscribeCourse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categories;

class SubCourseController extends Controller
{

    protected function fields()
    {
        return [
            'name' => "required",
            'slug' => "required",
        ];
    }

    protected function messages()
    {
        return [
            'name.required' => 'Tiêu đề không được bỏ trống.',
            'slug.required' => 'Đường dẫn tĩnh không được bỏ trống.',
        ];
    }


    protected function module(){
        return [
            'name' => 'Danh sách đặt lịch tư vấn',
            'module' => 'sub-course',
            'table' =>[
                'name' => [
                    'title' => 'Tiêu đề',
                    'with' => '',
                ],
                'slug' => [
                    'title' => 'Liên kết',
                    'with' => '',
                ],
            ]
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['module'] = $this->module();
        $data['data'] = SubscribeCourse::get();
        return view("backend.{$this->module()['module']}.list", $data);
    }
}
