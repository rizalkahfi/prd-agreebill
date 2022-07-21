<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    protected $guarded = [];


    public function OrderDetailsExtraAddon(){
        return $this->hasMany('App\Models\OrderDetailAddon','order_detail_id','id');
    }
    public function OrderDetailsExtraAddonItems(){
        return $this->hasMany('App\Models\OrderDetailAddon');
    }


}
