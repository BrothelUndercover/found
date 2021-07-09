<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	use HasDateTimeFormatter;

    protected $fillable = [
        'group', 'title','mark', 'cover', 'origin', 'publisher','content','view','is_check'
    ];

    public function newGroup()
    {
        return $this->belongsTo('App\Models\Group','group');
    }
}
