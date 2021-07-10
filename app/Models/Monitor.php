<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{
	use HasDateTimeFormatter;

    public function company()
    {
        return $this->belongsTo('App\Models\Company','company_id');
    }
}
