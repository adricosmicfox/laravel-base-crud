<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    //
    protected $fillable = ['title', 'description', 'thumb', 'type', 'series', 'sale_date', 'price'];
}
