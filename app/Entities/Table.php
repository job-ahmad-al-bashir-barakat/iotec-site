<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Table extends Model implements Sortable
{
    use SoftDeletes, SortableTrait;

    public $sortable = [
        'order_column_name'  => 'order',
        'sort_when_creating' => true,
    ];

    protected $fillable = ['name', 'resource_class', 'model_class', 'order'];
}


