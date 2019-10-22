<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = ['address','phone','email','logo','title','facebook','twitter'];
}
