<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    // Справочник "Единицы измерения"
    protected $table = '_ref_unit';

    protected $fillable = [
        'id',
        'status',
        'is_group',
        'uid_supplier',        
        'uid',
        'uid_parent',
        'uid_product',
        'code',
        'name',                
        'comment',        
    ];
}
