<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class subcategory extends Model
{
    protected $fillable = [
        'category_id', 'subcategory_name'
    ];
}
