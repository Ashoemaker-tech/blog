<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = [
        'title',
        'excerpt',
        'slug',
        'body',
        'category_id'
    ];

    public function category () {
        // relationship types: hasOne, hasMany, belongsTo, belongsToMany
        return $this->belongsTo(Category::class);
    }



    use HasFactory;
}
