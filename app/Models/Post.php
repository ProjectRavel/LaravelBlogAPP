<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Post extends Model
{
    protected $table = 'blog_posts';
    protected $fillable = ['title', 'writter', 'content', 'created_at', 'updated_at'];
}
