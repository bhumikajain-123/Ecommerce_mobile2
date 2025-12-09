<?php

namespace App\Models\vendor;

use Illuminate\Database\Eloquent\Model;

class v_product extends Model
{
 protected $table = 'v_item';  // corrected table name
    protected $primaryKey = 'p_id'; // corrected primary key
    public $incrementing = true; // because p_id should auto-increment
    protected $fillable = [
        'v_id',
        'p_name',
        'p_price',
        'p_stock',
        'p_description',
        'p_image',
        'c_id',




    ];
}
