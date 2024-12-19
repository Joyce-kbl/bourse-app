<?php

namespace App\Models;

use App\Enums\Status;
use App\Models\User;
use App\Models\Scholarship;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Application extends Model
{
    protected $guarded = [];
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scholarship(): BelongsTo
    {
        return $this->belongsTo(Scholarship::class);
    }

    protected $casts = [
        'status' => Status::class,
    ];
}
