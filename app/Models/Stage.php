<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    use HasFactory;
    protected $table = 'stages';

    /**
     * @var array
     */
    protected $fillable = [
        'name_service',
        'description',
        'service_id'
    ];
}
