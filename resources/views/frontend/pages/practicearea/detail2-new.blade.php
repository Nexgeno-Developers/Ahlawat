@extends('frontend.layouts.app')

@section('page.title', "$detail->meta_title")

@section('page.description', "$detail->meta_description")

@section('page.type', 'practice area')

@section('page.publish_time', "$detail->updated_at")

@section('page.schema')
    <!--------------------------- Page Schema --------------------------------->

    <script type="application/ld+json">
        {
          "@context": "https://schema.org/", 
          "@type": "BreadcrumbList", 
          "itemListElement": [{
            "@type": "ListItem", 
            "position": 1, 
            "name": "Home",
            "item": "{{ url(route('index')) }}"  
          },{
            "@type": "ListItem", 
            "position": 2, 
            "name": "Practice Areas",
            "item": "{{ url(route('practicearea')) }}"  
          },{
            "@type": "ListItem", 
            "position": 3, 
            "name": "@php echo str_replace('&nbsp;',' ',htmlspecialchars_decode ($detail->title)); @endphp",
            "item": "{{ url()->current() }}"  
          }]
        }
    </script>

    <!--------------------------- Page Schema end--------------------------------->
    @endsection


    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

        :root {
            --primary-color: #E3433C;
            --secondary-color: #434242;
        }


        body {
            font-family: "poppins", sans-serif;
        }


        .general-data-protection-txt h3 span:nth-child(1) {
            font-size: 40px;
            color: #434242;
        }

        .general-data-protection-txt h3 span:nth-child(2) {
            font-size: 40px;
            color: #E3433C;
        }

        .general-data-protection-txt p {
            font-size: 16px;
            font-weight: 400;
        }

        .general-data-protection-btn {
            width: 160px;
            height: 43px;
            border-radius: 30px;
            font-size: 14px;
            font-weight: 500;
            padding-top: 10px;
            color: white;
            background-color: #7F3233;
        }

        .general-data-protection-btn:hover {
            color: white !important;
            background-color: #7F3233 !important;
        }


        @media (max-width: 767px) {
            .general-data-protection-btn {
                width: calc(160px * 0.7);
                height: calc(43px * 0.7);
                font-size: calc(14px * 0.7);
                padding-top: calc(10px * 0.7);
            }

            .general-data-protection-txt h3 span:nth-child(1),
            .general-data-protection-txt h3 span:nth-child(2) {
                font-size: calc(40px * 0.6);
            }

            .general-data-protection-txt p {
                font-size: calc(16px * 0.8);
            }

        }

        .sec-2-intro h4 {
            font-size: 24px;
        }

        .sec-2-intro p {
            font-size: 14px;
            font-weight: 400;
        }

        .sec-2-info {
            height: 232px;
            border-radius: 17px;
            border-top: 2px solid #E3433C;
        }

        .sec-2-info h5 {
            font-size: 15px;
        }

        .sec-2-info ul {
            padding-left: 20px;
            font-size: 12px;
            font-weight: 400;
        }


        .sectors-impact-act {
            box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.09);
            border-radius: 20px 20px 0 0;
            background-color: #7F3233;
            padding: 15px 10px 10px 25px;
        }

        .sectors-impact-act-dc {
            box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.09);
            border-radius: 20px 20px 0 0;
            background-color: #434242;
            padding: 15px 10px 10px 25px;
        }

        .sectors-impact-act-top i img {
            width: 26px;
            height: auto;
        }

        .sectors-impact-act-1 {
            box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.09);
            border-radius: 0 0 20px 20px;
            padding: 15px 10px 10px 25px;
        }

        .sectors-impact-act-top i {
            width: 56.94px;
            height: 56.94px;
            background-color: #FFFFFF1A;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .sectors-impact-act-top h3 {
            font-size: 20px;
        }

        .sectors-impact-act-1 p {
            font-size: 11.50px;
            font-weight: 400;
        }

        .sectors-impact-act-1 h4 {
            font-size: 14px;
            font-weight: 500;
            padding-top: 15px;
        }

        .sectors-impact-act-1 ul {
            padding-left: 20px;
            font-size: 12px;
            font-weight: 400;
            line-height: 1.9;
        }

        .assist-dpdp-act {
            height: 255px;
            border-radius: 18px;
            border-top: 2px solid #E3433C;
            border-bottom: 2px solid rgba(0, 0, 0, 0.25);
        }

        .assist-dpdp-act i img {
            width: 28px;
            height: auto;
        }

        .assist-dpdp-act i {
            width: 56.94px;
            height: 56.94px;
            background-color: rgba(227, 67, 60, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .assist-dpdp-act h5 {
            font-size: 14px;
            font-weight: 600;
        }

        .assist-dpdp-act p {
            font-size: 10px;
            font-weight: 400;
        }

        .assist-dpdp-act-btn {
            background-color: #7F3233;
            padding: 10px 20px;
            border-radius: 30px;
            font-size: 10px;
        }

        .assist-dpdp-act-btn:hover {
            color: white !important;
            background-color: #7F3233 !important;
        }

        .assist-dpdp-act a img {
            width: 5px;
        }


        .timeline-topper-contnent-dv h4 {
            font-size: 24px;
            font-weight: 600;
        }

        .timeline-topper-contnent-dv h4 span:nth-child(1) {
            color: #434242;
        }

        .timeline-topper-contnent-dv h4 span:nth-child(2) {
            color: #E3433C;
        }

        .timeline-topper-contnent-dv p {
            font-size: 13px;
            font-weight: 400;
        }


        .step-number {
            background-color: #7F3233;
            color: white;
            border-radius: 50%;
            /* aspect-ratio: 1 /1; */
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 25px;
            padding: 30px;
        }

        .step-number-dv h5 span img {
            width: 60px;
        }

        @media (max-width: 991px) {
            .step-number-dv h5 span img {
                display: none
            }
        }

        @media (max-width: 425px) {
            .step-number {
                width: calc(50px * 0.7);
                height: calc(50px * 0.7);
                font-size: calc(25px * 0.7);
                padding: calc(30px * 0.7);
                border-radius: 50%;
                aspect-ratio: 1 /1;
                ;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .step-text-div {
                box-shadow: 0 0 1px 1px rgba(0, 0, 0, 0.05);
            }

        }

        .step-text-div {
            box-shadow: 0 0 4px 4px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
        }

        .step-text-title {
            font-size: 16px;
            font-weight: 600;
        }

        .step-text-para {
            font-size: 12px;
            font-weight: 400;
        }

        @media (min-width: 992px) {
            .timeline-list-contnent-dv-num-lft {
                left: 30%;
            }
        }

        .card-dpda-2025-penalties {
            box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.09);
            border-radius: 20px 20px 0 0;
        }

        .card-dpda-2025-penalties-1 {
            box-shadow: 0 0 4px 4px rgba(0, 0, 0, 0.09);
            border-radius: 0 0 20px 20px;
        }

        .card-dpda-2025-penalties {
            background-color: #7F3233;
        }

        .card-dpda-2025-penalties-top {
            font-size: 16px;
            font-weight: 600;
        }

        .card-dpda-2025-penalties-1 h5 {
            font-size: 22px;
            font-weight: 600;
            color: #E3433C;
        }

        .card-dpda-2025-penalties-1 p {
            font-size: 12px;
            font-weight: 400;
        }

        .Ahlawat-case-studies-top-content h3 span {
            font-size: 24px;
            font-weight: 600;
        }

        .Ahlawat-case-studies-top-content h3 span:nth-child(1) {
            color: #434242;
        }

        .Ahlawat-case-studies-top-content h3 span:nth-child(2) {
            color: #E3433C;
        }

        .Ahlawat-case-studies-top-content p {
            font-size: 14px;
            font-weight: 400;
            color: #434242;
        }

        .Ahlawat-case-studies-img-1 {
            position: relative;
            background:
                linear-gradient(180deg, rgba(127, 50, 51, 0.9) 0%, rgba(127, 50, 51, 0.9) 100%),
                url(../assets/frontend/practicarea/Ahlawat-case-studies-1.webp) no-repeat center center;
            background-size: cover;
            /* height: 309px; */
        }

        .bdr-main-coro {
            border-radius: 20px;
            box-shadow: 0 0 4px 4px rgba(0, 0, 0, 0.1);
        }

        .Ahlawat-case-studies-img-1::before {
            content: '';
            /* position: absolute; */
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 1;
        }

        .Ahlawat-case-studies-img-txt h5 span {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 10px 15px;
            border-radius: 5px;
            font-size: 12px;
            font-weight: 500;
        }

        .Ahlawat-case-studies-img-txt h3 {
            font-size: 16px;
            font-weight: 600;
        }

        .Ahlawat-case-studies-img-txt p {
            font-size: 12px;
            font-weight: 400;
        }

        .Ahlawat-case-studies-body h5 {
            font-size: 16px;
            font-weight: 500;
            color: #7f3233;
        }

        .Ahlawat-case-studies-body p {
            font-size: 12px;
            font-weight: 400;
        }

        .Ahlawat-case-studies-body ul li {
            font-size: 12px;
            font-weight: 400;
            padding-bottom: 5px;
        }

        .Ahlawat-case-studies-body ul {
            list-style-image: url('../assets/frontend/practicarea/li-icon.svg');
            padding-left: 20px;
        }

        @media (max-width: 767px) {
            .Ahlawat-case-studies-img-1 {
                border-radius: 20px 20px 0 0;
            }

        }

        @media (min-width: 768px) {
            .Ahlawat-case-studies-img-1 {
                border-radius: 20px 0px 0 20px;
            }

        }

        .carousel-bottom-controls .btn {
            aspect-ratio: 1 /1;
            border-radius: 50%;
            color: #E3433C;
            background-color: rgba(227, 67, 60, 0.1);
            border: 1.7px solid #E3433C;
        }

        .carousel-bottom-controls .btn i {
            font-size: 1.1rem;
            vertical-align: middle;
            object-fit: cover;
            display: flex;
            align-items: center;
        }


        .service-detail-overlay-1 {
            position: relative;
            background:
                linear-gradient(180deg, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0.9) 100%),
                url(../assets/frontend/practicarea/service-detail-overlay-1.webp) no-repeat center center;
            background-size: cover;
        }

        .service-detail-overlay-1::before {
            content: '';
            /* position: absolute; */
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 1;
        }

        .service-detail-overlay-card {
            height: 272px;
            background-color: rgba(255, 255, 255, 0.1);
            padding: 15px;
            border-radius: 20px;
            border: 0.5px solid #E3433C;
        }

        .service-detail-overlay-card-body div h5 {
            font-size: 16px;
            font-weight: 600;
        }

        .service-detail-overlay-card-body div p {
            font-size: 12px;
            font-weight: 400;
        }

        .service-icon-bg {
            background-color: rgba(227, 67, 60, 0.1);
            border-radius: 50%;
        }

        .service-detail-overlay-top-contnt h5 span {
            font-size: 24px;
            font-weight: 600;
        }

        .service-detail-overlay-top-contnt h5 span:nth-child(1) {
            color: #ffffff;
        }

        .service-detail-overlay-top-contnt h5 span:nth-child(2) {
            color: #E3433C;
        }

        .service-detail-overlay-top-contnt p {
            font-size: 14px;
            font-weight: 400;
        }
    </style>

    @section('page.content')


    <!-------===========practicearea start===================------------>
    <!-- -------------------- service_banner start ---------------------- -->

    <section class="service_banner" style="background-image: url({{ asset('storage/' . $detail->breadcrumb_image) }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12 px0">
                    <div class="text-center">
                        <h1 class="heading">{{ $detail->breadcrumb_title }}</h1>
                        <h2 class="desc">{{ $detail->breadcrumb_subtitle }}</h2>
                        <nav aria-label="breadcrumb" class="breadcrumb d-flex justify-content-center mb-0">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item home"><a href="{{ url(route('index')) }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="{{ url(route('practicearea')) }}">Our Expertise</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    {{ $detail->title }}
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- -------------------- service_banner  end ---------------------- -->

    <!-- -------------------- service Title Desc start ---------------------- -->


    {{--
    -----------------------------------------------------------------------------------------------------------------------------------------
    --}}


    <section class="pt-md-5 pt-3">
        <div class="container">
            <div class="row g-3">
                <div class="col-lg-6 col-md-12 d-flex justify-content-center align-items-center">
                    <div class="general-data-protection-txt">
                        <h3 class="fw-semibold pb-md-3 pb-2 "><span>General Data Protection Compliance </span>
                            <span>under DPDP Act</span>
                        </h3>
                        <p class="pb-1">Comply with the Digital Personal Data Protection Act (DPDPA) 2025 and safeguard
                            yourself from hefty penalties, that might be imposed in case you are non-compliant with
                            India’s DPDP Act.</p>
                        <a href="#" class="btn general-data-protection-btn">Book Now</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 d-flex justify-content-center align-items-center">
                    <div class="general-data-protection-img">
                        <img src="../assets/frontend/practicarea/general-data-protection-img.webp" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="pt-md-3 pt-2">
        <div class="container">
            <div class="sec-2-intro text-center">
                <h4 class="fw-semibold pb-2">Introduction</h4>
                <p class="pb-2">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard</p>
            </div>
            <div class="row g-3">

                <!-- card-1 -->
                <div class="col-lg-4 col-md-6 d-flex justify-content-center align-items-center">
                    <div class="sec-2-info p-4 h-100">
                        <h5 class="fw-semibold">1. What is the need of the DPDPA?</h5>
                        <ul>
                            <li>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                industry's standard dummy text ever since the</li>
                            <li>is simply dummy text of the printing and typesetting industry.he</li>
                            <li>is simply dummy text of the printing and</li>
                            <li>is simply dummy text of the printing and typesetting industry.he</li>
                        </ul>
                    </div>
                </div>

                <!-- card-2 -->
                <div class="col-lg-4 col-md-6 d-flex justify-content-center align-items-center">
                    <div class="sec-2-info p-4 h-100">
                        <h5 class="fw-semibold">2. Wha are the important regulations to consider?</h5>
                        <ul>
                            <li>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                industry's standard dummy text ever since the</li>
                            <li>is simply dummy text of the printing and typesetting industry.he</li>
                            <li>is simply dummy text of the printing and</li>
                            <li>is simply dummy text of the printing and typesetting industry.he</li>
                        </ul>
                    </div>
                </div>

                <!-- card-3 -->
                <div class="col-lg-4 col-md-6 d-flex justify-content-center align-items-center">
                    <div class="sec-2-info p-4 h-100">
                        <h5 class="fw-semibold">3. How is it different from GDPR?</h5>
                        <ul>
                            <li>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                industry's standard dummy text ever since the</li>
                            <li>is simply dummy text of the printing and typesetting industry.he</li>
                            <li>is simply dummy text of the printing and</li>
                            <li>is simply dummy text of the printing and typesetting industry.he</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-md-3 pt-2">
        <div class="container">
            <div class="timeline-topper-contnent-dv text-center">
                <h4 class="mb-md-3 mb-2"><span>Sectors Impacted by the </span><span>DPDP Act</span></h4>
                <p class="pb-2">Industries Most Affected by the DPDP Act Rollout</p>
            </div>
            <div class="row g-3">

                <!-- card-1 -->
                <div class="col-lg-6 col-md-6 mb-3">
                    <div class="sectors-impact-act">
                        <div class="sectors-impact-act-top d-flex align-items-center">
                            <i><img src="../assets/frontend/practicarea/sectors-ecommerce-icon.svg" alt=""></i>&nbsp;&nbsp;
                            <h3 class="text-light fw-semibold mt-2">Ecommerce</h3>
                        </div>
                    </div>
                    <div class="sectors-impact-act-1">
                        <p class="py-2">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the is simply dummy text of the printing
                            and typesetting industry. Lorem Ipsum has been the industry's.</p>
                        <hr>
                        <h4>Key Requirements:</h4>
                        <ul>
                            <li>is simply dummy text of the printing and typesetting </li>
                            <li>is simply dummy text of the printing and typesetting </li>
                            <li>is simply dummy text of the printing and typesetting </li>
                            <li>is simply dummy text of the printing and typesetting </li>
                        </ul>
                    </div>
                </div>

                <!-- card2 -->
                <div class="col-lg-6 col-md-6 mb-3">
                    <div class="sectors-impact-act-dc">
                        <div class="sectors-impact-act-top d-flex align-items-center">
                            <i><img src="../assets/frontend/practicarea/sectors-ites-icon.svg" alt=""></i>&nbsp;&nbsp;
                            <h3 class="text-light fw-semibold mt-2">ITes</h3>
                        </div>
                    </div>
                    <div class="sectors-impact-act-1">
                        <p class="py-2">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the is simply dummy text of the printing
                            and typesetting industry. Lorem Ipsum has been the industry's.</p>
                        <hr>
                        <h4>Key Requirements:</h4>
                        <ul>
                            <li>is simply dummy text of the printing and typesetting </li>
                            <li>is simply dummy text of the printing and typesetting </li>
                            <li>is simply dummy text of the printing and typesetting </li>
                            <li>is simply dummy text of the printing and typesetting </li>
                        </ul>
                    </div>
                </div>

                <!-- card-3 -->
                <div class="col-lg-6 col-md-6 mb-3">
                    <div class="sectors-impact-act">
                        <div class="sectors-impact-act-top d-flex align-items-center">
                            <i><img src="../assets/frontend/practicarea/sectors-it-icon.svg" alt=""></i>&nbsp;&nbsp;
                            <h3 class="text-light fw-semibold mt-2">IT</h3>
                        </div>
                    </div>
                    <div class="sectors-impact-act-1">
                        <p class="py-2">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the is simply dummy text of the printing
                            and typesetting industry. Lorem Ipsum has been the industry's.</p>
                        <hr>
                        <h4>Key Requirements:</h4>
                        <ul>
                            <li>is simply dummy text of the printing and typesetting </li>
                            <li>is simply dummy text of the printing and typesetting </li>
                            <li>is simply dummy text of the printing and typesetting </li>
                            <li>is simply dummy text of the printing and typesetting </li>
                        </ul>
                    </div>
                </div>

                <!-- card-4 -->
                <div class="col-lg-6 col-md-6 mb-3">
                    <div class="sectors-impact-act-dc">
                        <div class="sectors-impact-act-top d-flex align-items-center">
                            <i><img src="../assets/frontend/practicarea/sectors-ecommerce-icon-1.svg"
                                    alt=""></i>&nbsp;&nbsp;
                            <h3 class="text-light fw-semibold mt-2">Ecommerce</h3>
                        </div>
                    </div>
                    <div class="sectors-impact-act-1">
                        <p class="py-2">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the is simply dummy text of the printing
                            and typesetting industry. Lorem Ipsum has been the industry's.</p>
                        <hr>
                        <h4>Key Requirements:</h4>
                        <ul>
                            <li>is simply dummy text of the printing and typesetting </li>
                            <li>is simply dummy text of the printing and typesetting </li>
                            <li>is simply dummy text of the printing and typesetting </li>
                            <li>is simply dummy text of the printing and typesetting </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="pt-md-3 pt-2">
        <div class="container">
            <div class="timeline-topper-contnent-dv text-center">
                <h4 class="mb-md-3 mb-2"><span>How we can Assist you in getting </span><span>comply with DPDP
                        Act.</span></h4>
                <p class="pb-2">Industries Most Affected by the DPDP Act Rollout</p>
            </div>
            <div class="row">

                <!-- card-1 -->
                <div class="col-lg-6 col-md-6 d-flex justify-content-center align-items-center mb-3">
                    <div class="assist-dpdp-act p-4 h-100">
                        <i><img src="../assets/frontend/practicarea/notice-1.svg" alt=""></i>
                        <h5 class="pt-3">Drafting of notice to display on platform to seek consent from user.</h5>
                        <p class="pt-1"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries, but also the leap into electronic typesetting,</p>
                        <a href="#" class="btn text-light assist-dpdp-act-btn">
                            Learn More <img src="../assets/frontend/practicarea/right-mark-icon.svg" alt="">
                        </a>
                    </div>
                </div>

                <!-- card-2 -->
                <div class="col-lg-6 col-md-6 d-flex justify-content-center align-items-center mb-3">
                    <div class="assist-dpdp-act p-4 h-100">
                        <i><img src="../assets/frontend/practicarea/notice-2.svg" alt=""></i>
                        <h5 class="pt-3">Drafting of agreement to be executed between consent manager and the company
                            itself</h5>
                        <p class="pt-1"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries, but also the leap into electronic typesetting,</p>
                        <a href="#" class="btn text-light assist-dpdp-act-btn">
                            Learn More <img src="../assets/frontend/practicarea/right-mark-icon.svg" alt="">
                        </a>
                    </div>
                </div>

                <!-- card-3 -->
                <div class="col-lg-6 col-md-6 d-flex justify-content-center align-items-center mb-3">
                    <div class="assist-dpdp-act p-4 h-100">
                        <i><img src="../assets/frontend/practicarea/notice-3.svg" alt=""></i>
                        <h5 class="pt-3">Drafting an application to inform government regarding the appointment of
                            Consent manager</h5>
                        <p class="pt-1"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries, but also the leap into electronic typesetting,</p>
                        <a href="#" class="btn text-light assist-dpdp-act-btn">
                            Learn More <img src="../assets/frontend/practicarea/right-mark-icon.svg" alt="">
                        </a>
                    </div>
                </div>

                <!-- card-4 -->
                <div class="col-lg-6 col-md-6 d-flex justify-content-center align-items-center mb-3">
                    <div class="assist-dpdp-act p-4 h-100">
                        <i><img src="../assets/frontend/practicarea/notice-4.svg" alt=""></i>
                        <h5 class="pt-3">Verifiable parental consent for processing of personal data of children</h5>
                        <p class="pt-1"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries, but also the leap into electronic typesetting,</p>
                        <a href="#" class="btn text-light assist-dpdp-act-btn">
                            Learn More <img src="../assets/frontend/practicarea/right-mark-icon.svg" alt="">
                        </a>
                    </div>
                </div>



            </div>
        </div>
    </section>



    <section class="pt-md-3 pt-2">
        <div class="container">
            <div class="timeline-topper-contnent-dv text-center">
                <h4 class="mb-md-3 mb-2"><span>Our Proven </span><span>Compliance Process</span></h4>
                <p>We follow a structured, phased approach to help organizations achieve and maintain DPDP Act
                    compliance efficiently and effectively.</p>
            </div>
            <!-- card-1 -->
            <div class="row g-3 d-flex align-items-center mt-4">
                <div class="col-lg-6 col-md-2 col-2 position-relative timeline-list-contnent-dv-num-lft">
                    <div class="step-number-dv">
                        <h5 class="d-flex align-items-center"><span class="step-number">01</span> <span
                                class="d-none d-md-inline"><img src="../assets/frontend/practicarea/arrow-right.svg" alt=""
                                    style="width: 60px;"></span></h5>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10 col-10 position-relative">
                    <div class="step-text-div p-4">
                        <h5 class="step-text-title">Initial Assessment</h5>
                        <p class="step-text-para">Comprehensive evaluation of your current data processing activities,
                            systems, and compliance status to identify gaps and priorities.</p>
                    </div>
                </div>
            </div>

            <!-- card-2 -->
            <div class="row g-3 d-flex align-items-center mt-4">
                <div class="col-lg-6 col-md-10 col-10 position-relative order-2 order-lg-1">
                    <div class="step-text-div p-4">
                        <h5 class="step-text-title">Strategy Development</h5>
                        <p class="step-text-para">Comprehensive evaluation of your current data processing activities,
                            systems, and compliance status to identify gaps and priorities.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-2 col-2 position-relative timeline-list-contnent-dv-num-rgt order-1 order-lg-2">
                    <div class="step-number-dv">
                        <h5 class="d-flex align-items-center"><span class="d-none d-lg-inline"><img
                                    src="../assets/frontend/practicarea/arrow-left.svg" alt=""></span> <span
                                class="step-number">02</span> <span class="d-inline d-lg-none d-none d-md-inline"> <img
                                    src="../assets/frontend/practicarea/arrow-right.svg" alt=""></span> </h5>
                    </div>
                </div>
            </div>

            <!-- card-3 -->
            <div class="row g-3 d-flex align-items-center mt-4">
                <div class="col-lg-6 col-md-2 col-2 position-relative timeline-list-contnent-dv-num-lft">
                    <div class="step-number-dv">
                        <h5 class="d-flex align-items-center"><span class="step-number">03</span> <span
                                class="d-none d-md-inline"><img src="../assets/frontend/practicarea/arrow-right.svg" alt=""
                                    style="width: 60px;"></span></h5>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10 col-10 position-relative">
                    <div class="step-text-div p-4">
                        <h5 class="step-text-title">Policy & Documentation</h5>
                        <p class="step-text-para">Comprehensive evaluation of your current data processing activities,
                            systems, and compliance status to identify gaps and priorities.</p>
                    </div>
                </div>
            </div>

            <!-- card-4 -->
            <div class="row g-3 d-flex align-items-center mt-4">
                <div class="col-lg-6 col-md-10 col-10 position-relative order-2 order-lg-1">
                    <div class="step-text-div p-4">
                        <h5 class="step-text-title">Implementation</h5>
                        <p class="step-text-para">Comprehensive evaluation of your current data processing activities,
                            systems, and compliance status to identify gaps and priorities.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-2 col-2 position-relative timeline-list-contnent-dv-num-rgt order-1 order-lg-2">
                    <div class="step-number-dv">
                        <h5 class="d-flex align-items-center"><span class="d-none d-lg-inline"><img
                                    src="../assets/frontend/practicarea/arrow-left.svg" alt=""></span> <span
                                class="step-number">04</span> <span class="d-inline d-lg-none d-none d-md-inline"> <img
                                    src="../assets/frontend/practicarea/arrow-right.svg" alt=""></span> </h5>
                    </div>
                </div>
            </div>

            <!-- card-5 -->
            <div class="row g-3 d-flex align-items-center mt-md-2 mt-2">
                <div class="col-lg-6 col-md-2 col-2 position-relative timeline-list-contnent-dv-num-lft">
                    <div class="step-number-dv">
                        <h5 class="d-flex align-items-center"><span class="step-number">05</span> <span
                                class="d-none d-md-inline"><img src="../assets/frontend/practicarea/arrow-right.svg" alt=""
                                    style="width: 60px;"></span></h5>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10 col-10 position-relative">
                    <div class="step-text-div p-md-4 p-4">
                        <h5 class="step-text-title">Training & Awareness</h5>
                        <p class="step-text-para">Comprehensive evaluation of your current data processing activities,
                            systems, and compliance status to identify gaps and priorities.</p>
                    </div>
                </div>
            </div>

            <!-- card-6 -->
            <div class="row g-3 d-flex align-items-center mt-md-2 mt-2">
                <div class="col-lg-6 col-md-10 col-10 position-relative order-2 order-lg-1">
                    <div class="step-text-div p-md-4 p-4">
                        <h5 class="step-text-title">Continuous Monitoring</h5>
                        <p class="step-text-para">Comprehensive evaluation of your current data processing activities,
                            systems, and compliance status to identify gaps and priorities.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-2 col-2 position-relative timeline-list-contnent-dv-num-rgt order-1 order-lg-2">
                    <div class="step-number-dv">
                        <h5 class="d-flex align-items-center"><span class="d-none d-lg-inline"><img
                                    src="../assets/frontend/practicarea/arrow-left.svg" alt=""></span> <span
                                class="step-number">06</span> <span class="d-inline d-lg-none d-none d-md-inline"> <img
                                    src="../assets/frontend/practicarea/arrow-right.svg" alt=""></span> </h5>
                    </div>
                </div>
            </div>

            <div class="timeline-topper-contnent-dv text-center mt-md-5 mt-4">
                <p>We follow a structured, phased approach to help organizations achieve and maintain DPDP Act
                    compliance efficiently and effectively.
                </p>
            </div>
        </div>
    </section>

    <section class="pt-md-3 pt-2">
        <div class="container">
            <div class="timeline-topper-contnent-dv text-center pb-3">
                <h4 class="pb-2"><span>DPDPA 2025 Penalties for </span><span>Different Stakeholders</span></h4>
                <p> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                    standard dummy text ever since the</p>
            </div>
            <div class="row">

                <!-- card-1 -->
                <div class="col-lg-6 col-md-6 position-relative mb-4">
                    <div class="card-dpda-2025-penalties px-4 pt-3 pb-2">
                        <div class="card-dpda-2025-penalties-top">
                            <h5 class="text-light">Failure to implement reasonable security safeguards</h5>
                        </div>
                    </div>
                    <div class="card-dpda-2025-penalties-1 px-4 pt-4 pb-1">
                        <h5 class="pt-2 pb-2">Up To  ₹250 Crore </h5>
                        <p>Organizations failing to implement appropriate technical and organizational measures to
                            protect personal data.</p>
                    </div>
                </div>

                <!-- card-2 -->
                <div class="col-lg-6 col-md-6 position-relative mb-4">
                    <div class="card-dpda-2025-penalties px-4 pt-3 pb-2">
                        <div class="card-dpda-2025-penalties-top">
                            <h5 class="text-light">Non-compliance with data breach notification...</h5>
                        </div>
                    </div>
                    <div class="card-dpda-2025-penalties-1 px-4 pt-4 pb-1">
                        <h5 class="pt-2 pb-2">Up to ₹200 crore </h5>
                        <p>Organizations failing to implement appropriate technical and organizational measures to
                            protect personal data.</p>
                    </div>
                </div>

                <!-- card-3 -->
                <div class="col-lg-6 col-md-6 position-relative mb-4">
                    <div class="card-dpda-2025-penalties px-4 pt-3 pb-2">
                        <div class="card-dpda-2025-penalties-top">
                            <h5 class="text-light">Processing children's data without appropriate...</h5>
                        </div>
                    </div>
                    <div class="card-dpda-2025-penalties-1 px-4 pt-4 pb-1">
                        <h5 class="pt-2 pb-2">Up to ₹200 crore </h5>
                        <p>Organizations failing to implement appropriate technical and organizational measures to
                            protect personal data.</p>
                    </div>
                </div>

                <!-- card-4 -->
                <div class="col-lg-6 col-md-6 position-relative mb-4">
                    <div class="card-dpda-2025-penalties px-4 pt-3 pb-2">
                        <div class="card-dpda-2025-penalties-top">
                            <h5 class="text-light">Failure to honor data principal rights</h5>
                        </div>
                    </div>
                    <div class="card-dpda-2025-penalties-1 px-4 pt-4 pb-1">
                        <h5 class="pt-2 pb-2">Up to ₹150 crore </h5>
                        <p>Organizations failing to implement appropriate technical and organizational measures to
                            protect personal data.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="pt-md-3 pt-2">
        <div class="container">
            <div class="row">
                <div class="Ahlawat-case-studies-top-content text-center">
                    <h3 class="pb-1"><span>Case </span><span>studies</span></h3>
                    <p> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the</p>
                </div>
                <div class="package-carousel-container pt-md-3 pt-2">
                    <div id="packageCarousel" class="carousel slide">
                        <div class="carousel-inner">
                            <!-- Each slide will contain 3 cards (for lg screens) -->
                            <div class="carousel-item active">
                                <div class="row">

                                    <!-- main-card-1 -->
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="card mb-3 bdr-main-coro">
                                            <div class="row g-0">
                                                <div class="col-md-4 Ahlawat-case-studies-img-1">
                                                    <!-- img-placed-here -->
                                                    <div class="Ahlawat-case-studies-img-txt p-4 text-light">
                                                        <h5 class="mb-4"><span>IT Services</span></h5>
                                                        <h3 class="mb-3">Enterprise-Wide DPDP Compliance Program</h3>
                                                        <p>Case Study #1</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 d-flex align-items-center">
                                                    <div class="card-body Ahlawat-case-studies-body">
                                                        <h5 class="card-title">Challenge</h5>
                                                        <p class="card-text">A leading IT services company with
                                                            operations across India needed to align its data processing
                                                            activities with DPDP requirements while maintaining global
                                                            compliance standards.</p>
                                                        <h5 class="card-title">Solution</h5>
                                                        <p class="card-text">A leading IT services company with
                                                            operations across India needed to align its data processing
                                                            activities with DPDP requirements while maintaining global
                                                            compliance standards.</p>
                                                        <h5 class="card-title">Results</h5>
                                                        <ul>
                                                            <li>Achieved full DPDP compliance while maintaining
                                                                alignment with global standards</li>
                                                            <li>90% reduction in manual privacy management processes
                                                                through automation</li>
                                                            <li>Enhanced ability to demonstrate compliance to clients
                                                                and regulators</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="row">

                                    <!-- carousel-card-1 -->
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="card mb-3 bdr-main-coro">
                                            <div class="row g-0">
                                                <div class="col-md-4 Ahlawat-case-studies-img-1">
                                                    <!-- img-placed-here -->
                                                    <div class="Ahlawat-case-studies-img-txt p-4 text-light">
                                                        <h5 class="mb-4"><span>IT Services</span></h5>
                                                        <h3 class="mb-3">Enterprise-Wide DPDP Compliance Program</h3>
                                                        <p>Case Study #1</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 d-flex align-items-center">
                                                    <div class="card-body Ahlawat-case-studies-body">
                                                        <h5 class="card-title">Challenge</h5>
                                                        <p class="card-text">A leading IT services company with
                                                            operations across India needed to align its data processing
                                                            activities with DPDP requirements while maintaining global
                                                            compliance standards.</p>
                                                        <h5 class="card-title">Solution</h5>
                                                        <p class="card-text">A leading IT services company with
                                                            operations across India needed to align its data processing
                                                            activities with DPDP requirements while maintaining global
                                                            compliance standards.</p>
                                                        <h5 class="card-title">Results</h5>
                                                        <ul>
                                                            <li>Achieved full DPDP compliance while maintaining
                                                                alignment with global standards</li>
                                                            <li>90% reduction in manual privacy management processes
                                                                through automation</li>
                                                            <li>Enhanced ability to demonstrate compliance to clients
                                                                and regulators</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Custom carousel controls at bottom -->
                    <div class="carousel-bottom-controls text-center mb-4">
                        <button class="btn  me-2" type="button" data-bs-target="#packageCarousel" data-bs-slide="prev">
                            <i class="bi bi-chevron-left"></i></button>
                        <button class="btn " type="button" data-bs-target="#packageCarousel" data-bs-slide="next"><i
                                class="bi bi-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-md-0 pt-0">
        <div class="service-detail-overlay-1 py-md-5 py-4">
            <div class="container">
                <div class="service-detail-overlay-top-contnt text-center mb-5">
                    <h5><span>Why </span><span>Choose Us</span></h5>
                    <p class="text-light"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        has been the industry's standard </p>
                </div>
                <div class="row">

                    <!-- card-1 -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="service-detail-overlay-card pt-4 h-100">
                            <div
                                class="service-detail-overlay-card-body d-flex flex-column align-items-center text-center text-light">
                                <figure class="service-icon-bg"><img
                                        src="../assets/frontend/practicarea/service-page-star-icon.svg" alt=""
                                        class=" p-3 rounded-5" /></figure>
                                <div>
                                    <h5 class=" mb-3">
                                        Industry Expertise
                                    </h5>
                                    <p class=" mb-3">
                                        Our team includes specialists with deep knowledge of data protection
                                        requirements across various industries, enabling us to provide sector-specific
                                        guidance.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- card-2 -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="service-detail-overlay-card pt-4 h-100">
                            <div
                                class="service-detail-overlay-card-body d-flex flex-column align-items-center text-center text-light">
                                <figure class="service-icon-bg"><img
                                        src="../assets/frontend/practicarea/service-page-badge-icon.svg" alt=""
                                        class=" p-3 rounded-5" /></figure>
                                <div>

                                    <h5 class=" mb-3">
                                        Proven Results
                                    </h5>
                                    <p class=" mb-3">
                                        We have a track record of successfully implementing DPDP compliance programs for
                                        organizations of different sizes and complexity levels.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- card-3 -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="service-detail-overlay-card pt-4 h-100">
                            <div
                                class="service-detail-overlay-card-body d-flex flex-column align-items-center text-center text-light">
                                <figure class="service-icon-bg"><img
                                        src="../assets/frontend/practicarea/service-page-deal-icon.svg" alt=""
                                        class=" p-3 rounded-5" /></figure>
                                <div>
                                    <h5 class=" mb-3">
                                        Client-Centric Approach
                                    </h5>
                                    <p class=" mb-3">
                                        We tailor our services to your specific business needs, creating practical
                                        solutions that minimize operational disruption.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- card-4 -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="service-detail-overlay-card pt-4 h-100">
                            <div
                                class="service-detail-overlay-card-body d-flex flex-column align-items-center text-center text-light">
                                <figure class="service-icon-bg"><img
                                        src="../assets/frontend/practicarea/service-page-user-icon.svg" alt=""
                                        class=" p-3 rounded-5" /></figure>
                                <div>
                                    <h5 class=" mb-3">
                                        Certified Professionals
                                    </h5>
                                    <p class=" mb-3">
                                        Our team includes certified data protection officers, legal experts, and
                                        chartered accountants with specialized privacy qualifications.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>


    {{--
    -----------------------------------------------------------------------------------------------------------------------------------------
    --}}

    {{-- <section class="service_title_desc">
        <div class="container">
            <div class="row">
                <div class="col-md-12 px0">
                    @php echo html_entity_decode($detail->content) @endphp
                </div>
            </div>
        </div>
    </section>

    <!-- --------------------  service Title Desc  end ---------------------- -->
    <!-- -------------------- service image start ---------------------- -->

    @if(!empty($detail->section_image))

    <section class="service_img" data-aos-once="true" data-aos="fade-up">
        @if(!empty($detail->section_link))
        <a href="{{ $detail->section_link }}" target="_blank">
            <img rel="preload" src="{{ asset('storage/' . $detail->section_image) }}"
                alt="{{ $detail->alt_section_image }}">
        </a>
        @else
        <img rel="preload" src="{{ asset('storage/' . $detail->section_image) }}" alt="{{ $detail->alt_section_image }}">
        @endif
    </section>

    @endif

    <!-- -------------------- service image  end ---------------------- -->
    <!-- -------------------- service counter start ---------------------- -->

    @include('frontend.component.service_counter')

    <!-- -------------------- service counter  end ---------------------- -->

    <!-- -------------------- service why choose start ---------------------- -->

    {{--@if(count($child_detail) > 0 || !empty($detail->why_choose_us) || !empty(json_decode($detail->faq, true))) --}}
    @if(count($child_detail) > 0 || empty($detail->why_choose_us) || !empty(json_decode($detail->faq, true)))
        <section class="service_why_choose">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 px0">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            @php $a = 0; @endphp

                            @if(count($child_detail) > 0)
                                @php $a = 1; @endphp

                                <li class="nav-item" role="presentation" data-aos-once="true" data-aos="fade-up">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                        aria-selected="true">
                                        Our Focus Areas
                                    </button>
                                </li>

                            @endif

                            @if(!empty($detail->why_choose_us))

                                <li class="nav-item" role="presentation" data-aos-once="true" data-aos="fade-up">
                                    <button class="nav-link @if($a != 1) active @endif" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                        aria-selected="@if($a != 1) true @else false @endif">
                                        Why Choose Us
                                    </button>
                                </li>
                                @php $a = 1; @endphp

                            @else

                                <li class="nav-item" role="presentation" data-aos-once="true" data-aos="fade-up">
                                    <button class="nav-link @if($a != 1) active @endif" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                        aria-selected="@if($a != 1) true @else false @endif">
                                        Why Choose Us
                                    </button>
                                </li>
                                @php $a = 1; @endphp

                            @endif

                            @if(!empty(json_decode($detail->faq, true)))

                                <li class="nav-item" role="presentation" data-aos-once="true" data-aos="fade-up">
                                    <button class="nav-link  @if($a != 1) active @endif" id="pills-contact-tab"
                                        data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab"
                                        aria-controls="pills-contact" aria-selected="@if($a != 1) true @else false @endif">
                                        FAQ
                                    </button>
                                </li>

                            @endif
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            @php $b = 0; @endphp

                            @if(count($child_detail) > 0)
                                @php $b = 1; @endphp

                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2 class="heading3 mb-3" data-aos-once="true" data-aos="fade-up">
                                                Our Focus Areas
                                            </h2>
                                            {{--
                                            <p class="desc mb-5 d-none" data-aos-once="true" data-aos="fade-up">
                                                {{ $detail->focus_area }}
                                            </p>
                                            --}}
                                        </div>

                                        @foreach($child_detail as $row)

                                                        <div class="col-md-4" data-aos-once="true" data-aos="fade-up">
                                                            <div class="practice_box m-0 mb-4">
                                                                <div class="visible_box">
                                                                    <!--<img src="{{ asset('storage/' . $detail->thumnail_image) }}" alt="" />-->
                                                                    <h4>{{ $row->title }}</h4>
                                                                </div>
                                                                <div class="hover_box">
                                                                    <p class="text-center">
                                                                        {{ $row->short_description }}
                                                                    </p>
                                                                    <a href="{{ 
                                                                            $row->special_service == '1' ?
                                            url(route('practicearea-detail-specialised', ['slug' => $row->slug])) :
                                            (
                                                $row->special_service == '2' ?
                                                url(route('practicearea-detail-page', ['slug' => $row->slug])) :
                                                (
                                                    $row->special_service == '3' ?
                                                    url(route('practicearea-detail-extra', ['slug1' => $row->slug])) :
                                                    url(route('practicearea-detail', ['slug' => $row->slug]))
                                                )
                                            )
                                                                        }}">Read
                                                                        More <img rel="preload"
                                                                            src="/../assets/frontend/practicarea/frontend/images/right.png"
                                                                            alt="right" />
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>

                                        @endforeach

                                    </div>
                                </div>

                            @endif

                            @if(!empty($detail->why_choose_us))

                                <div class="tab-pane fade @if($b != 1) show active @endif" id="pills-profile" role="tabpanel"
                                    aria-labelledby="pills-profile-tab">
                                    <div class="row">
                                        <div class="col-md-12">
                                            @php echo html_entity_decode($detail->why_choose_us) @endphp
                                        </div>
                                    </div>
                                </div>

                                @php $b = 1; @endphp

                            @else

                                <div class="tab-pane fade @if($b != 1) show active @endif" id="pills-profile" role="tabpanel"
                                    aria-labelledby="pills-profile-tab">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3 class="heading" data-aos-once="true" data-aos="fade-up">
                                                Experienced Team
                                            </h3>
                                            <p class="desc" data-aos-once="true" data-aos="fade-up">
                                                A&A is among the top corporate law firms in India. At A&A, we believe that we are as
                                                good as our team, Our principle has guided us to ensure that we have the best
                                                corporate lawyers in India based at our main offices while the leading corporate
                                                lawyers in other parts of the world run our various practices across the nation,
                                                thus ensuring optimum management and service of even the most complex transactions.
                                                It is due to our standards of professional responsibility when dealing with our
                                                clients and various matters, which we stringently abide by that has enabled us to
                                                qualify as one of the reputed corporate law firms in India.
                                            </p>
                                            <h3 class="heading" data-aos-once="true" data-aos="fade-up">
                                                Industry Experience
                                            </h3>
                                            <p class="desc" data-aos-once="true" data-aos="fade-up">
                                                Whilst A&A commercial law services has been able to cater to legal needs pan India
                                                as well as globally, its main founding office and headquarters is in Delhi and it is
                                                due to this foothold. A&A corporate lawyer in India has played a vital role in
                                                providing advice to the government on various legal and policy-related issues and is
                                                amongst the few corporate law firms in India to have the experience and optimal
                                                understanding of interpretation and drafting of policy matters.
                                            </p>
                                            <h3 class="heading" data-aos-once="true" data-aos="fade-up">
                                                Client-Centric Approach
                                            </h3>
                                            <p class="desc" data-aos-once="true" data-aos="fade-up">
                                                A&A adopts an approach that demands the highest levels of knowledge, technical skill
                                                and service delivery allowing us to provide accurate, reliable, timely, and
                                                cost-effective advice while maintaining international standards of excellence and
                                                create a bespoke approach for every client and their business. Our commercial law
                                                solicitors unique perspective of working on our client’s matters as a critical part
                                                of their team allows us to address their problems like our own. We believe that each
                                                client comes with different requirements and concerns – and we work tirelessly to
                                                achieve their goals and pursue their objectives.
                                            </p>
                                            <h3 class="heading" data-aos-once="true" data-aos="fade-up">
                                                Cost-Efficient
                                            </h3>
                                            <p class="desc" data-aos-once="true" data-aos="fade-up">
                                                We make sure that our fee structure and the legal costs involved are very
                                                transparent and predictable for our clients. We believe that client relationships
                                                are based on trust and a sense of common purpose and we never falter on our promise
                                                making us one of the best corporate law firms in India. Our priority has been to
                                                deliver the best legal & business solutions and our fee arrangements are tailored to
                                                the needs of the client, the client’s goals, and the nature of the matter.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                @php $b = 1; @endphp

                            @endif

                            @if(!empty(json_decode($detail->faq, true)))

                                <div class="tab-pane fade @if($b != 1) show active @endif" id="pills-contact" role="tabpanel"
                                    aria-labelledby="pills-contact-tab">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2 class="heading3 mb-3" data-aos-once="true" data-aos="fade-up">
                                                Frequently Asked Questions
                                            </h2>
                                            <ol>

                                                @php
                                                    $faqArray = json_decode($detail->faq, true);

                                                    if (is_array($faqArray)) {
                                                        foreach ($faqArray as $faqItem) {
                                                            foreach ($faqItem as $question => $answer) {
                                                @endphp

                                                <li class="mb-4 mt-4" data-aos-once="true" data-aos="fade-up">
                                                    <h3>
                                                        <strong>{{ $question }}</strong>
                                                    </h3>
                                                    @php echo html_entity_decode($answer) @endphp
                                                </li>

                                                @php
                                                            }
                                                        }
                                                    }
                                                @endphp

                                            </ol>
                                        </div>
                                    </div>
                                </div>

                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- -------------------- service why choose  end ---------------------- -->

    <!-- -------------------- service related start ---------------------- -->
    @if(count($blog) > 0)
        <section class="service_related">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="heading text-center" data-aos-once="true" data-aos="fade-up">
                            Related Articles
                        </h2>
                    </div>

                    @foreach ($blog as $row)

                        <div class="col-md-4 mt-3">
                            <div class="blog_big_box" data-aos-once="true" data-aos="fade-up">
                                <img rel="preload" src="{{ asset('storage/' . $row->main_image) }}" alt="blog" class="blog_img"
                                    width="390" height="116" />
                                <div class="blog_content">
                                    <p>{{ $row->short_description }}</p>
                                    <a
                                        href="{{ url(route('blog.detail', ['category' => 'blog', 'slug' => strtolower(str_replace(' ', '-', $row->slug))])) }}">View
                                        More</a>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>
            </div>
        </section>
    @endif

    <!-- -------------------- service related  end ---------------------- -->
    <!-- -------------------- service get in touch  start ---------------------- -->


    <!-- -------------------- service get in touch  end ---------------------- -->


    <!-------===========practicearea end===================------------>
@endsection