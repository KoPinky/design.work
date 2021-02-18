<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceMaterial extends Model
{
    use HasFactory;
    protected $table = 'service_materials';

    /**
     * @var array
     */
    protected $fillable = [
        'service_id',
        'material_id',
    ];
}
