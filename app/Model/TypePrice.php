<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TypePrice extends Model
{
    // Справочник "Кассы"
    protected $table = '_ref_typeprice';

    protected $fillable = [
        'id',
        'status',
        'is_group',
        'uid_supplier',        
        'uid',
        'uid_parent',
        'code',
        'name',
        'uidOrganization',
        'uidCurrency',
        'comment',        
    ];
}
