<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PracticeArea;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\User;
use App\Models\Team;
use App\Models\Faq;
use App\Models\Contact;
use App\Models\BlogComment;
use App\Models\MediaCoverage;
use App\Models\Publication;
use App\Models\DownloadChecklist;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;



class IndexController extends Controller
{
    public function index(){
        return view('frontend.pages.home.index');
    }
//--------------=============================== practice area =====================---------------------------
    public function practice_area(){
        $practiceAreas = PracticeArea::whereIn('id', ['7', '9', '11','37', '14','10', '38', '17', '12', '8', '31', '39', '19','35', '36', '13','63','62','33'])
        ->orderByRaw("FIELD(id, '7', '9', '11','37', '14','10','38', '17', '12', '8', '31', '39', '19','35', '36', '13','63','62','33')")->get();

        //return $practiceAreas;
        return view('frontend.pages.practicearea.index', compact('practiceAreas'));
    }

    public function practice_area_detail($slug){

        $detail = PracticeArea::where('slug', $slug)->where('status', 1)->first();
    
        if (!$detail) {
            return view('frontend.pages.404.index');
        }
    
        $specificSegment = request()->segment(1);
        $segmentCount = count(request()->segments());
    
        $validConditions = [
            ($specificSegment == 'area-of-practice' && $detail->special_service == '0'),
            ($specificSegment == 'specialised-services' && $detail->special_service == '1'),
            ($segmentCount == 1 && $detail->special_service == '2'),
            ($specificSegment == 'area-of-practice' && $detail->special_service == '3')
        ];
    
        if (!in_array(true, $validConditions)) {
            return view('frontend.pages.404.index');
        }
    
        $blog_Catg = BlogCategory::where('slug', $slug)->where('status', 1)->first();
        if(!empty($blog_Catg)){
            $blog = Blog::where('status', 1)->whereJsonContains('blog_category_ids', ''.$blog_Catg->id.'')->limit(3)->orderBy('id', 'desc')->get();
        } else {
            $blog = [];
        }
        $focusAreaIds = json_decode($detail->focus_area, true);
        $focusAreaIds = is_array($focusAreaIds) ? $focusAreaIds : [];
        $child_detail = PracticeArea::where('status', 1)->whereIn('id', $focusAreaIds)->get();
        $cont_pdf_repl_str = "";
        if(!empty($detail->pdf_path)){
            if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                // If a proxy is used, get the client's IP from the forwarded header
                $clientIP = $_SERVER['HTTP_X_FORWARDED_FOR'];
            } elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
                // If accessed via shared internet, use the client's IP from the client header
                $clientIP = $_SERVER['HTTP_CLIENT_IP'];
            } else {
                // Otherwise, use the default REMOTE_ADDR
                $clientIP = $_SERVER['REMOTE_ADDR'];
            } 
            $pdf_pass_info = base64_encode(json_encode(array('pdf_path'=>$detail->pdf_path, 'title'=>$detail->title, 'slug'=>$detail->slug,'ip_address'=>$clientIP)));
            // $cont_pdf_repl_str = "<a href='javascript:void(0);' class='load_pdf' data-info='".$pdf_pass_info."' ><span>Download</span> Free Checklist</a>";
            if(empty($detail->popup_content)){
               $detail->popup_content = '<div class="text">Are you looking to <span>set up a company in India?</span></div>
                           <div class="text-2">To know about the documentation requirement for setting up a company in India, please enter the following details and we will drop an "Incorporation Checklist" in your inbox.</div>';
           }
            $cont_pdf_repl_str = '<style>
                h3 .load_pdf{background: #e73f3a; color: #fff !important; padding: 5px 15px; border-radius: 5px; font-weight: 400; display: table; font-size: 15px; margin: 10px auto; position: relative;}
                h3 .load_pdf span{display: table; width: 100%; font-size: 12px;}
                h3 .load_pdf:before{content: "\f019"; position: absolute; font-family: FontAwesome; font-size: 22px; color: #fff; left: 10px; top: 8px; font-weight: 300; border-right: solid 1px #fff; padding-right: 8px; display:none}
                h3 .popup-outer{background: rgb(248,198,196); background: linear-gradient(0deg, rgba(248,198,196,1) 0%, rgba(255,255,255,1) 100%); width:750px; margin:0 auto; border-radius:15px; display:table; border:solid 1px #f8c6c4}

                .service_title_desc p .load_pdf{background: #e73f3a; color: #fff !important; padding: 5px 15px 5px 50px; border-radius: 5px; font-weight: 400; display: table; font-size: 15px; margin: 10px auto; position: relative; font-family: merriweather, serif !important;}
                .service_title_desc p .load_pdf span{display: table; width: 100%; font-size: 12px;}
                .service_title_desc p .load_pdf:before{    content: "\f019"; position: absolute; font-family: FontAwesome; font-size: 22px; color: #fff; left: 6px; top: 8px; font-weight: 300; border-right: solid 1px #fff; padding-right: 8px; padding: 5px 8px 5px 5px;}
                .popup-outer{background: rgb(248,198,196); background: linear-gradient(0deg, rgba(248,198,196,1) 0%, rgba(255,255,255,1) 100%); width:750px; margin:0 auto; border-radius:15px; display:table; position:relative; border:solid 1px #f8c6c4}

                #download_pdf_id .modal-header{border: 0px; padding: 0px;}
                #download_pdf_id .modal-header .btn-close{right: 30px; top: 30px; position: absolute; z-index: 100;}
                #download_pdf_id .modal-content{max-width: 800px !important;}
                #download_pdf_id .modal-body{padding: 0px;}
                #download_pdf_id .modal-body .popup-outer{display: table; background: #fff; border-radius: 20px; width:100%;}
                .popup-outer .img{padding:40px 20px 40px 40px; float:left;}
                .popup-outer .field-area{padding:40px 20px; float:left; width:calc(100% - 280px)}
                .popup-outer .field-area .text{padding:10px 10px 0px 10px; font-family: "Merriweather", serif; !important; font-size:16px; color:#000}
                .popup-outer .field-area .text span{font-size: 24px !important; font-weight: 600 !important; display: table !important; text-align: left !important; line-height: normal !important;}
                .popup-outer .field-area .text-2{padding:0px 10px 10px 10px; font-family: "Merriweather", serif; !important; font-size:13px; color:#737373; margin-top: 10px;     line-height: 18px;}
                .popup-outer .field-area .field{padding:0px 10px; display:inline-block; width:100%;}
                .popup-outer .field-area .field input{width:calc(100% - 101px); border:solid 1px #959595; border-radius:5px 0px 0px 5px; padding:10px; border-right:0px;}
                .popup-outer .field-area .field button{width:100px; background:#e73f3a; border:solid 1px #e73f3a; color:#fff; border-radius:0px 5px 5px 0px; padding:11px; border:0px;}
                .popup-outer .field-area .alert-success{top: 0px; text-align: center; padding: 10px; font-size: 13px; border-radius: 10px;}
                .popup-outer .field-area .alert-danger{top: 0px; text-align: center; padding: 10px; font-size: 13px; border-radius: 10px;}
                .popup-outer .lzyloader{position: absolute; left: 0px; top: 0px; width: 100%; height: 100%; text-align: center; background: rgba(255, 255, 255, 0.9);}
                .popup-outer .lzyloader img{position: absolute; left: 50%; margin-left: -25px; top: 50%; margin-top: -25px;}

                @media screen and (min-width: 300px) and (max-width: 991px) {
                    .popup-outer{width:100%;}
					.popup-outer .field-area .text{padding: 10px 10px 0px 10px;}
					.popup-outer .field-area .text-2{padding: 0px 10px 10px 10px;}
					.popup-outer .field-area .field{padding:0px 10px 20px 10px;}
					#download_pdf_id .modal-body .popup-outer{display: grid;}
					.popup-outer .img{padding: 10px; width: 100%; float: unset; text-align:center; order:2}
					.popup-outer .field-area{float: unset; width: 100%; padding: 10px; order:1;}
					h3 .load_pdf{line-height: 18px;}
					h3 .load_pdf:before{padding: 7px 8px 7px 0px;}
					.popup-outer .field-area .alert-danger{border-radius: 5px; border: solid 1px #e73f3a; color: #000;}
                }
            </style> 
            <div class="popup-outer load_pdf" data-info="'.$pdf_pass_info.'">
                <div class="img"><img src="https://www.ahlawatassociates.com/assets/frontend/images/popup-photo.png" alt="logo"></div>
                <div class="field-area">
                    <div id="error_pdf_email"></div>
                    <div class="lzyloader d-none"><img src="https://www.ahlawatassociates.com/public/assets/frontend/images/lzyloader.gif" alt="loader" style="width:50px;"></div>
                    <div>'.$detail->popup_content.'</div>
                    <div class="field"><input type="text" placeholder="Enter your email id" id="pdf_email"><button id="send_pdf">Submit</button></div> 
                </div>
            </div>'; 
        }
        $detail->content = str_replace("##LOAD_PDF##", $cont_pdf_repl_str, $detail->content);
        return view('frontend.pages.practicearea.detail', compact('detail', 'child_detail', 'blog')); 
    }
//--------------=============================== practice area end =====================------------------------------

//--------------=============================== Blog  ================================------------------------------

    public function blog(){
        $blog = Blog::where('status', 1)->whereJsonContains('blog_category_ids', '3')->orderBy('updated_at', 'desc')->paginate(6);

        return view('frontend.pages.blog.index', compact('blog'));
    }

    public function blog_data(Request $request)
    {
        $page = $request->input('page', 1);
        $perPage = 6;
    
        $blog = Blog::where('status', 1)
            ->whereJsonContains('blog_category_ids', '3')
            ->orderBy('updated_at', 'desc')
            ->paginate($perPage, ['*'], 'page', $page);
    
        if ($request->ajax()) {
            $view = view('frontend.component.blog_list_card', compact('blog'))->render();
    
            return response()->json(['html' => $view]);
        }
    
        return view('frontend.pages.blog.index', compact('blog'));
    }

    // public function blog_detail($category, $slug){

    //     $category_id = BlogCategory::where('slug',$category)->first();

    //     $detail = Blog::where('slug', $slug)->where('status', 1)->first();

    //     if($detail){
    //         $author = json_decode($detail->user_id, true);

    //         //$blog = Blog::where('status', 1)->whereJsonContains('blog_category_ids', ''.$category_id->id.'')->where('id', '!=', $detail->id)->limit(3)->orderBy('id', 'desc')->get();
    
    //         $blog = Blog::where('status', 1)->whereJsonContains('blog_category_ids', json_decode($detail->blog_category_ids))->whereJsonContains('blog_category_ids', ''.$category_id->id.'')->where('id', '!=', $detail->id)->limit(3)->orderBy('id', 'desc')->get();
    
    //         $current_id = $detail->id;
    
    //         $previous = Blog::where('status', 1)->whereJsonContains('blog_category_ids', ''.$category_id->id.'')->where('id', '<', $current_id)->orderBy('id', 'desc')->first();
    //         $next = Blog::where('status', 1)->whereJsonContains('blog_category_ids', ''.$category_id->id.'')->where('id', '>', $current_id)->orderBy('id', 'asc')->first();
    
    //         $previous_slug = $previous ? $previous->slug : null;
    //         $next_slug = $next ? $next->slug : null;
    
    //         return view('frontend.pages.blog.detail', compact('detail','author','blog','previous_slug','next_slug'));
    //     } else {
    //         return view('frontend.pages.404.index');
    //     }


    // }
    public function blog_detail($category, $slug)
    {

        $category_id = BlogCategory::where('slug', $category)->first();

        $detail = Blog::where('slug', $slug)->where('status', 1)->first();

        if ($detail) {
            $blog_category_ids = json_decode($detail->blog_category_ids);
            $first_category_id = $blog_category_ids[0];

            if ($first_category_id == $category_id->id) {
                $author = json_decode($detail->user_id, true);

                //$blog = Blog::where('status', 1)->whereJsonContains('blog_category_ids', ''.$category_id->id.'')->where('id', '!=', $detail->id)->limit(3)->orderBy('id', 'desc')->get();

                $blog = Blog::where('status', 1)
                    ->whereJsonContains('blog_category_ids', json_decode($detail->blog_category_ids))
                    ->whereJsonContains('blog_category_ids', '' . $category_id->id . '')
                    ->where('id', '!=', $detail->id)->limit(3)
                    ->orderBy('id', 'desc')
                    ->get();

                if(empty($detail->popup_content)){
                    $detail->popup_content = '<div class="text">Are you looking to <span>set up a company in India?</span></div>
                              <div class="text-2">To know about the documentation requirement for setting up a company in India, please enter the following details and we will drop an "Incorporation Checklist" in your inbox.</div>';
                }
                $current_id = $detail->id;

                $previous = Blog::where('status', 1)
                    ->whereJsonContains('blog_category_ids', '' . $category_id->id . '')
                    ->where('id', '<', $current_id)
                    ->orderBy('id', 'desc')
                    ->first();

                $next = Blog::where('status', 1)
                    ->whereJsonContains('blog_category_ids', '' . $category_id->id . '')
                    ->where('id', '>', $current_id)
                    ->orderBy('id', 'asc')
                    ->first();

                $previous_slug = $previous ? $previous->slug : null;
                $next_slug = $next ? $next->slug : null;
                
                $cont_pdf_repl_str = '';

                if(!empty($detail->pdf_path)){
                    if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                        // If a proxy is used, get the client's IP from the forwarded header
                        $clientIP = $_SERVER['HTTP_X_FORWARDED_FOR'];
                    } elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
                        // If accessed via shared internet, use the client's IP from the client header
                        $clientIP = $_SERVER['HTTP_CLIENT_IP'];
                    } else {
                        // Otherwise, use the default REMOTE_ADDR
                        $clientIP = $_SERVER['REMOTE_ADDR'];
                    } 
                    $pdf_pass_info = base64_encode(json_encode(array('pdf_path'=>$detail->pdf_path, 'title'=>$detail->title, 'slug'=>$detail->slug,'ip_address'=>$clientIP)));
                    $cont_pdf_repl_str = '<style>
                        h3 .load_pdf{background: #e73f3a; color: #fff !important; padding: 5px 15px 5px 50px; border-radius: 5px; font-weight: 400; display: table; font-size: 15px; margin: 10px auto; position: relative;}
                        h3 .load_pdf span{display: table; width: 100%; font-size: 12px;}
                        h3 .load_pdf:before{content: "\f019"; position: absolute; font-family: FontAwesome; font-size: 22px; color: #fff; left: 10px; top: 8px; font-weight: 300; border-right: solid 1px #fff; padding-right: 8px; display:none}
                        h3 .popup-outer{background: rgb(248,198,196); background: linear-gradient(0deg, rgba(248,198,196,1) 0%, rgba(255,255,255,1) 100%); width:750px; margin:0 auto; border-radius:15px; display:table; border:solid 1px #f8c6c4}

                        .service_title_desc p .load_pdf{background: #e73f3a; color: #fff !important; padding: 5px 15px 5px 50px; border-radius: 5px; font-weight: 400; display: table; font-size: 15px; margin: 10px auto; position: relative; font-family: merriweather, serif !important;}
                        .service_title_desc p .load_pdf span{display: table; width: 100%; font-size: 12px;}
                        .service_title_desc p .load_pdf:before{    content: "\f019"; position: absolute; font-family: FontAwesome; font-size: 22px; color: #fff; left: 6px; top: 8px; font-weight: 300; border-right: solid 1px #fff; padding-right: 8px; padding: 5px 8px 5px 5px;}
                        .popup-outer{background: rgb(248,198,196); background: linear-gradient(0deg, rgba(248,198,196,1) 0%, rgba(255,255,255,1) 100%); width:750px; margin:0 auto; border-radius:15px; display:table; position:relative; border:solid 1px #f8c6c4}

                        #download_pdf_id .modal-header{border: 0px; padding: 0px;}
                        #download_pdf_id .modal-header .btn-close{right: 30px; top: 30px; position: absolute; z-index: 100;}
                        #download_pdf_id .modal-content{max-width: 800px !important;}
                        #download_pdf_id .modal-body{padding: 0px;}
                        #download_pdf_id .modal-body .popup-outer{display: table; background: #fff; border-radius: 20px; width:100%;}
                        .popup-outer .img{padding:40px 20px 40px 40px; float:left;}
                        .popup-outer .field-area{padding:40px 20px; float:left; width:calc(100% - 280px)}
                        .popup-outer .field-area .text{padding:10px 10px 0px 10px; font-family: "Merriweather", serif; !important; font-size:16px; color:#000;}
                        .popup-outer .field-area .text span{font-size:24px!important; font-weight:600!important; display:table!important; line-height:normal!important;}
                        .popup-outer .field-area .text-2{padding:0px 10px 10px 10px; font-family: "Merriweather", serif; !important; font-size:13px; color:#737373; margin-top:10px;}
                        .popup-outer .field-area .field{padding:0px 10px; display:inline-block; width:100%;}
                        .popup-outer .field-area .field input{width:calc(100% - 101px); border:solid 1px #959595; border-radius:5px 0px 0px 5px; padding:10px; border-right:0px;}
                        .popup-outer .field-area .field button{width:100px; background:#e73f3a; border:solid 1px #e73f3a; color:#fff; border-radius:0px 5px 5px 0px; padding:11px; border:0px;}
                        .popup-outer .field-area .alert-success{top: 0px; text-align: center; padding: 10px; font-size: 13px; border-radius: 10px;}
                        .popup-outer .field-area .alert-danger{top: 0px; text-align: center; padding: 10px; font-size: 13px; border-radius: 10px;}
                        .popup-outer .lzyloader{position: absolute; left: 0px; top: 0px; width: 100%; height: 100%; text-align: center; background: rgba(255, 255, 255, 0.9);}
                        .popup-outer .lzyloader img{position: absolute; left: 50%; margin-left: -25px; top: 50%; margin-top: -25px;}

                        @media screen and (min-width: 300px) and (max-width: 991px) {
                            .popup-outer{width:100%;}
                            .popup-outer .field-area .text{padding: 10px 10px 0px 10px;}
                            .popup-outer .field-area .text-2{padding: 0px 10px 10px 10px;}
                            .popup-outer .field-area .field{padding:0px 10px 20px 10px;}
                            #download_pdf_id .modal-body .popup-outer{display: grid;}
                            .popup-outer .img{padding: 10px; width: 100%; float: unset; text-align:center; order:2}
                            .popup-outer .field-area{float: unset; width: 100%; padding: 10px; order:1;}
                            h3 .load_pdf{line-height: 18px;}
                            h3 .load_pdf:before{padding: 7px 8px 7px 0px;}
                            .popup-outer .field-area .alert-danger{border-radius: 5px; border: solid 1px #e73f3a; color: #000;}
                        }
                    </style> 
                    <div class="popup-outer load_pdf" data-info="'.$pdf_pass_info.'">
                        <div class="img"><img src="https://www.ahlawatassociates.com/assets/frontend/images/popup-photo.png" alt="logo"></div>
                        <div class="field-area">
                            <div id="error_pdf_email"></div>
                            <div class="lzyloader d-none"><img src="https://www.ahlawatassociates.com/public/assets/frontend/images/lzyloader.gif" alt="loader" style="width:50px;"></div>
                            <div>'.$detail->popup_content.'</div>
                            <div class="field"><input type="text" placeholder="Enter your email id" id="pdf_email"><button id="send_pdf">Submit</button></div> 
                        </div>
                    </div>'; 
                }

                $detail->content = str_replace("##LOAD_PDF##", $cont_pdf_repl_str, $detail->content);

                return view('frontend.pages.blog.detail', compact('detail', 'author', 'blog', 'previous_slug', 'next_slug'));
            }
        }
        return view('frontend.pages.404.index');

    }


//--------------=============================== Blog end ================================------------------------------

//--------------=============================== Team  ================================------------------------------

    public function team_members(){
        $team = Team::orderBy('series', 'asc')->get();

        return view('frontend.pages.team.index', compact('team'));
    }

    public function team_detail($slug){
        $slug = str_replace('-', ' ', $slug);

        $detail = Team::where('name', $slug)->where('status', 1)->first();

        if($detail){
            return view('frontend.pages.team.detail', compact('detail'));
        } else {
            return view('frontend.pages.404.index');
        }
    }

//--------------=============================== Team end ================================------------------------------

//--------------=============================== other ================================------------------------------

    public function not_found(){

        return view('frontend.pages.404.index');
    }
    public function thank_you(){

        return view('frontend.pages.thankyou.index');
    }

    public function cookie_policy(){

        return view('frontend.pages.cookiePolicy.index');
    }

//--------------=============================== other ================================------------------------------

//--------------=============================== Pages ================================------------------------------

    public function contact_us(){
        return view('frontend.pages.contact.index');
    }

    public function career(){
        return view('frontend.pages.career.index');
    }

    public function faq(){
        $faq = Faq::where('status', 1)->get();
        return view('frontend.pages.faq.index', compact('faq'));
    }

    public function about_us(){
        return view('frontend.pages.about.index');
    }

    public function privacy_policy(){
        return view('frontend.pages.privacypolice.index');
    }

//--------------=============================== Pages ================================------------------------------

//--------------=============================== contact form save ===========================------------------------------

    public function contact_save(Request $request)
    {
        $rules = [
            'cv' => 'nullable|mimetypes:application/pdf,application/msword',
            'phone' => 'required|regex:/^[0-9\s\+]{10,}$/',
            'description' => 'nullable|regex:/^[a-zA-Z0-9\s,&-’.@]+$/',
            //'g-recaptcha-response' => 'required|captcha',
        ];
    
        $validator = Validator::make($request->all(), $rules); // Pass $request->all() as the first argument
    
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'notification' => $validator->errors(),
            ]);
        }
    
        if ($request->hasFile('cv')) {
            $cvPath = $request->file('cv')->store('assets/image/pdf', 'public');
        } else {
            $cvPath = null; // Set to null if 'cv' is not provided
        }
    
        // Create the contact record, including 'cv' if provided
        $contactData = $request->all();
        $contactData['cv'] = $cvPath;

        $name = isset($contactData["name"]) ? $contactData["name"] : ' - ';
        $email = isset($contactData["email"]) ? $contactData["email"] : ' - ';
        $phone = isset($contactData["phone"]) ? $contactData["phone"] : ' - ';
        $company_name = isset($contactData["company_name"]) ? $contactData["company_name"] : ' - ';
        $services = isset($contactData["services"]) ? $contactData["services"] : ' - ';
        $description = isset($contactData["description"]) ? $contactData["description"] : ' - ';
        $ip = isset($contactData["ip"]) ? $contactData["ip"] : ' - ';
        $section = isset($contactData["section"]) ? $contactData["section"] : ' - ';
        $ref_url = isset($contactData["ref_url"]) ? $contactData["ref_url"] : ' - ';
        $url = isset($contactData["url"]) ? $contactData["url"] : ' - ';
        $qualification = isset($contactData["qualification"]) ? $contactData["qualification"] : ' - ';

        // Create the contact record
        $contact = Contact::create($contactData);

        $user_data = json_decode(session('user_ip'), true);

        // Send email if $cvPath is not null
        if ($cvPath !== null) {
            $recipient = 'careers@ahlawatassociates.in'; // Replace with the actual recipient email
            $subject = 'Career Enquiry';
        } else {
            $recipient = 'contact@ahlawatassociates.in'; // Replace with the actual recipient email
            $subject = 'Lead Enquiry';
        }
/*
        $body = '<table>';
        $body .= "<tr><td style='width: 150px;'><strong>From :</strong></td><td>" . $name . ' ' . $email . "</td></tr></br>";
        $body .= "<tr><td style='width: 150px;'><strong>Form Name :</strong></td><td>" . $section . "</td></tr></br>";
        $body .= "<tr><td style='width: 150px;'><strong>Page URL :</strong></td><td>" . $url . "</td></tr></br><p></p>";
        
        $body .= "<tr><td style='width: 150px;'><strong>Full Name :</strong></td><td>" . $name . "</td></tr></br>";
        $body .= "<tr><td style='width: 150px;'><strong>Email Address :</strong></td><td>" . $email . "</td></tr></br>";
        $body .= "<tr><td style='width: 150px;'><strong>Phone Number :</strong></td><td>" . $phone . "</td></tr></br>";
        $body .= "<tr><td style='width: 150px;'><strong>Company Name :</strong></td><td>" . $company_name . "</td></tr></br>";

        if (isset($contactData["description"]) || isset($contactData["services"])) {
            $body .= "<tr><td style='width: 150px;'><strong>Service Requested :</strong></td><td>" . ($services ?? 'Not provided') . "</td></tr></br>";
            $body .= "<tr><td style='width: 150px;'><strong>Description :</strong></td><td>" . ($description ?? 'Not provided') . "</td></tr></br><p></p>";
        } else {
            $body .= "<tr><td style='width: 150px;'><strong>Qualification :</strong></td><td>" . ($qualification ?? 'Not provided') . "</td></tr></br><p></p>";
        }
        
        
        $body .= "<tr><td style='width: 150px;'><strong>Ip :</strong></td><td>" . $ip . "</td></tr></br>";
        $body .= "<tr><td style='width: 150px;'><strong>User Location :</strong></td><td>" . 
                    ($user_data['city'] ?? 'null') . ' ' . 
                    ($user_data['region'] ?? 'null') . ' ' . 
                    ($user_data['country'] ?? 'null') . 
                "</td></tr></br>";
        $body .= "<tr><td style='width: 150px;'><strong>Referrer URL :</strong></td><td>" . $ref_url . "</td></tr></br>";
        $body .= "<tr><td style='width: 150px;'><strong>Submitted Date :</strong></td><td>" . date('Y-m-d') . "</td></tr></br>";
        $body .= '</table>';

*/


$body2 = '';
if (isset($contactData["description"]) || isset($contactData["services"])) {
    $body2 .= "<p style=\"margin: 0;\"><strong>Service Requested : </strong>" . ($services ?? 'Not provided') . "</p>";
    $body2 .= "<p style=\"margin: 0;\"><strong>Description: </strong>" . ($description ?? 'Not provided') . "</p>";
} else {
    $body2 .= "<p style=\"margin: 0;\"><strong>Description: </strong>" . ($qualification ?? 'Not provided') . "</p>";
}


$body = '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style type="text/css">
        #outlook a { padding:0; }
        .ExternalClass { width:100%; }
        /* Your CSS styles here */
    </style>
</head>
<body bgcolor="#ffffff" text="#3b3f44" link="#696969" yahoo="fix" style="background-color: #ffffff;">
    <table cellspacing="0" cellpadding="0" border="0" role="presentation" class="nl2go-body-table" width="100%" style="background-color: #ffffff; width: 100%;">
        <tr>
            <td>
                <table cellspacing="0" cellpadding="0" border="0" role="presentation" width="100%" align="left" class="r0-o" style="table-layout: fixed; width: 100%;">
                    <tr>
                        <td valign="top" class="r1-i" style="background-color: #ffffff;">
                            <table cellspacing="0" cellpadding="0" border="0" role="presentation" width="100%" align="center" class="r3-o" style="table-layout: fixed; width: 100%;">
                                <tr>
                                    <td class="r4-i" style="padding-top: 20px;">
                                        <table width="100%" cellspacing="0" cellpadding="0" border="0" role="presentation">
                                            <tr>
                                                <th width="100%" valign="top" class="r5-c" style="font-weight: normal;">
                                                    <table cellspacing="0" cellpadding="0" border="0" role="presentation" width="100%" align="left" class="r0-o" style="table-layout: fixed; width: 100%;">
                                                        <tr>
                                                            <td valign="top">
                                                                <table width="100%" cellspacing="0" cellpadding="0" border="0" role="presentation">
                                                                    <tr>
                                                                        <td class="r8-c nl2go-default-textstyle" align="left" style="color: #3b3f44; font-family: arial,helvetica,sans-serif; font-size: 12pt; line-height: 1.5; word-break: break-word; padding-top: 15px; text-align: left; valign: top;">
                                                                            <div>
                                                                                <p style="margin: 0;"><strong>Full Name:</strong> ' . $name . '</p>
                                                                                <p style="margin: 0;"><strong>Email Address:</strong> ' . $email . '</p>
                                                                                <p style="margin: 0;"><strong>Phone Number: </strong>' . $phone . '</p>
                                                                                <!-- Add your other fields here -->
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="r8-c nl2go-default-textstyle" align="left" style="color: #3b3f44; font-family: arial,helvetica,sans-serif; font-size: 12pt; line-height: 1.5; word-break: break-word; padding-top: 15px; text-align: left; valign: top;">
                                                                            <div>
                                                                                <p style="margin: 0;"><strong>Company Name:</strong> ' . $company_name . '</p>
																				'.$body2.'
                                                                                <p style="margin: 0;"><strong>Form Name:</strong> ' . $section . '</p>
                                                                                <p style="margin: 0;"><strong>Page URL: </strong>' . $url . '</p>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="r8-c nl2go-default-textstyle" align="left" style="color: #3b3f44; font-family: arial,helvetica,sans-serif; font-size: 12pt; line-height: 1.5; word-break: break-word; padding-top: 15px; text-align: left; valign: top;">
                                                                            <div>
                                                                                <p style="margin: 0;"><strong>Referrer URL: </strong>' . $ref_url . '</p>
                                                                                <p style="margin: 0;"><strong>Ip:</strong> ' . $ip . '</p>
                                                                                <p style="margin: 0;"><strong>User Location:</strong> ' . ($user_data['city'] ?? 'null') . ' ' . ($user_data['region'] ?? 'null') . ' ' . ($user_data['country'] ?? 'null') . '</p>
                                                                                <p style="margin: 0;"><strong>Submitted Date: </strong>' . date('Y-m-d') . '</p>
                                                                                <!-- Add your other fields here -->
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="r9-c nl2go-default-textstyle" align="left" style="color: #3b3f44; font-family: arial,helvetica,sans-serif; font-size: 12px; line-height: 1.5; word-break: break-word; padding-top: 30px; text-align: left; valign: top;">
                                                                            <div style=" display: none;">
                                                                                <p style="margin: 0;"><a href="{{ unsubscribe }}" style="color: #696969; text-decoration: underline;">Click here to unsubscribe</a></p>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </th>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>';




        if ($cvPath !== null) {
             // Optional attachments
            $attachments = [
                [
                    'path' => storage_path("app/public/$cvPath"), // Replace with the actual path
                    'name' => ''.$name.'.pdf', // Replace with the desired attachment name
                ],
                // Add more attachments if needed
            ];

            // Send the email
            sendEmail($recipient, $subject, $body, $attachments);

        } else {
            sendEmail($recipient, $subject, $body);


            $token = json_decode(zoho_token(), true);

            $access_token = $token['access_token'];
            $api_domain = $token['api_domain'];
            $state = $user_data['region'];
            $city = $user_data['city'];


    
            if($token['access_token'] && $token['api_domain']){

                // Remove newline characters and spaces
                $description = str_replace(array("\n", "\r"), '', $description);

                $zoho = zoho_lead_create($access_token, $api_domain, $name, $email, $phone, $services, $description, $url, $state, $city);

                $zoho_response = json_decode($zoho);

                if(isset($zoho_response->data)){
                    $zoho_status = $zoho_response->data[0]->code;
                } else {
                    $zoho_status = '';
                }

                $zoho_data = [
                    'zoho' => $zoho,
                    'state' => $user_data['region'],
                    'city' => $user_data['city'],
                ];

                // Get the ID of the newly created contact
                $ContactId = $contact->id;

                if($zoho_status == "SUCCESS"){

                    Contact::where('id', $ContactId)->update([
                        'success' => '1',
                        'response' => json_encode($zoho_data),
                        'attempt' => '0'
                    ]);

                } else {

                    Contact::where('id', $ContactId)->update([
                        'success' => '0',
                        'response' => json_encode($zoho_data),
                        'attempt' => '0'
                    ]);

                }

            }
    

        }


    
        $response = [
            'status' => true,
            'notification' => 'Contact added successfully!',
        ];
    
        return response()->json($response);
    
    }
   //--------------=============================== contact form save ===========================--------------------------
   
   //--------------=============================== news ==========================================-------------------------

    public function news(){
        $news = Blog::where('status', 1)->whereJsonContains('blog_category_ids', '4')->orderBy('updated_at', 'desc')->paginate(6);

        return view('frontend.pages.news.index', compact('news'));
    }

    public function news_data(Request $request)
    {
        $page = $request->input('page', 1);
        $perPage = 6;
    
        $news = Blog::where('status', 1)->whereJsonContains('blog_category_ids', '4')->orderBy('updated_at', 'desc')->paginate($perPage, ['*'], 'page', $page);
    
        if ($request->ajax()) {
            $view = view('frontend.component.news_card', compact('news'))->render();
    
            return response()->json(['html' => $view]);
        }
    
        return view('frontend.pages.news.index', compact('news'));
    }

    //--------------=============================== news end ==========================================---------------------

     //--------------=============================== Deal Update ====================================---------------------

    public function deal_update(){
        $deal_update = Blog::where('status', 1)->whereJsonContains('blog_category_ids', '5')->orderBy('updated_at', 'desc')->paginate(6);

        return view('frontend.pages.deal_update.index', compact('deal_update'));
    }

    public function deal_update_data(Request $request)
    {
        $page = $request->input('page', 1);
        $perPage = 6;
    
        $deal_update = Blog::where('status', 1)->whereJsonContains('blog_category_ids', '5')->orderBy('updated_at', 'desc')->paginate($perPage, ['*'], 'page', $page);
    
        if ($request->ajax()) {
            $view = view('frontend.component.deal_update_card', compact('deal_update'))->render();
    
            return response()->json(['html' => $view]);
        }
    
        return view('frontend.pages.deal_update.index', compact('deal_update'));
    }

//--------------=============================== Deal Update end =================================---------------------

//--------------=============================== media coverage ====================================---------------------

    public function media_coverage(){
        $media_coverage = MediaCoverage::where('status', 1)->orderBy('updated_at', 'desc')->paginate(6);

        return view('frontend.pages.media_coverage.index', compact('media_coverage'));
    }

    public function media_coverage_data(Request $request)
    {
        $page = $request->input('page', 1);
        $perPage = 6;
    
        $media_coverage = MediaCoverage::where('status', 1)->orderBy('updated_at', 'desc')->paginate($perPage, ['*'], 'page', $page);
    
        if ($request->ajax()) {
            $view = view('frontend.component.media_coverage_card', compact('media_coverage'))->render();
    
            return response()->json(['html' => $view]);
        }
    
        return view('frontend.pages.media_coverage.index', compact('media_coverage'));
    }

  //--------------=============================== media coverage ====================================---------------------

  //--------------=============================== publication ====================================---------------------

    public function publication(){
        $publication = Publication::where('status', 1)->orderBy('updated_at', 'desc')->paginate(6);

        return view('frontend.pages.publication.index', compact('publication'));
    }

    public function publication_data(Request $request)
    {
        $page = $request->input('page', 1);
        $perPage = 6;
    
        $publication = Publication::where('status', 1)->orderBy('updated_at', 'desc')->paginate($perPage, ['*'], 'page', $page);
    
        if ($request->ajax()) {
            $view = view('frontend.component.publication_card', compact('publication'))->render();
    
            return response()->json(['html' => $view]);
        }
    
        return view('frontend.pages.publication.index', compact('publication'));
    }

//--------------=============================== publication end ====================================---------------------

//--------------=============================== other feature ====================================---------------------

    public function search(Request $request){

        $query = $request->input('query');

        $blogs = Blog::where(function ($queryBuilder) use ($query) {
            $queryBuilder->where('title', 'like', "%$query%")
                ->orWhere('short_description', 'like', "%$query%")
                ->orWhere('content', 'like', "%$query%");
        })->where('status', 1)->get();
        
        $practiceAreas = PracticeArea::where(function ($queryBuilder) use ($query) {
            $queryBuilder->where('title', 'like', "%$query%")
                ->orWhere('short_description', 'like', "%$query%")
                ->orWhere('content', 'like', "%$query%");
        })->where('status', 1)->get();

        return view('frontend.pages.search.index', compact('blogs','practiceAreas'));
    }

    public function comment_save(Request $request)
    {
        $commentData = $request->all();
    
        // Create the contact record
        BlogComment::create($commentData);
    
        $response = [
            'status' => true,
            'notification' => 'Comment added successfully!',
        ];
    
        return response()->json($response);
    }

    public function uncategorized()
    {
        echo'hello';
    }


    public function send_pdf(Request $request)
    {
        $requestData = $request->all();   
        $pdf_data = json_decode(base64_decode($requestData['info']), true);
        DownloadChecklist::create([
            'slug' => $pdf_data['slug'],
            'email_id' => $requestData['email'],
            'ip' => $pdf_data['ip_address'],
            'status' => '1'
        ]);
        $body = "Hi,<br /><br />".$requestData['email']." downloaded, Checklist from '".$pdf_data["title"]."'<br /><br />Thanks,<b>Ahlawat Associates Team</b>"; 
        $subject = "Checklist download from ".$pdf_data["title"];         
        $recipient = 'marketing@ahlawatassociates.in';
        sendEmail($recipient, $subject, $body);   

        $recipient = $requestData['email'];
        // $subject = $pdf_data["title"].' Checklist - Ahlawat Associates';
        $subject = 'Setting up in India Checklist: Ahlawat Associates';
        $body = 'Hi,<br /><br />Thank you for reaching out to Ahlawat &amp; Associates, a full-service law firm with 45+ years of experience, catering to both international &amp; domestic clients with their legal requirements.<br /><br />Please find the attached checklist for incorporating a company in India. <br /><br />Should you require our assistance to set up a company in India, please write to us on <a href="mailto:contact@ahlawatassociates.in">contact@ahlawatassociates.in</a> and provide a suitable time slot for scheduling a virtual meeting with our concerned team member and we will circle back with the meeting invitation. This is an introductory meeting and does not include any charges.<br /><br />Look forward to assisting you.<br /><br /><br /><i style="font-size:10pt">Disclaimer: This is an autogenerated email please do not reply on this email</i>';
       
        if (!empty($pdf_data["pdf_path"])) {
             // Optional attachments
            $attachments = [
                [ 
                    'path' => asset('storage/'.$pdf_data["pdf_path"]), // Replace with the actual path
                    // 'name' => ''.$pdf_data["title"].'.pdf', // Replace with the desired attachment name
                    'name' => 'Setting up in India Checklist: Ahlawat Associates.pdf', // Replace with the desired attachment name
                ],
                // Add more attachments if needed
            ]; 

            // Send the email
            sendEmail($recipient, $subject, $body, $attachments);

        } else {
            sendEmail($recipient, $subject, $body);
        }
        echo 'sent';
    }
}