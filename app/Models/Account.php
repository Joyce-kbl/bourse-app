<?php

namespace App\Models;

use App\Enums\Level;
use App\Enums\Role;
use App\Models\User;
use App\Models\Faculty;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Account extends Model
{
    protected $guarded = [];
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function faculty(): BelongsTo
    {
        return $this->belongsTo(Faculty::class);
    }

    
    protected $casts = [
        'level' => Level::class,
        'type_user' => Role::class,
    ];
}
