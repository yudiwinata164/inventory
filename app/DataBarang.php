<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataBarang extends Model
{    
    /**
     * guarded
     *
     * @var array
     */
    protected $guarded = [
        'id',
    ];
    
    /**
     * Get the maintenance for the data barang.
     *
     * @return void
     */
    public function maintenance()
    {
        return $this->hasMany('App\Maintenance', 'databarang_id');
    }
}
