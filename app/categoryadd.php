<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoryadd extends Model
{
    protected $fillable = [
        'category_name', 'category_discription', 'publication_status',
    ];
}
