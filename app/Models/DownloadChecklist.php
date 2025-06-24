<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DownloadChecklist extends Model
{
    use HasFactory;

    protected $table = 'download_checklist';

    protected $fillable = [
        'email_id',
        'slug',
        'ip',
        'status'
    ];
}
