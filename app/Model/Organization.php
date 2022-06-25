<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
     // Справочник "Организации"
    protected $table = 'ref_organization';

    protected $fillable = [
        'id',
        'status',
        'is_group',
        'uid_supplier',        
        'uid',
        'uid_parent',
        'code',
        'name',
        'comment',        
    ];
}
