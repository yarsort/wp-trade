<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $id;
    public $status;
    public $name;
    public $uid_supplier;
    public $is_group;

    // Справочник "Номенклатура"
    protected $table = 'ref_product';

    protected $fillable = [
        'id',
        'status',
        'is_group',
        'uid_supplier',        
        'uid',
        'uid_parent',
        'code',
        'name',
        'model',
        'vendor_code',
        'uid_unit',
        'quantity',
        'barcode',
        'image',
        'length',
        'width',
        'height',
        'comment',
    ];
}
