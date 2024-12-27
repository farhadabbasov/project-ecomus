<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Page extends Model
{
    use HasFactory,Translatable;

    protected $fillable = ['title', 'description','image','category_id'];

    protected $translatedAttributes = ['title','description'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
