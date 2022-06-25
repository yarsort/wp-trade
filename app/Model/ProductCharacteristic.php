<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductCharacteristic extends Model
{
    // Справочник "Характеристики номенклатуры"
    protected $table = 'ref_product_characteristic';

    protected $fillable = [
        'id',
        'status',
        'is_group',
        'uid_supplier',        
        'uid',
        'uid_parent',
        'uid_product', // Ссылка на товар-владелец       
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
