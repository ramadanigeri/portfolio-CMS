<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSlide extends Model
{
    use HasFactory;

    // Makes all the fields fillable
    // protected $fillable = [
    //     'title',
    //     'short_title',
    //     'home_slide',
    //     'video_url',
    // ];

    // Same as above but makes all fields fillable by default with 1 line
    protected $guarded = [];


}
