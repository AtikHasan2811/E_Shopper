<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_product extends Model
{
    protected $fillable = [
        'category_id', 'manufacture_id', 'product_name','product_short_description', 'product_long_description', 'product_price','product_image', 'product_size', 'product_color','publication_st'
    ];

    public function categoryadds(){
        return $this->belongsTo('App\categoryadd');
    }
}
