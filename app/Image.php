<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'image_id', 'image_url'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
