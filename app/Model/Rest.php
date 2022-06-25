<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Rest extends Model
{
    // Регистр сведений "Остатки номенклатуры"
    protected $table = '_accum_rest_product'; 

    protected $fillable = [
       'id',
       'status',            
       'uid_supplier',        
       'uid_product',
       'uid_product_characteristic',
       'rest', // Остаток 0.000 шт.
       'uidUnit',        
       'comment',        
   ];
}
}
