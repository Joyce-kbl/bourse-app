<?php

namespace App\Models;

use App\Models\Scholarship;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Financer extends Model
{
    protected $guarded = [];
    
    public function scholarships(): HasMany
    {
        return $this->hasMany(Scholarship::class);
    }

    public function getRouteKeyName()
    {
        return 'name';
    }
}
