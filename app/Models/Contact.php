<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Contact extends Model implements Auditable{

    use SoftDeletes, \OwenIt\Auditing\Auditable;

    protected $dates = ['deleted_at'];
    protected $table = 'contacts';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'website',
        'address'
    ];

}