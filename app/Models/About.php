<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class About extends Model
{
    use HasFactory,Translatable;

    public $translatedAttributes = ['content','about','title',
        'title2', 'title3', 'title4',
        'title5', 'title6', 'title7',
        'title8','title9', 'title10',
        'title11','title12','title13'];

    protected $with = ['translation'];

    public function translation()
    {
        return $this->hasOne(AboutTranslation::class)->where('locale', App::getLocale());
    }
}
