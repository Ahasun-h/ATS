<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'name',
    ];

    public function country(){
    	return $this->belongsTo(Country::class, 'country_id', 'id');
    }
}
