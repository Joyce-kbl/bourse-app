<?php

namespace App\Models;

use App\Models\Account;
use App\Models\Scholarship;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Faculty extends Model
{
    protected $guarded = [];
    
    public function accounts(): HasMany
    {
        return $this->hasMany(Account::class);
    }

    public function scholarships(): HasMany
    {
        return $this->hasMany(Scholarship::class);
    }

    public function getRouteKeyName()
    {
        return 'sigle';
    }

}
