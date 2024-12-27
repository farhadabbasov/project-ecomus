<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name',
        'category_id',
        'locale',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
