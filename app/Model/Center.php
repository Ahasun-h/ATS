<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    protected $fillable = [
        'center_name',
        'refference_key',
        'address',
    ];

    public function country(){
        return $this->belongsTo(Country::class, 'country_id','id');
    }

    public function city(){
        return $this->belongsTo(City::class, 'city_id','id');
    }

    public function createdBy(){
        return $this->belongsTo(User::class, 'created_by','id');
    }
}
