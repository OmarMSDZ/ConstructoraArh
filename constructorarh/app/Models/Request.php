<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    //

    use HasFactory;

    protected $table = 'request';

    protected $fillable=[
        'id', 
        'name',
        'lastname',
        'mail',
        'phonee',
        'description',
        'send_date',
        'users_id',
        'request_type_id',
        'status_id',
    ];

    protected $primaryKey ='id';


}
