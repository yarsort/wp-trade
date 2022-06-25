<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    // Регистр сведений "Цены товаров"
    protected $table = '_inforg_price'; 

    protected $fillable = [
        'id',
        'status',        
        'uid_supplier',        
        'uid_product',
        'uid_product_characteristic',
        'price', // Цена 0.00 грн
        'uidUnit',        
        'uidCurrency',        
        'comment',        
    ];
}
