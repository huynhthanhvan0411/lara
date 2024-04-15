<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'title','description', 'image','post_status'
    ];
}