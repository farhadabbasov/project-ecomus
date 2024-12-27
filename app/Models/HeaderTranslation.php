<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderTranslation extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['header_id', 'locale', 'title'];


    public function header()
    {
        return $this->belongsTo(Header::class);
    }
}
