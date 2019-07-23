<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Table extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'resource_class', 'model_class', 'order'];
}


