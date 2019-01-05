<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SocialNetwork extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'icon_id', 'url'];

    function icon() {
        return $this->belongsTo(Icon::class);
    }
}
