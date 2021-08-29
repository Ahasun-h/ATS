<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CenterEmployee extends Model
{
    protected $fillable = [
        'unique_id_key',
    ];

    public function center(){
        return $this->belongsTo(Center::class, 'center_id','id');
    }

    public function role(){
        return $this->belongsTo(Role::class, 'role_id','id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id','id');
    }

    public function createdBy(){
        return $this->belongsTo(User::class, 'created_by','id');
    }

    public function uniqueIDKey(){
        return $this->belongsTo(ManagementUniqueIDkey::class, 'management_unique_key_id','id');
    }
}
