@extends('frontend.layouts.app')

@section('page.title', 'Privacy Policy of the Website | Ahlawat & Associates Privacy Policy')

@section('page.description', 'A&amp;A’s Privacy Policy is relevant to anyone who uses the website or provides personal data relating to a natural person who can be identified.')

@section('page.type', 'website')

@section('page.content')
    <!-- -------------------- blog banner start ---------------- -->

    <section class="blog_page_banner breadcrumes_padd">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h1 class="heading">Privacy Policy</h1>
                        <nav aria-label="breadcrumb" class="breadcrumb d-flex justify-content-center mb-0">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item home">
                                    <a href="#" data-aos="fade-up" data-aos-once="true">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Privacy Policy
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- -------------------- blog banner end   ---------------- -->
    <!-- -------------------- privacy content  start ---------------- -->

    <section class="privacy_content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 padd00mb">
                    @php echo html_entity_decode(get_settings('privacy_content')) @endphp
                </div>
            </div>
        </div>
    </section>

    <!-- -------------------- privacy content  end   ---------------- -->


    <!-- ---------- service get in touch  start ---------------------- -->

    @include('frontend.component.get_in_touch')

    <!-- -------------- service get in touch  end ---------------------- -->

    <!------------------ awards_section Start -------------------------->
    <section class="awards_section about_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="underline_heading d-flex align-items-center justify-content-center">
                        <h6 class="main_heading text-center" data-aos-once="true" data-aos="fade-up">
                            Awards
                        </h6>
                    </div>
                    <h2 class="main_heading text-center mb-4" data-aos-once="true" data-aos="fade-up">
                        Awards & Recognitions
                    </h2>

                    <div class="owl-carousel owl-theme" id="awards_slider">
                        <div class="item">
                            <div class="awards_box">
                                <h4>Top FDI Law Firm By</h4>
                                <img src="/assets/frontend/images/top_fdi.png" />
                            </div>
                        </div>

                        <div class="item">
                            <div class="awards_box">
                                <h4>India Firms to Watch by</h4>
                                <img src="/assets/frontend/images/asian_legal.png" />
                            </div>
                        </div>

                        <div class="item">
                            <div class="awards_box">
                                <h4>Recommended Firm by</h4>
                                <img src="/assets/frontend/images/benchmark.png" />
                            </div>
                        </div>

                        <div class="item">
                            <div class="awards_box">
                                <h4>M&A Law Firm by</h4>
                                <img src="/assets/frontend/images/pac.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------------ awards_section End -------------------------->

    @endsection