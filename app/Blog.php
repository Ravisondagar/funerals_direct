<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Image;
use Cviebrock\EloquentSluggable\Sluggable;

class Blog extends Model
{
	use Sluggable;
    protected $fillable = [
        'blog_category_id','author_id','title','description','image','is_archive','publish'
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate' => true
            ]
        ];
    }

    public function blog_category()
    {
         return $this->belongsTo('App\BlogCategory');
    }

    public function setImageAttribute($file) {
        $source_path = upload_tmp_path($file);
        if ($file && file_exists($source_path)) 
        {
            upload_move($file,'blog_image');
            Image::make($source_path)->resize(690,388)->save($source_path);
            upload_move($file,'blog_image','front');
            Image::make($source_path)->resize(230,303)->save($source_path);
            upload_move($file,'blog_image','thumb');
            Image::make($source_path)->resize(150,150)->save($source_path);
            upload_move($file,'blog_image','circle');
            @unlink($source_path);
        }
        $this->attributes['image'] = $file;
        if ($file == '') 
        {
            $this->attributes['image'] = "";
        }
    }
    public function image_url($type='original') 
    {
        if (!empty($this->image))
            return upload_url($this->image,'blog_image',$type);
        elseif (!empty($this->image) && file_exists(tmp_path($this->image)))
            return tmp_url($this->$image);
        else
            return asset('images/graduate.png');
    }
}
