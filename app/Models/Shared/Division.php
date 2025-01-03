<?php

namespace App\Models\Shared;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Division extends Model
{
    use HasFactory;

    public function district(): HasMany
    {
        return $this->hasMany(District::class);
    }

    public function upazila(): HasMany
    {
        return $this->hasMany(Upazila::class);
    }
}
