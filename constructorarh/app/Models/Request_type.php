<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request_type extends Model
{
    //

    use HasFactory;

    protected $table = 'request_type';

    protected $fillable = [
        'id',
        'type'
    ];

    protected $primaryKey = 'id';
    
}
