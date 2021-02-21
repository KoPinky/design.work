<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class StageList extends Model
{
    use HasFactory;

    /**
     * @return HasOne
     */
    public function stage()
    {
        return $this->hasOne(Stage::class);
    }
}
