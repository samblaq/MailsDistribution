<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Internal extends Model
{
    protected $fillable = [
        'TransactionCode',
        'Branch',
        'Name',
        'Department',
        'Comment',
        'Date'
    ];
}
