<?php

namespace App\Models\Portfolio;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Work extends Model implements Auditable{

    use SoftDeletes, \OwenIt\Auditing\Auditable;

    protected $dates = ['deleted_at'];
    protected $table = 'portfolio_works';
    protected $fillable = [
        'img_thumbnail',
        'customer_id',
        'name',
        'slug',
        'description',
        'location',
        'date_begin',
        'date_end'
    ];

}