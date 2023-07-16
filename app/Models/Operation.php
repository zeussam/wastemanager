<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    protected $table = 'schedule'; // Replace with your actual table name
    protected $primaryKey = 'id';
    protected $fillable = ['cname',	'cnum',	'date',	'time',	'message',	'city',	'estate',	'status',	'created_at', 'updated_at',
        // Add other fillable columns as needed
    ];

    // Add any relationships or additional methods as needed
}


