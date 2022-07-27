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

    public function blog()
    {
        return $this->hasMany(Blog::class);
    }

    public static function getAllCategories()
    {
        return self::all();
    }

    public static function getCategories()
    {
        return self::all()->take(4);
    }

    public static function getFooterCategories()
    {
        return self::all()->take(18);
    }
}
