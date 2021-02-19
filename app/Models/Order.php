<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    /**
     * @var array
     */
    protected $fillable = [
        'date_contract',
        'date_start',
        'date_end',
        'status',
        'object_id',
    ];

    public function service()
    {
        return $this->belongsToMany(Service::class);
    }
}
