<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

class KodamiProduct extends Model
{
	use SoftDeletes;

	public function stock() {
       $result = $this->hasMany('Kodami\Models\Mysql\Product', 'kodami_product_id', 'id')
       ->select(DB::raw('sum(stock) as stock'))
       ->where("products.is_validate", 1)
       ->where("products.ever_validate", 1)
       ->first();

       return $result->stock;
    }

    public function image()
    {
    	return $this->hasMany('Kodami\Models\Mysql\KodamiProductImage', 'kodami_product_id', 'id');
    }

    public function spesification()
    {
        return $this->hasMany('Kodami\Models\Mysql\KodamiProductSpesification', 'kodami_product_id', 'id');
    }

    public function category()
    {
      return $this->hasOne('Kodami\Models\Mysql\Category', 'id', 'category_id');
    }
}