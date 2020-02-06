<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['nama','slug'];
    public $timestamps = true;

    public function artikel(){
        return $this->belongsToMany('App\Artikel',
        'artikel_tag',
        'artikel_id',
        'tag_id');
    }
}
