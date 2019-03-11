<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Image;
use Cviebrock\EloquentSluggable\Sluggable;

class Author extends Model
{
	use Sluggable;
    protected $fillable = [
        'name','description','designation','website','image'
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name',
                'onUpdate' => true
            ]
        ];
    }

    public function setImageAttribute($file) {
        $source_path = upload_tmp_path($file);
        if ($file && file_exists($source_path)) 
        {
            upload_move($file,'author_image');
            Image::make($source_path)->resize(690,388)->save($source_path);
            upload_move($file,'author_image','front');
            Image::make($source_path)->resize(230,303)->save($source_path);
            upload_move($file,'author_image','thumb');
            Image::make($source_path)->resize(150,150)->save($source_path);
            upload_move($file,'author_image','circle');
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
            return upload_url($this->image,'author_image',$type);
        elseif (!empty($this->image) && file_exists(tmp_path($this->image)))
            return tmp_url($this->$image);
        else
            return asset('images/graduate.png');
    }
}
