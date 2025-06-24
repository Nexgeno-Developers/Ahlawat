@extends('frontend.layouts.app')

@section('page.title', 'Ahlawat Associates: Top Lawyers & Law Firms in Delhi, India')

@section('page.description', 'Ahlawat & Associates is one of the best law firms in Delhi, India. We provide legal
assistance for startups, FDI, Property law, IP, and more')

@section('page.type', 'website')

@section('page.content')

<!-----===== home content start============---->

@php
    $banner = json_decode(get_settings('Banner_1'));

    if(count($banner) != 1){
        $banner1 = array_shift($banner);
    } else {
        $banner1 = $banner[0];
    }

    function minify_html($input) {
    if(trim($input) === "") return $input;
    
    // Remove extra white spaces
    $search = [
        '/\>[^\S ]+/s',   // Strip whitespaces after tags, except space
        '/[^\S ]+\</s',   // Strip whitespaces before tags, except space
        '/(\s)+/s'        // Shorten multiple whitespace sequences
    ];

    $replace = [
        '>',
        '<',
        '\\1'
    ];

    $output = preg_replace($search, $replace, $input);

    return $output;
}

@endphp

@if(!empty($banner)) 
    <section class="banner_section">
    
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">

        <div class="carousel-item active">
        <img src="{{ asset('storage/' . $banner1) }}" class="d-block w-100" alt="..." width="1200" height="345" style="aspect-ratio: 1200 / 345;">
        </div>

        @foreach ($banner as $row)
            <div class="carousel-item">
            <img src="{{ asset('storage/' . $row) }}" class="d-block w-100" alt="..." width="1200" height="345" style="aspect-ratio: 1200 / 345;">
            </div>
        @endforeach

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
    </section>
@endif

<!------------------ Banner End -------------------------->

<!------------------ awards_section Start -------------------------->
@include('frontend.component.awards')
<!------------------ awards_section End -------------------------->

<!------------------ About Start -------------------------->

<section class="about row">
	<div class="col-lg-6 px0">
		<div class="underline_heading">
			<h4 class="main_heading">Our Journey</h4>
		</div>
		<h2 class="main_heading mb-lg-4 mb-2">{{ get_settings('oj_home') }}</h2>
		@php
            $content = get_settings('oj_content');
            echo html_entity_decode(minify_html($content));
        @endphp
	</div>

	<div class="col-md-6 px0">
        <!-- Preload and lazy load About Us image with reserved space -->
        <img rel="preload" loading="lazy" src="" data-src="/assets/frontend/images/about_us_img_new.jpg" alt="About Us" class="about_img" width="597" height="398" style="aspect-ratio: 597 / 398; height:auto!important;" />
	</div>
</section>

<!------------------ About End -------------------------->

<!-- -------------------- service counter start ---------------------- -->
@include('frontend.component.service_counter')
<!-- -------------------- service counter  end ---------------------- -->

<!------------------ practice Start -------------------------->

@include('frontend.component.award_practice_area')

<!------------------ practice End -------------------------->

<!------------------ news Start -------------------------->

<section class="news contentjstfy row">
    <div class="col-md-12 px0">
        <div class="news_box">
            <h1 class="main_heading mb-md-4 mb-2">{{ get_settings('ana_home') }}</h1>
        </div>
    </div>
    
    <div class="col-lg-6 px0">
        <div class="news_box">
            <!-- Preload and lazy load news image with reserved space -->
            <img rel="preload" loading="lazy" src="" data-src="/assets/frontend/images/india_law.jpg" alt="India Law" width="597" height="249" style="aspect-ratio: 597 / 249; height:auto!important;" />
        </div>
    </div>
    
    <div class="col-lg-6 px0">
        <div class="news_box">
            @php echo html_entity_decode(get_settings('ana_content')) @endphp
        </div>
    </div>
</section>

<!------------------ news End -------------------------->

<!------------------ Team Start -------------------------->

@include('frontend.component.team_member')

<!------------------ Team End -------------------------->

<!------------------ media Start -------------------------->

@include('frontend.component.media_coverage')

<!------------------ media End -------------------------->

<!------------------ blog Start -------------------------->

@include('frontend.component.blog')

<!------------------ blog End -------------------------->

<!----------------------- home content end --------------->
@endsection
