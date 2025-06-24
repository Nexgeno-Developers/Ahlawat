<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\HtmlHelper;

class HtmlController extends Controller
{
    public function fixHtml(Request $request)
    {
        // Load your HTML content
        $html = file_get_contents(public_path('index.php'));

        // Fix multiple H1 tags
        $fixed_html = HtmlHelper::fixMultipleH1Tags($html);

        // Save the fixed HTML content
        file_put_contents(public_path('index_fixed.php'), $fixed_html);

        return response()->json(['message' => 'HTML content has been fixed and saved.']);
    }
}
