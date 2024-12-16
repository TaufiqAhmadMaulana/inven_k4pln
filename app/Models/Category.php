<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function inven(): BelongsTo
    {
        return $this->belongsTo(Inven::class);
    }
}
