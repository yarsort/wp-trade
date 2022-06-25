<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cashbox extends Model
{
    // Справочник "Кассы"
    protected $table = '_ref_cashbox';

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
