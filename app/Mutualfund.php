<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mutualfund extends Model
{
    protected $fillable=[
        'customer_id',
        'fund_manager',
        'fund_type',
        'classification',
        'net_asset_value',
        'annual_return',
        'purchased',
        'returned',


    ];
    public function customer() {
        return $this->belongsTo('App\Customer');
    }

}
