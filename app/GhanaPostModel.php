<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GhanaPostModel extends Model
{
    protected $fillable = [
        'TransactionCode',
        'searchInput',
        'FullName',
        'Branch',
        'Department',
        'recieverFullName',
        'recieverBranch',
        'recieverDepartment'
    ];
}
