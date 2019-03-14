<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FuneralHomeGallery extends Model
{
    protected $table = 'funeral_home_galleries';

    protected $fillable = [
        'funeral_home_id','image'
    ];

    public function setImageAttribute($file) {
        $source_path = upload_tmp_path($file);
        if ($file && file_exists($source_path)) 
        {
            upload_move($file,'gallery_image');
            Image::make($source_path)->resize(137,94)->save($source_path);
            upload_move($file,'gallery_image','front');
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
            return upload_url($this->image,'gallery_image',$type);
        elseif (!empty($this->image) && file_exists(tmp_path($this->image)))
            return tmp_url($this->$image);
        else
            return asset('images/graduate.png');
    }
}
