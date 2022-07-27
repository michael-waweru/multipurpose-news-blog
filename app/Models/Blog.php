<?php

namespace App\Models;

use Conner\Tagging\Taggable;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory, SoftDeletes, Sluggable, Taggable;
  
    // protected $fillable = [
    //     'title','slug','short_description','description','read_time','published_by','image','status'
    // ];
   
    protected $guarded = [];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function getBlogs()
    {
        // return DB::select('select * from blogs where status = published')->get();
        return self::inRandomOrder()->take(4)->get();
    }
}
