<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeaderTranslation extends Model
{

    public $timestamps = false;
    protected $fillable = ['header_id', 'locale', 'title'];


    public function header()
    {
        return $this->belongsTo(Header::class);
    }
}
