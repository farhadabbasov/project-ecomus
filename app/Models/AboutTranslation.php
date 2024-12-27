<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = ['about_id', 'locale',
        'content', 'about', 'title',
        'title2', 'title3', 'title4',
        'title5', 'title6', 'title7',
        'title8','title9', 'title10',
        'title11','title12','title13'];


    public function about(){
        return $this->belongsTo(About::class);
    }
}
