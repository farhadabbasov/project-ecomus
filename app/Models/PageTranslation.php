<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'title',
        'page_id',
        'locale',
    ];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
