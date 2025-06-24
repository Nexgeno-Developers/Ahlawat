<?php

namespace App\Http\Controllers\backend;

use Illuminate\Support\Str;
use App\Models\PracticeArea;
use Illuminate\Http\Request;
use App\Models\PracticeAreaSection;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PracticeAreaController extends Controller
{
    public function index()
    {
        // $practicearea = PracticeArea::orderBy('id', 'desc')->get();
        $practicearea = PracticeArea::where('id', '!=', 11)->orderBy('id', 'desc')->get();
        return view('backend.pages.practicearea.index', compact('practicearea'));
    }

    public function add()
    {
        $practicearea = PracticeArea::where('status', 1)->get();
        return view('backend.pages.practicearea.add', compact('practicearea'));
    }

    public function create(Request $request)
    {
        // Validate form data
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:191',
            'slug' => 'required|unique:practice_areas',
            'short_description' => 'required',
            'content' => 'required',
            //'thumnail_image' => 'image',
            //'section_image' => 'image',
            'meta_title' => 'required|max:255',
            'meta_description' => 'required',
            'breadcrumb_title' => 'required|max:191',
            'breadcrumb_subtitle' => 'required|max:191',
            //'breadcrumb_image' => 'required|image', 
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'notification' => $validator->errors()->all()
            ], 200);
        }

        // Upload image

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('assets/image/practicearea', 'public');
        } else {
            $imagePath = null;
        }

        if ($request->hasFile('breadcrumb_image')) {
            $imagePath1 = $request->file('breadcrumb_image')->store('assets/image/practicearea', 'public');
        } else {
            $imagePath1 = null;
        }

        if ($request->hasFile('section_image')) {
            $imagePath2 = $request->file('section_image')->store('assets/image/practicearea', 'public');
        } else {
            $imagePath2 = null;
        }
        if ($request->hasFile('pdf_path')) {
            $pdfPath = $request->file('pdf_path')->store('assets/image/practicearea', 'public');
        } else {
            $pdfPath = null;
        }

        if ($request->hasFile('info_image')) {
            $infoImage = $request->file('info_image')->store('assets/image/practicearea', 'public');
        } else {
            $infoImage = null;
        }

        // Extract and handle FAQ data
        $faq = $request->input('faq');
        $faq_description = $request->input('faq_description');

        if (!empty($faq[0])) {
            $faqs = [];
            for ($j = 0; $j < count($faq); $j++) {
                $faqs[] = [
                    $faq[$j] => $faq_description[$j],
                ];
            }
            $data['faq'] = json_encode($faqs);
        } else {
            $data['faq'] = '[]';
        }

        // Remove the 'faq_description' key as it's not needed anymore
        unset($data['faq_description']);

        $slug = customSlug($request->input('slug'));

        $focusArea = $request->input('focus_area', []);

        // Create the PracticeArea record with 'PracticeArea_category_ids' included
        $info_image_cta = 0;
        if ($request->has('info_image_cta'))
            $info_image_cta = 1;
        PracticeArea::create([
            'parent_id' => $request->input('parent_id'),
            'title' => $request->input('title'),
            'slug' => $slug,
            'short_description' => $request->input('short_description'),
            'content' => $request->input('content'),
            'popup_content' => $request->input('popup_content'),
            'focus_area' => json_encode($focusArea),
            'why_choose_us' => $request->input('why_choose_us'),
            'faq' => $data['faq'],
            'thumnail_image' => $imagePath,
            'alt_thumnail_image' => $request->input('alt_thumnail_image'),
            'section_image' => $imagePath2,
            'alt_section_image' => $request->input('alt_section_image'),
            'meta_title' => $request->input('meta_title'),
            'meta_description' => $request->input('meta_description'),
            'breadcrumb_title' => $request->input('breadcrumb_title'),
            'breadcrumb_subtitle' => $request->input('breadcrumb_subtitle'),
            'breadcrumb_image' => $imagePath1,
            'pdf_path' => $pdfPath,
            'special_service' => $request->input('special_service'),
            'section_link' => $request->input('section_link'),
            'info_image' => $infoImage,
            'info_iamge_url' => $request->input('info_iamge_url'),
            'info_image_cta' => $info_image_cta
        ]);

        $response = [
            'status' => true,
            'notification' => 'Practice area added successfully!',
        ];

        return response()->json($response);
    }

    public function edit($id)
    {
        $practicearea = PracticeArea::find($id);
        $allpracticearea = PracticeArea::where('status', 1)->get();
        return view('backend.pages.practicearea.edit', compact('practicearea', 'allpracticearea'));
    }

    public function view($id)
    {
        $practicearea = PracticeArea::find($id);
        return view('backend.pages.practicearea.view', compact('practicearea'));
    }

    public function delete($id)
    {

        $practicearea = PracticeArea::find($id);
        $practicearea->delete();

        $response = [
            'status' => true,
            'notification' => 'Practice area deleted successfully!',
        ];

        return response()->json($response);
    }

    public function status($id, $status)
    {
        $practicearea = PracticeArea::find($id);
        $practicearea->status = $status;
        $practicearea->save();

        return redirect(route('practicearea.index'))->with('success', 'Status changed successfully!');
    }

    public function update(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required|max:191',
            'slug' => 'required|unique:practice_areas,slug,' . $request->input('id'),
            'short_description' => 'required',
            'content' => 'required',
            //'thumnail_image' => 'image',
            //'section_image' => 'image',
            'meta_title' => 'required|max:255',
            'meta_description' => 'required',
            'breadcrumb_title' => 'required|max:191',
            'breadcrumb_subtitle' => 'required|max:191',
            //'breadcrumb_image' => 'image', 
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'notification' => $validator->errors()->all()
            ], 200);
        }

        $id = $request->input('id');
        $practicearea = PracticeArea::find($id);

        if ($request->hasFile('image')) {
            // Update the image if a new one is uploaded
            $imagePath = $request->file('image')->store('assets/image/practicearea', 'public');
            $practicearea->thumnail_image = $imagePath;
        } else {
            if ($request->has('image_check') && $practicearea->thumnail_image) {
                Storage::disk('public')->delete($practicearea->thumnail_image);
                $practicearea->thumnail_image = null;
            }
        }

        if ($request->hasFile('breadcrumb_image')) {
            // Update the image if a new one is uploaded
            $imagePath1 = $request->file('breadcrumb_image')->store('assets/image/practicearea', 'public');
            $practicearea->breadcrumb_image = $imagePath1;
        } else {
            if ($request->has('breadcrumb_image_check') && $practicearea->breadcrumb_image) {
                Storage::disk('public')->delete($practicearea->breadcrumb_image);
                $practicearea->breadcrumb_image = null;
            }
        }

        if ($request->hasFile('section_image')) {
            // Update the image if a new one is uploaded
            $imagePath2 = $request->file('section_image')->store('assets/image/practicearea', 'public');
            $practicearea->section_image = $imagePath2;
        } else {
            if ($request->has('section_image_check') && $practicearea->section_image) {
                Storage::disk('public')->delete($practicearea->section_image);
                $practicearea->section_image = null;
            }
        }
        if ($request->hasFile('pdf_path')) {
            // Update the image if a new one is uploaded
            $pdfPath = $request->file('pdf_path')->store('assets/image/practicearea', 'public');
            $practicearea->pdf_path = $pdfPath;
        } else {
            if ($request->has('pdf_path_check') && $practicearea->pdf_path) {
                Storage::disk('public')->delete($practicearea->pdf_path);
                $practicearea->pdf_path = null;
            }
        }

        if ($request->hasFile('info_image')) {
            // Update the image if a new one is uploaded
            $imagePath2 = $request->file('info_image')->store('assets/image/practicearea', 'public');
            $practicearea->info_image = $imagePath2;
        } else {
            if ($request->has('info_image_check') && $practicearea->info_image) {
                Storage::disk('public')->delete($practicearea->info_image);
                $practicearea->info_image = null;
            }
        }

        // Extract and handle FAQ data
        $faq = $request->input('faq');
        $faq_description = $request->input('faq_description');

        if (!empty($faq[0])) {
            $faqs = [];
            for ($j = 0; $j < count($faq); $j++) {
                $faqs[] = [
                    $faq[$j] => $faq_description[$j],
                ];
            }
            $data['faq'] = json_encode($faqs);
        } else {
            $data['faq'] = '[]';
        }

        // Remove the 'faq_description' key as it's not needed anymore
        unset($data['faq_description']);

        $slug = customSlug($request->input('slug'));

        $focusArea = $request->input('focus_area', []);

        $practicearea->parent_id = $request->input('parent_id');
        $practicearea->title = $request->input('title');
        $practicearea->slug = $slug;
        $practicearea->alt_thumnail_image = $request->input('alt_thumnail_image');
        $practicearea->alt_section_image = $request->input('alt_section_image');
        $practicearea->short_description = $request->input('short_description');
        $practicearea->content = $request->input('content');
        $practicearea->popup_content = $request->input('popup_content');

        if (empty($focusArea) || $focusArea === '[]') {
            $practicearea->focus_area = '[]';
        } else {
            $practicearea->focus_area = json_encode($focusArea);
        }

        $practicearea->why_choose_us = $request->input('why_choose_us');
        $practicearea->faq = $data['faq'];
        $practicearea->meta_title = $request->input('meta_title');
        $practicearea->meta_description = $request->input('meta_description');
        $practicearea->breadcrumb_title = $request->input('breadcrumb_title');
        $practicearea->breadcrumb_subtitle = $request->input('breadcrumb_subtitle');
        $practicearea->special_service = $request->input('special_service');
        $practicearea->section_link = $request->input('section_link');
        $practicearea->info_image_url = $request->input('info_image_url');
        $info_image_cta = '0';
        if ($request->has('info_image_cta'))
            $info_image_cta = '1';
        $practicearea->info_image_cta = $info_image_cta;

        $practicearea->save();

        $response = [
            'status' => true,
            'notification' => 'Practice area updated successfully!',
        ];

        return response()->json($response);
    }


    public function privacyDataProtectionEdit()
    {
        // $practicearea = PracticeArea::find(11); // hardcoded special page.
        $practicearea = PracticeArea::with('sections')->findOrFail(11);
        $allpracticearea = PracticeArea::where('status', 1)->get();

        // Transform sections into associative array by `section_key`
        $data = [];
        foreach ($practicearea->sections as $section) {
            $data[$section->section_key] = json_decode($section->section_data, true);
        }

        return view('backend.pages.practicearea.privacy_data_protection.edit', compact('practicearea', 'allpracticearea', 'data'));
    }

    public function updatePrivacyDataProtection(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:191',
            'slug' => 'required|unique:practice_areas,slug,' . $request->input('id'),
            'short_description' => 'required',
            'meta_title' => 'required|max:255',
            'meta_description' => 'required',
            'breadcrumb_title' => 'required|max:191',
            'breadcrumb_subtitle' => 'required|max:191',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'notification' => $validator->errors()->all()
            ], 200);
        }
        $id = $request->input('id');
        // load the page (id 11 for this example)
        $practicearea = PracticeArea::with('sections')->findOrFail($id);

        if ($request->hasFile('breadcrumb_image')) {
            // Update the image if a new one is uploaded
            $imagePath1 = $request->file('breadcrumb_image')->store('assets/image/practicearea', 'public');
            $practicearea->breadcrumb_image = $imagePath1;
        } else {
            if ($request->has('breadcrumb_image_check') && $practicearea->breadcrumb_image) {
                Storage::disk('public')->delete($practicearea->breadcrumb_image);
                $practicearea->breadcrumb_image = null;
            }
        }

        // Now handle FAQ data
        if ($request->has('faq') && is_array($request->input('faq'))) {
            // Process the FAQ data into a clean structure
            $faqData = [];
            foreach ($request->input('faq') as $key => $question) {
                $faqData[] = [
                    'question' => $question,
                    'answer' => $request->input('faq_description')[$key] ?? '',
                ];
            }

            // Save the FAQ data as JSON in the `faq` column
            $data['faq'] = json_encode($faqData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    
        }

        $focusArea = $request->input('focus_area', []);

        $practicearea->breadcrumb_title = $request->input('breadcrumb_title');
        $practicearea->breadcrumb_subtitle = $request->input('breadcrumb_subtitle');
        $slug = customSlug($request->input('slug'));
        $practicearea->parent_id = $request->input('parent_id');
        $practicearea->title = $request->input('title');
        $practicearea->slug = $slug;
        $practicearea->short_description = $request->input('short_description');
        if (empty($focusArea) || $focusArea === '[]') {
            $practicearea->focus_area = '[]';
        } else {
            $practicearea->focus_area = json_encode($focusArea);
        }
        $practicearea->faq = $data['faq'];
        $practicearea->why_choose_us = $request->input('why_choose_us');

        $practicearea->save();
        
        // now handle each section
        $sections = $request->input('sections', []);
        foreach ($sections as $key => $values) {
            // prepare a clean array of everything except file‑inputs
            $sectionData = [];

            // title & subtitle always
            if (isset($values['title'])) {
                $sectionData['title'] = $values['title'];
            }
            if (isset($values['subtitle'])) {
                $sectionData['subtitle'] = $values['subtitle'];
            }
            if (isset($values['button_url'])) {
                $sectionData['button_url'] = $values['button_url'];
            }
            if (isset($values['paragraph']) && $values['paragraph'] !== '') {
                $sectionData['paragraph'] = $values['paragraph'];
            }
            if (isset($values['text']) && $values['text'] !== '') {
                $sectionData['text'] = $values['text'];
            }
            // for sections with nested arrays (e.g. intro.texts, sectors.items, etc.)
            foreach ($values as $field => $val) {
                // skip title & subtitle
                if (in_array($field, ['title', 'subtitle'])) {
                    continue;
                }

                // simple array fields
                if (is_array($val) && !$request->hasFile("sections.$key.$field")) {
                    $sectionData[$field] = $val;
                }
            }

            // for any file uploads inside this section
            // e.g. sections[breadcrumb][image], sections[hero][image], fields named `image`, `icon`, etc.
            // if ($request->hasFile("sections.$key.image")) {
            //     $sectionData['image'] = $request
            //         ->file("sections.$key.image")
            //         ->store("assets/image/practicearea/sections/{$key}", 'public');
            // }

            if ($request->hasFile("sections.$key.image")) {
                $sectionData['image'] = $request
                    ->file("sections.$key.image")
                    ->store("assets/image/practicearea/sections/{$key}", 'public');
            } elseif (!empty($values['image'])) {
                // Retain the old image if no new one is uploaded
                $sectionData['image'] = $values['image'];
            }

            if ($request->hasFile("sections.$key.bg")) {
                $sectionData['bg'] = $request
                    ->file("sections.$key.bg")
                    ->store("assets/image/practicearea/sections/{$key}", 'public');
            } elseif (!empty($values['bg'])) {
                // Retain the old bg if no new one is uploaded
                $sectionData['bg'] = $values['bg'];
            }

            // inside your per‐section loop, after handling sectionData['image'], etc.

            // 1) Pull the raw items array
            $raw = $values['items'] ?? [];

            // 2) Extract three parallel arrays
            $titles = array_column($raw, 'title');
            $subtitles = array_column($raw, 'subtitle');
            $texts = array_column($raw, 'text');
            $icons = array_column($raw, 'icon');
            $button_urls = array_column($raw, 'button_url');

            // 3) Figure out how many complete items we might have
            $count = max(count($titles), count($subtitles), count($texts), count($icons), count($button_urls));

            // 4) Rebuild them properly
            $items = [];
            for ($i = 0; $i < $count; $i++) {
                $itm = [];

                // Title
                if (isset($titles[$i]) && $titles[$i] !== '') {
                    $itm['title'] = $titles[$i];
                }

                // Subtitle
                if (isset($subtitles[$i]) && $subtitles[$i] !== '') {
                    $itm['subtitle'] = $subtitles[$i];
                }

                // Text
                if (isset($texts[$i]) && $texts[$i] !== '') {
                    $itm['text'] = $texts[$i];
                }

                // Button url
                if (isset($button_urls[$i]) && $button_urls[$i] !== '') {
                    $itm['button_url'] = $button_urls[$i];
                }

                // Icon upload or fallback (you may have already saved file earlier)
                $fileKey = "sections.{$key}.items.{$i}.icon";
                if ($request->hasFile($fileKey)) {
                    $itm['icon'] = $request->file($fileKey)
                        ->store("assets/image/practicearea/sections/{$key}/icons", 'public');
                } elseif (isset($icons[$i]) && $icons[$i] !== '') {
                    $itm['icon'] = $icons[$i];
                }

                // only push if something exists
                if ($itm) {
                    $items[] = $itm;
                }
            }

            // 5) Assign back
            if ($items) {
                $sectionData['items'] = $items;
            }

            $sectionData = $this->cleanData($sectionData);

            // ✅ Only save if $sectionData has actual content
            if (!empty($sectionData)) {
                PracticeAreaSection::updateOrCreate(
                    [
                        'practice_area_id' => $practicearea->id,
                        'section_key' => $key,
                    ],
                    [
                        'section_data' => json_encode($sectionData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE),
                    ]
                );
            }

        }

        return redirect()
            ->back()
            ->with('success', 'Privacy & Data Protection page updated successfully.');
    }

    private function cleanData($data)
    {
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                $value = $this->cleanData($value); // use $this-> here
            }

            if ($value === null || $value === '' || (is_array($value) && empty($value))) {
                unset($data[$key]);
            } else {
                $data[$key] = $value;
            }
        }
        return $data;
    }

}
