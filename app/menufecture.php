<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menufecture extends Model
{
    protected $hidden = [
        'BrandName', 'BrandDiscription','PublicationStatus',
    ];
}

