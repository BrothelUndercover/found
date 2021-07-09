<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
	use HasDateTimeFormatter;

    protected $table = 'group';
    

    public function articles()
    {
        return $this->hasMany('App\Models\Article','group');
    }
}
