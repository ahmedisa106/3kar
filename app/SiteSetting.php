<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $table = 'site_setting';

    protected $fillable = ['slug','value','type','name','image','slider','footer'];
}
