<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceOrder extends Model
{
    use HasFactory;
    protected $table = 'services_order';

    /**
     * @var array
     */
    protected $fillable = [
        'service_id',
        'order_id',
    ];
}
