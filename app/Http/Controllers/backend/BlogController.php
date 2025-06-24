<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;
use App\Models\BlogCategory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index() {
        $blog = Blog::orderBy('id', 'desc')->get();
        return view('backend.pages.blog.index', compact('blog'));
    }

    public function add() {
        $blogcategory = BlogCategory::where('status', 1)->get();
        $users = User::all();
        return view('backend.pages.blog.add', compact('blogcategory', 'users'));
    }  
    
    public function create(Request $request) {
        // Validate form data
        $validator = Validator::make($request->all(), [
            'image' => 'image|mimes:jpeg,png,jpg,gif,webp',
            'slug' => 'required|unique:blogs',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'notification' => $validator->errors()->all()
            ], 200);
        }        

        // Upload image
        $imagePath = $request->file('image')->store('assets/image/blog', 'public');


        $slug = Str::slug($request->input('slug'), '-');

        $user_id = $request->input('user_id', []);

        $sortedUserIds = json_decode($request->input('sortedUserIds'));

        if(!empty($sortedUserIds)){
            $user_id = json_decode($request->input('sortedUserIds'));
        } else {
            $user_id = $request->input('user_id', []);
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
        $info_image_cta = 0;
        if($request->has('info_image_cta'))
            $info_image_cta = 1;
        // Create the Blog record with 'blog_category_ids' included
        DB::table('blogs')->insert([
            'blog_category_ids' => json_encode($request->input('blog_category_ids')),
            'title' => $request->input('title'),
            'slug' => $slug,
            'short_description' => $request->input('short_description'),
            'content' => $request->input('content'),
            'popup_content' => $request->input('popup_content'),
            'main_image' => $imagePath,
            'alt_main_image' => $request->input('alt_main_image'),
            'pdf_path' => $pdfPath,
            'info_image' => $infoImage,
            'info_image_url' => $request->input('info_image_url'),
            'info_image_cta' => $info_image_cta,
            'meta_title' => $request->input('meta_title'),
            'meta_description' => $request->input('meta_description'),
            'user_id' => json_encode($user_id),
            'created_at' => date('Y-m-d H:i:s', strtotime($request->input('updated_at'))),
            'updated_at' => date('Y-m-d H:i:s', strtotime($request->input('updated_at'))),
        ]);


        $response = [
            'status' => true,
            'notification' => 'Blog created successfully!',
        ];

        return response()->json($response);
    }   

    public function edit($id) {
        $blog = Blog::find($id);
        $blogcategory = BlogCategory::where('status', 1)->get();
        $users = User::all();        
        return view('backend.pages.blog.edit', compact('blog', 'blogcategory','users'));
    }
    
    public function view($id) {
        $blog = Blog::find($id);
        return view('backend.pages.blog.view', compact('blog'));
    }  
    
    public function delete($id) {
        
        $blog = Blog::find($id);
        if (!$blog) {
            $response = [
                'status' => false,
                'notification' => 'Record not found.!',
            ];
            return response()->json($response);
        }
        $blog->delete();

        $response = [
            'status' => true,
            'notification' => 'Blog deleted successfully!',
        ];

        return response()->json($response);
    }  
    
    public function status($id, $status) { 
        $blog = Blog::find($id);
        $blog->status = $status;
        $blog->save();
    
        return redirect(route('blogs.index'))->with('success', 'Status Change successfully!');
    }  
    
    public function update(Request $request) {

        $validator = Validator::make($request->all(), [
            'image' => 'image|mimes:jpeg,png,jpg,gif,webp',
            'slug' => 'required|unique:blogs,slug,'. $request->input('id'),
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'notification' => $validator->errors()->all()
            ], 200);
        } 

        // Assuming $request is an instance of Request
        $id = $request->input('id');
            
        if ($request->hasFile('image')) {
            // Update the image if a new one is uploaded
            $imagePath = $request->file('image')->store('assets/image/blog', 'public');
            DB::table('blogs')
                ->where('id', $id)
                ->update(['main_image' => $imagePath]);
        }
        $blog = Blog::find($id);
        if ($request->hasFile('pdf_path')) {
            $pdfPath = $request->file('pdf_path')->store('assets/image/blog', 'public');
            $blog->pdf_path = $pdfPath;
        } else {
            if($request->has('pdf_path_check') && $blog->pdf_path){
                //Storage::disk('public')->delete($blog->pdf_path);
                $blog->pdf_path = null;
            } 
        }
        if ($request->hasFile('info_image')) {
            $infoImage = $request->file('info_image')->store('assets/image/blog', 'public');
            $blog->info_image = $infoImage;
        } else {
            if($request->has('info_image_check') && $blog->info_image){
                //Storage::disk('public')->delete($blog->info_image);
                $blog->info_image = null;
            } 
        }

        $slug = Str::slug($request->input('slug'), '-');
        $sortedUserIds = json_decode($request->input('sortedUserIds'));
        
        if ($sortedUserIds !== null) {
            $user_id1 = json_decode($request->input('sortedUserIds'));
            $user_id = json_encode($user_id1);
        } else {
            $user_id = DB::table('blogs')->where('id', $id)->value('user_id');
        }
        $info_image_cta = 0;
        if($request->has('info_image_cta'))
            $info_image_cta = 1; 

        DB::table('blogs')
            ->where('id', $id)
            ->update([
                'blog_category_ids' => json_encode($request->input('blog_category_ids')),
                'title' => $request->input('title'),
                'slug' => $slug,
                'alt_main_image' => $request->input('alt_main_image'),
                'short_description' => $request->input('short_description'),
                'content' => $request->input('content'),
                'pdf_path' => $blog->pdf_path,
                'info_image' => $blog->info_image,
                'info_image_url' => $request->input('info_image_url'),
                'info_image_cta' => $info_image_cta,
                'popup_content' => $request->input('popup_content'),
                'meta_title' => $request->input('meta_title'),
                'meta_description' => $request->input('meta_description'),
                'user_id' => $user_id,
                'updated_at' => date('Y-m-d H:i:s', strtotime($request->input('updated_at'))),
            ]);

        $response = [
            'status' => true,
            'notification' => 'Blog updated successfully!',
        ];

        return response()->json($response);
    }   
}
