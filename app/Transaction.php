<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'TransactionCode',
        'searchInput',
        'FullName',
        'Branch',
        'Department',
        'recieverFullName',
        'recieverBranch',
        'recieverDepartment',
        'deliveryMode'
    ];
}
