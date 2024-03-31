<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';
    protected $fillable = [ 'name','slug','parent_id','image', 'meta_title', 'meta_description', 'meta_keyword', 'status', 'teamplate', 'type', 'is_display_home', 'banner'];


    public function get_child_cate()
    {
        return $this->where('parent_id', $this->id)->get();
    }

    public function getParent()
    {
        return $this->where('id', $this->parent_id)->first();
    }

    public function Projects()
    {
        return $this->belongsToMany('App\Models\Projects', 'project_category', 'id_category', 'id_project');
    }

    public function posts()
    {
        return $this->hasMany('App\Models\Projects', 'project_category', 'id_category', 'id_project');
    }
}
