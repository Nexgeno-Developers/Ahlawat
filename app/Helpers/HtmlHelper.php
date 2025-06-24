<?php

namespace App\Helpers;

use DOMDocument;

class HtmlHelper {
    public static function fixMultipleH1Tags($html) {
        // Load HTML content into a DOMDocument
        $dom = new DOMDocument();
        @$dom->loadHTML($html); 
        // Use @ to suppress warnings for malformed HTML
        
        // Get all <h1> tags
        $h1_tags = $dom->getElementsByTagName('h1');
        
        // If there are multiple h1 tags, remove all except the first one
        if ($h1_tags->length > 1) {
            for ($i = 1; $i < $h1_tags->length; $i++) {
                $h1_tags->item($i)->parentNode->removeChild($h1_tags->item($i));
            }
        }
        
        // Get the modified HTML content
        $cleaned_html = $dom->saveHTML();
        return $cleaned_html;
    }
}
