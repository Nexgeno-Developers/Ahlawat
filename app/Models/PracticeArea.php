<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PracticeArea extends Model
{
    use HasFactory;
    
    protected $table = 'practice_areas';

    protected $fillable = [
        'parent_id',
        'thumnail_image',
        'alt_thumnail_image',
        'section_image',
        'section_link',
        'alt_section_image',
        'title',
        'short_description',
        'slug',
        'content',
        'popup_content',
        'focus_area',
        'why_choose_us',
        'faq',
        'meta_title',
        'meta_description',
        'breadcrumb_title',
        'breadcrumb_subtitle',
        'breadcrumb_image',
        'pdf_path',
        'status',
        'series',
        'is_home',
        'special_service',
        'info_image',
        'info_image_url',
        'info_image_cta'
    ];    

    public function sections()
    {
        return $this->hasMany(PracticeAreaSection::class);
    }

    public function getSection(string $key)
    {
        return $this->sections->firstWhere('section_key', $key)?->section_data ?? null;
    }


}
