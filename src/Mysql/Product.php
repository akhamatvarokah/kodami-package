<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
	use SoftDeletes;

    protected $fillable = [
        'koprasi_id', 'category_id', 'name', 'name_alias','description', 'price', 'primary_image', 'avaible', 'success_transaction', 'total_comment', 'weight', 'viewer', 'stock', 'new', 'discont', 'discont_anggota',
    ];

    public function category()
    {
    	return $this->hasOne('Kodami\Models\Mysql\Category', 'id', 'category_id');
    }

    public function image()
    {
    	return $this->hasMany('Kodami\Models\Mysql\ProductImage', 'product_id', 'id');
    }

    public function criteria()
    {
        return $this->hasOne('Kodami\Models\Mysql\ProductCriteria', 'product_id', 'id');
    }    
}