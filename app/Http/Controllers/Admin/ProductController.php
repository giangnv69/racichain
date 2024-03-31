<?php



namespace App\Http\Controllers\Admin;



use App\Models\Menu;

use App\Models\Options;

use App\Models\Product;

use App\Models\ProductCategory;

use App\Models\ProductParameter;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\Projects;

use App\Models\Categories;

use App\Models\ProjectCategory;

use DataTables;

use Illuminate\Support\Facades\DB;

use League\Flysystem\Exception;



class ProductController extends Controller

{

    public function __construct()

    {

        $site_info = Options::where('type', 'general')->first();

        $site_info = json_decode($site_info->content);



        $this->config_info = $site_info;

    }



    protected function module(){

        return [

            'name' => 'Sản phẩm',

            'module' => 'products',

            'table' =>[

                'image' => [

                    'title' => 'Hình ảnh',

                    'with' => '70px',

                ],

                'name' => [

                    'title' => 'Tên',

                    'with' => '',

                ],

            ]

        ];

    }





    protected function fields()

    {

        return [

            'name' => 'required',

            'image' => 'required',

        ];

    }





    protected function messages()

    {

        return [

            'name.required' => 'Tên sản phẩm không được bỏ trống.',

            'image.required' => 'Bạn chưa chọn hình ảnh cho sản phẩm.',
        ];

    }





    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request)

    {

         if ($request->ajax()) {

            $list_products = Product::orderBy('updated_at', 'DESC')->get();

            return Datatables::of($list_products)

                ->addColumn('checkbox', function ($data) {

                    return '<input type="checkbox" name="chkItem[]" value="' . $data->id . '">';

                })->addColumn('image', function ($data) {

                    return '<img src="' . $data->image . '" class="img-thumbnail" width="50px" height="50px">';

                })->addColumn('name', function ($data) {

                        return $data->name;

                })->addColumn('action', function ($data) {

                    return '<a href="' . route('products.edit', ['id' => $data->id ]) . '" title="Sửa">

                            <i class="fa fa-pencil fa-fw"></i> Sửa

                        </a> &nbsp; &nbsp; &nbsp;

                            <a href="javascript:;" class="btn-destroy" 

                            data-href="' . route('products.destroy', $data->id) . '"

                            data-toggle="modal" data-target="#confim">

                            <i class="fa fa-trash-o fa-fw"></i> Xóa</a>

                        ';

                })->rawColumns(['checkbox', 'image', 'action', 'name', 'category'])

                ->addIndexColumn()

                ->make(true);

        }

        $data['module'] = $this->module();

        return view("backend.{$this->module()['module']}.list", $data);

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        $data['module'] = $this->module();

        return view("backend.{$this->module()['module']}.create-edit", $data);

    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

    	$this->validate($request, $this->fields(), $this->messages());

        $input = $request->all();
        
        $input['slug'] = $this->createSlug(str_slug($request->name));
        
        $input['type'] = !empty($request->type) ? json_encode( $request->type ) : null;
        
        $project = Product::create($input);


        flash('Thêm mới thành công.')->success();



        return redirect()->route($this->module()['module'].'.edit', $project);

    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {

        $data['module'] = array_merge($this->module(),[

            'action' => 'update'

        ]);

        $data['data'] = Product::findOrFail($id);

        return view("backend.{$this->module()['module']}.create-edit", $data);

    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, $id)

    {

        try {

            $this->validate($request, $this->fields(), $this->messages());

            $input = $request->all();

            $input['type'] = !empty($request->type) ? json_encode( $request->type ) : null;
            
            DB::beginTransaction();

            $project = Product::findOrFail($id)->update($input);
            
            DB::commit();

            flash('Cập nhật thành công.')->success();



            return redirect()->back();

        } catch (\Exception $e) {

            DB::rollBack();

            return redirect()->back();

        }

    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

        flash('Xóa thành công.')->success();



        Product::destroy($id);



        return redirect()->back();

    }



    public function deleteMuti(Request $request)

    {

        if(!empty($request->chkItem)){

            foreach ($request->chkItem as $id) {

                Product::destroy($id);

            }

            flash('Xóa thành công.')->success();

            return back();

        }

        flash('Bạn chưa chọn dữ liệu cần xóa.')->error();

        return back();

    }





    public function getAjaxSlug(Request $request)

    {

        $slug = str_slug($request->slug);

        $id = $request->id;

        $post = Product::find($id);

        $post->slug = $this->createSlug($slug, $id);

        $post->save();

        return $this->createSlug($slug, $id);

    }



    public function createSlug($slugPost, $id = null)

    {

        $slug = $slugPost;

        $index = 1;

        $baseSlug = $slug;

        while ($this->checkIfExistedSlug($slug, $id)) {

            $slug = $baseSlug . '-' . $index++;

        }



        if (empty($slug)) {

            $slug = time();

        }



        return $slug;

    }





    public function checkIfExistedSlug($slug, $id = null)

    {

        if($id != null) {

            $count = Product::where('id', '!=', $id)->where('slug', $slug)->count();

            return $count > 0;

        }else{

            $count = Product::where('slug', $slug)->count();

            return $count > 0;

        }

    }



    public function syncProductKiot(Request $request) {

        $retail = $this->config_info->kiotviet->retail;

        $client_id = $this->config_info->kiotviet->client_id;

        $client_ser = $this->config_info->kiotviet->client_secret;

        $accessToken = getAccessTokenKiotViet($client_id, $client_ser);

        $requestProdAll = (object) [];

        $requestProdAll->limit = 100;

        $page = $request->page ? $request->page : 1;

        $requestProdAll->page = $page ? ($page - 1) * 100 : 1;

        $data = getProductKiotViet($retail, $accessToken, $requestProdAll);



        if (!empty($data->data)) {

            if (($requestProdAll->limit * $page) < $data->total) {

                $prods = $data->data;

                foreach ($prods as $item) {

                    $price = 0;

                    if (!empty($item->priceBooks)) {

                        foreach ($item->priceBooks as $items) {

                            if ($items->priceBookId == 14999) {

                                $price = $items->price;

                            }

                        }

                    }

                    $onHand = 0;

                    $branchId = '38225';

                    if (!empty($item->inventories)) {

                        foreach ($item->inventories as $inventory) {

                            if ($inventory->branchId == $branchId) {

                                $onHand = $inventory->onHand;

                            }

                        }

                    }

                    Product::updateOrCreate(

                        [

                            'kiotviet_id' => $item->id

                        ],

                        [

                            'name' => @$item->fullName,

                            'price' => @$price,

                            'price_dash' => @$item->basePrice,

                            'desc' => @$item->description,

                            'sort_desc' => @$item->description,

                            'more_image' => !empty($item->images) ? json_encode($item->images) : null,

                            'total' => @$onHand,

                            'image' => !empty($item->images) ? $item->images[0] : null,

                            'slug' => $this->createSlug(str_slug($item->fullName)),

                            'kiotviet_id' => @$item->id

                        ]

                    );

                }

                return response()->json(

                    [

                        'status' => 1,

                        'next' => 1,

                        'count' => count($data->data),

                        'data' => $data->data,

                        're' =>$requestProdAll

                    ]

                );

            } else {

                return response()->json(

                    [

                        'status' => 1,

                        'next' => 0,

                    ]

                );

            }

        }

    }

}

