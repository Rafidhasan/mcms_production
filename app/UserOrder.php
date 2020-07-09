<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserOrder extends Model
{
    protected $fillable = ['product_image', 'quantity'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
