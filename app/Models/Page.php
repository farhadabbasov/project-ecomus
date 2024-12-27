<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\App;

class Page extends Model
{
    use HasFactory,Translatable;

    protected $fillable = ['title', 'description','image','category_id'];

    public $translatedAttributes = ['title','description'];
    protected $with = ['translations'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function translation()
    {
        return $this->hasOne(PageTranslation::class)->where('locale', App::getLocale());
    }
}
