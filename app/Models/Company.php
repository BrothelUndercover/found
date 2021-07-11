<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
	use HasDateTimeFormatter;

    public function scopeWithOrder($query,$order)
    {
        switch ($order) {
            case 'isreal':
                 $query->isreal();
            break;

            default:
                 $query->sorted();

        }
    }

    public function scopeIsreal($query)
    {
        return $query->where('is_real',true);
    }

    public function scopeSorted($query)
    {
        return $query->orderByDesc('sort');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Company','company_id');
    }
}
