<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{    
    /**
     * guarded
     *
     * @var array
     */
    protected $guarded = [
        'id',
    ];

    public function databarang()
    {
        return $this->belongsTo('App\databarang');
    }
}
