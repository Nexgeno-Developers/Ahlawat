@php
$media = DB::table('media_coverage')->where('status', 1)->orderBy('created_at', 'desc')->take(12)->get();
@endphp
<!---========= Media coverage ==========--------------->

<section class="media">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="underline_heading d-flex align-items-center justify-content-center mt-5">
                    <h5 class="main_heading text-center" >Media</h5>
                </div>
                <h6 class="main_heading mb-md-2 text-center" >Media Coverages</h6>
            </div>

            <div class="col-md-12">
                <div class="owl-carousel owl-theme" id="media_slider_carousel">

                    @foreach ($media as $row)

                    <div class="item">
                        <a href="{{ $row->url }}" class="media_link">
                            <div class="media_box" >
                                <img loading="lazy" src="{{ asset('storage/' . $row->image) }}" alt="{{ htmlspecialchars_decode($row->title) }}" />
                                <h4 class="title">{{ htmlspecialchars_decode($row->title) }}</h4>
                            </div>
                        </a>
                    </div>

                    @endforeach

                </div>
            </div>

            <div class="col-md-12">
                <div class="text-center mt-3">
                    <a class="common_btn" href="{{ url(route('media-coverage')) }}">View More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!---========= End Media coverage ==========--------------->