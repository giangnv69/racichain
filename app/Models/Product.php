<?php



namespace App\Models;



use Illuminate\Database\Eloquent\Model;



class Product extends Model

{

    protected $table = 'products';

    protected $fillable = ['id', 'name', 'type' ,'cate_id', 'material_id', 'color_id','design_id', 'price', 'price_dash', 'desc', 'view','more_image', 'size', 'total','sort_desc', 'info', 'review', 'image', 'meta_title', 'name2', 'meta_keyword', 'desc', 'slug', 'created_at', 'updated_at', 'content', 'time'];



    public $timestamps = true;



    public function category()

    {

        return $this->belongsToMany('App\Models\Categories', 'product_category', 'id_product', 'id_category');

    }



}

