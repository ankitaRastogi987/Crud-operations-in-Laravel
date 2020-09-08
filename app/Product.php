<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable=[
    	'name','detail'
    ];
    // public function scopeAllData($query)
    // {
    // 	return $query->where('name','a');
    // }
}
