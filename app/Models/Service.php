<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function order()
    {
        return $this->belongsToMany(Order::class);
    }

    /**
     * @return HasMany
     */
    public function stage()
    {
        return $this->hasMany(Stage::class, 'service_id', 'id');
    }
}
