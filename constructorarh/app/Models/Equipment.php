<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    //
    use HasFactory;

    protected $table = 'equipment';

    protected $fillable = [
        'id',
        'name',
        'image',
        'description',
        'published_at'
    ];

    protected $primaryKey = 'id';
    
}
