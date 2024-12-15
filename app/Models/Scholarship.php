<?php

namespace App\Models;

use App\Models\Faculty;
use App\Models\Financer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Scholarship extends Model
{
    protected $guarded = [];
    
    public function faculty(): BelongsTo
    {
        return $this->belongsTo(Faculty::class);
    }

    public function financer(): BelongsTo
    {
        return $this->belongsTo(Financer::class);
    }

}
