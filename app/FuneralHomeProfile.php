<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Image;
use Cviebrock\EloquentSluggable\Sluggable;

class FuneralHomeProfile extends Model
{
	use Sluggable;
    protected $fillable = [
        'funeral_home_id','fname','lname','business_name','business_logo','phone_code','phone_code','phone','mobile_code','mobile','free_code','free_phone','website','facebook','address1','address2','city','district_id','about','videourl','position','latitude','longitude'
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'fname',
                'onUpdate' => true
            ]
        ];
    }

    public function setBusinessLogoAttribute($file) {
        $source_path = upload_tmp_path($file);
        if ($file && file_exists($source_path)) 
        {
            upload_move($file,'business_logo');
            Image::make($source_path)->resize(690,388)->save($source_path);
            upload_move($file,'business_logo','front');
            Image::make($source_path)->resize(230,303)->save($source_path);
            upload_move($file,'business_logo','thumb');
            Image::make($source_path)->resize(150,150)->save($source_path);
            upload_move($file,'business_logo','circle');
            @unlink($source_path);
        }
        $this->attributes['business_logo'] = $file;
        if ($file == '') 
        {
            $this->attributes['business_logo'] = "";
        }
    }
    public function business_logo_url($type='original') 
    {
        if (!empty($this->business_logo))
            return upload_url($this->business_logo,'business_logo',$type);
        elseif (!empty($this->business_logo) && file_exists(tmp_path($this->business_logo)))
            return tmp_url($this->$business_logo);
        else
            return asset('images/graduate.png');
    }
}
