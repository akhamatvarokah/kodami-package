<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class PPulsa extends Model
{
    protected $table = 'p_pulsa';

    /**
     * [operator description]
     * @return [type] [description]
     */
    public function vendor()
    {
    	return $this->hasOne('Kodami\Models\Mysql\PVendor', 'id', 'p_vendor_id');
    }

    /**
     * [operatordata description]
     * @return [type] [description]
     */
    public function operatordata()
    {
    	return $this->hasOne('Kodami\Models\Mysql\PPulsaOperator', 'nama', 'operator');
    }

    /**
     * [provider description]
     * @return [type] [description]
     */
    public function provider()
    {
        return $this->hasOne('\Kodami\Models\Mysql\SimkoProvider', 'id', 'simko_provider_id');
    }
}
