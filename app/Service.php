<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected  $fillable = [
        'user_id',
        'name',
        'plan',
        'price',
        'billing_date',
        'info_date'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
