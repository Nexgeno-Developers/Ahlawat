<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    public $timestamps = true;
    //protected $dates = ['updated_at'];
    protected $table = 'blogs';
    protected $fillable = [
        'blog_category_ids',
        'title',
        'slug',
        'short_description',
        'main_image',
        'alt_main_image',
        'pdf_path',
        'info_image',
        'info_image_url',
        'info_image_cta',
        'content',
        'popup_content',
        'meta_title',
        'meta_description',
        'status',
        'user_id',
    ];

}
