<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';

    /**
     * @var array
     */
    protected $fillable = [
        'name_service',
        'price',
        'description'
    ];
}
