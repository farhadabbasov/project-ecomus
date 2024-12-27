<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory,Translatable;
    protected $fillable = ['name'];

    public function pages(): HasMany
    {
        return $this->hasMany(Page::class);
    }
}
