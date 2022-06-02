<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;
    use Sluggable;

    protected $fillable = [
        'category_name',
        'slug',
    ];

    public function sluggable():array
    {
        return [
            'slug' => [
                'source' => 'category_name'
            ]
        ];
    }
}
