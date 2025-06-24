<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PracticeAreaSection extends Model
{
    protected $fillable = ['practice_area_id', 'section_key', 'section_data'];

    // protected $casts = [
    //     'section_data' => 'array',
    // ];

    public function practiceArea()
    {
        return $this->belongsTo(PracticeArea::class);
    }
}