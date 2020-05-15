<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bu extends Model
{
    protected $table = 'bu';
    protected $appends = 'image_path';
    protected $fillable =
        [
        'user_id',
        'name',
        'place',
        'price',
        'rent',
        'square',
        'type',
        'small_desc',
        'meta',
        'longitude',
        'latitude',
        'large_desc',
        'status',
        'rooms',
        'image'
    ];

    public function getImagePathAttribute(){

        return asset('/website/Bu_images/'.$this->image);

    }
}
