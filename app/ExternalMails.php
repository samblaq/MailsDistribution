<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExternalMails extends Model
{
    protected $fillable = [
        'TransactionCode',
        'Branch_From',
        'Branch_To',
        'package',
        'deliverymode',
        'deliveryperson',
        'ReceivedBy'
    ];
}
