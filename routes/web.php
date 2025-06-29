<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\SitemapController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home START
Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/area-of-practices', [IndexController::class, 'practice_area'])->name('practicearea');
// ------------------------------ normal service --------------------------------------
Route::get('/area-of-practice/{slug}', [IndexController::class, 'practice_area_detail'])
    ->name('practicearea-detail');

$slug = DB::table('practice_areas')->pluck('slug')->toArray();
// ---------------------------- specialised-services ----------------------------------

// Add the 301 redirect route for the specific old URL
// Route::get('/specialised-services/general-counsel-services-in-house-legal-services', function () {
//     return redirect('https://outside-general-counsel.ahlawatassociates.com/', 301);
// });

Route::get('/specialised-services/{slug}', [IndexController::class, 'practice_area_detail'])
    ->where('slug', implode('|', $slug ))
    ->name('practicearea-detail-specialised');

    

// ------------------------------ page service ----------------------------------------

Route::get('/{slug}', [IndexController::class, 'practice_area_detail'])
    ->where('slug', implode('|', $slug ))
    ->name('practicearea-detail-page');
// ------------------------------------ extra paremeter service ------------------------
// ------------------------------ normal service --------------------------------------
Route::get('/area-of-practice/{slug1}', [IndexController::class, 'practice_area_detail'])
    ->where('slug1', implode('|', $slug ))
    ->name('practicearea-detail-extra'); 
//-------------------------- service --------------------------------------------

Route::get('/blog', [IndexController::class, 'blog'])->name('blog');
Route::get('/blogs-data', [IndexController::class, 'blog_data'])->name('blog-data');

// new pages 

Route::get('/the-digital-personal-data-protection-act', [IndexController::class, 'customPage1'])->name('page1');
Route::get('/ministry-of-electronics-and-information-technology-notification', [IndexController::class, 'customPage2'])->name('page2');

$postCategories = DB::table('blog_categories')->pluck('slug')->toArray();
Route::get('/{category}/{slug}', [IndexController::class, 'blog_detail'])
    ->where('category', implode('|', $postCategories))
    ->name('blog.detail');

Route::get('/news', [IndexController::class, 'news'])->name('news');
Route::get('/news-data', [IndexController::class, 'news_data'])->name('news-data');

Route::get('/deal-update', [IndexController::class, 'deal_update'])->name('deal-update');
Route::get('/deal-update-data', [IndexController::class, 'deal_update_data'])->name('deal-update-data');

Route::get('/media-coverage', [IndexController::class, 'media_coverage'])->name('media-coverage');
Route::get('/media-coverage-data', [IndexController::class, 'media_coverage_data'])->name('media-coverage-data');

Route::get('/publication', [IndexController::class, 'publication'])->name('publication');
Route::get('/publication-data', [IndexController::class, 'publication_data'])->name('publication-data');


Route::any('/team-members', [IndexController::class, 'team_members'])->name('team');
Route::get('/team-members/{slug}', [IndexController::class, 'team_detail'])->name('team.detail');
Route::get('/contact-us', [IndexController::class, 'contact_us'])->name('contact');
Route::any('/about-us', [IndexController::class, 'about_us'])->name('about');
Route::get('/faq', [IndexController::class, 'faq'])->name('faq');
Route::get('/career', [IndexController::class, 'career'])->name('career');
Route::get('/privacy-policy', [IndexController::class, 'privacy_policy'])->name('privacy-policy');
Route::get('/terms-conditions', [IndexController::class, 'terms_conditions'])->name('terms-conditions');
Route::get('/404', [IndexController::class, 'not_found'])->name('error_page');
Route::get('/thank-you', [IndexController::class, 'thank_you'])->name('thank_you');
Route::get('/cookie-policy', [IndexController::class, 'cookie_policy'])->name('cookie-policy');
Route::post('/contact-save', [IndexController::class, 'contact_save'])->name('contact.create');
Route::post('/comment-save', [IndexController::class, 'comment_save'])->name('comment.create');
Route::post('/send-pdf', [IndexController::class, 'send_pdf'])->name('send_pdf_email');

Route::get('/search', [IndexController::class, 'search'])->name('search');

Route::get('/sitemap', [SitemapController::class, 'newSitemap'])->name('sitemap');
// Home END


Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('view:clear');
    //$exitCode = Artisan::call('route:cache');
    //$exitCode = Artisan::call('key:generate');
});

Route::get('/key-generate', function () {
    Artisan::call('key:generate', ['--show' => true]);
    return 'Application key generated successfully!';
});

Route::get('/create-storage-link', function () {
    $exitCode = Artisan::call('storage:link');
    
    if ($exitCode === 0) {
        return 'Storage link created successfully.';
    } else {
        return 'Error creating storage link.';
    }
});

Route::get('/send-test-email', function () {
    Mail::raw('Test email content', function ($message) {
        $message->to('khanfaisal.makent@gmail.com')
                ->subject('Test Email');
    });

    return 'Test email sent!';
});

use App\Http\Controllers\HtmlController;

Route::get('/fix-html', [HtmlController::class, 'fixHtml']);
