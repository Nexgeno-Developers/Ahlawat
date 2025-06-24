<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DownloadChecklist;
use Illuminate\Support\Str; 

class DownloadChecklistController extends Controller
{
    public function index() {
        $downloadchecklist = DownloadChecklist::orderBy('id', 'desc')->get();
        return view('backend.pages.downloadchecklist.index', compact('downloadchecklist'));
    } 
}
