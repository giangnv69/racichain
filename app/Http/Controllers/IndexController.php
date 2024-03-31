<?php



namespace App\Http\Controllers;



use App\Models\Cards;

use App\Models\Hocvien;
use App\Models\Product;

use App\Models\ProductParameter;

use App\Models\Subscribe;

use App\Models\SubscribeCourse;
use Illuminate\Http\Request;

use App\Models\Pages;

use App\Models\Options;

use DateTime;

use SEO;

use SEOMeta;

use OpenGraph;

use App\Models\Menu;

use JsValidator;

use App\Models\Customer;

use App\Models\Contact;

use App\Models\Posts;

use App\Models\Projects;

use DB;

use App\Models\Categories;

use Validator;

use function GuzzleHttp\Promise\all;



class IndexController extends Controller
{
 
	public $config_info;
	
    public function __construct()
    {

    	$site_info = Options::where('type', 'general')->first();

    	$site_info = json_decode($site_info->content);

    	$this->config_info = $site_info;

    	OpenGraph::setUrl(\URL::current());

        OpenGraph::addProperty('locale', 'vi');

        OpenGraph::addProperty('type', 'article');

        
        SEOMeta::addKeyword($site_info->site_keyword);

        $menuHeader = Menu::where('id_group', 1)->orderBy('position')->get();

        $cards = \request()->session()->get('card', []);

    	view()->share(compact('site_info', 'menuHeader', 'cards'));
    }
    
    public function createSeo($dataSeo = null)
    {
        $site_info = $this->config_info;

        if (!empty($dataSeo->meta_title)) {

            SEO::setTitle($dataSeo->meta_title);

        } else {

            SEO::setTitle($site_info->site_title);

        }

        if (!empty($dataSeo->meta_description)) {

            SEOMeta::setDescription($dataSeo->meta_description);

            OpenGraph::setDescription($dataSeo->meta_description);

        } else {

            SEOMeta::setDescription($site_info->site_description);

            OpenGraph::setDescription($site_info->site_description);

        }

        if (!empty($dataSeo->image)) {

            OpenGraph::addImage($dataSeo->image, ['height' => 400, 'width' => 400]);

        } else {

            OpenGraph::addImage($site_info->logo_share, ['height' => 400, 'width' => 400]);

        }

        if (!empty($dataSeo->meta_keyword)) {

            SEOMeta::addKeyword($dataSeo->meta_keyword);

        }

    }
    
    public function getHome(Request $request)
    {

        $this->createSeo();

        $dataSeo = Pages::where('type', 'home')->first();

        if(!empty($dataSeo->content)){

            $content = json_decode( $dataSeo->content );

        }
        
        $product = Product::get();
        return view('frontend.pages.home', compact('dataSeo', 'product'));

    }
    
    public function buyNow(Request $request)
    {

        $this->createSeo();

        $dataSeo = Pages::where('type', 'home')->first();

        if(!empty($dataSeo->content)){

            $content = json_decode( $dataSeo->content );

        }
        
        $product = Product::get();
        return view('frontend.pages.buy', compact('dataSeo', 'product'));

    }
    
    public function sendTran(Request $request)
    {

        $this->createSeo();

        $dataSeo = Pages::where('type', 'home')->first();

        if(!empty($dataSeo->content)){

            $content = json_decode( $dataSeo->content );

        }
        
        $product = Product::get();
        return view('frontend.pages.sendTrans', compact('dataSeo', 'product'));

    }
}

