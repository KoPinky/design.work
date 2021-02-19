<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

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

    /**
     * @return HasManyThrough
     */
    public function stages()
    {
        return $this->hasManyThrough(Stages::class());
    }
}
