<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class FuneralHome extends Model
{
    use Sluggable;
    protected $fillable = [
        'user_id','name','publish'
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

    public function funeral_home_profile()
    {
         return $this->hasOne('App\FuneralHomeProfile');
    }
}
