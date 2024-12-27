<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Header extends Model
{
    use HasFactory,Translatable;

   // protected $table = 'header';
    protected $fillable = ['url', 'isShow'];

    public $translatedAttributes = ['title'];
    protected $with = ['translation'];

    public function translation()
    {
        return $this->hasOne(HeaderTranslation::class)->where('locale', App::getLocale());
    }
}
