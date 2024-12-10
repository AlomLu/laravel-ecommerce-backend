<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Subcategory extends Model
{
    use HasFactory;

    protected $fillable = ['subcat_name', 'category_id'];

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
