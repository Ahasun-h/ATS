<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ManagementUniqueIDkey extends Model
{
    protected $fillable = [
        'id_no',
        'refference_key',
        'unique_id_key'
    ];
}
