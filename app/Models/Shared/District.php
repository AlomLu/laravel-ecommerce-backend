<?php

namespace App\Models\Shared;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class District extends Model
{
    use HasFactory;
    protected $fillable = ['dis_name', 'division_id'];

    public function division(): BelongsTo
    {
        return $this->belongsTo(Division::class);
    }
}
