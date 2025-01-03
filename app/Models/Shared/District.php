<?php

namespace App\Models\Shared;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class District extends Model
{
    use HasFactory;
    protected $fillable = ['dis_name', 'division_id'];

    public function division(): BelongsTo
    {
        return $this->belongsTo(Division::class);
    }

    public function upazila(): HasMany
    {
        return $this->hasMany(Upazila::class);
    }
}
