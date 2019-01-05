<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'excerpt', 'position_id', 'active'];

    function position() {
        return $this->belongsTo(Position::class);
    }
}
