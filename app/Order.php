<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    public function newQuery() {
    	$query = parent::newQuery();
    	if(auth()->check()) {
    		if(auth()->user()->hasRole('customer')) {
    			if(auth()->user()->customer) {
    				return $query->where('customer_id', auth()->user()->customer->id);
    			}
    			return $query->where('id', -1);
    		}
    	}
    	return $query;
    }
}
