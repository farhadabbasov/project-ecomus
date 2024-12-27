<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\App;

class Category extends Model
{
    use HasFactory,Translatable;
    protected $fillable = ['name'];

    public $translatedAttributes = ['name'];
    protected $with = ['translation'];
    public function pages(): HasMany
    {
        return $this->hasMany(Page::class);
    }

    public function translation()
    {
        return $this->hasOne(CategoryTranslation::class)->where('locale', App::getLocale());
    }
}
