@foreach ($deal_update as $row)
<div class="col-lg-4 col-md-6 px0" data-aos="fade-up" data-aos-once="true">
    <div class="blog_big_box me-xl-3 mb-md-5 mb-3 ">
        <div class="hover_effect_img">
            <img rel="preload" src="{{ asset('storage/' . $row->main_image) }}" alt="{{ $row->alt_main_image }}" class="blog_img" data-aos="fade-up" data-aos-once="true" width="390" height="116" />
            <div class="overlay">
                <a href="{{ url(route('blog.detail', ['category' =>'deal-update','slug' => $row->slug] )) }}">
                    <div class="plus">
                        +
                    </div>
                </a>
            </div>
        </div>
        @php
        $author = json_decode($row->user_id, true);
        $count = count($author);
        @endphp
        <div class="blog_content">
            <div class="d-flex align-items-xl-center align-items-lg-start align-items-center  flex-xl-row flex-lg-column flex-row  gap-xl-4 gap-lg-0 gap-2 mb-2">
                <p class="d-flex align-items-center gap-2 author mb-0">
                    <img rel="preload" src="/assets/frontend/images/author.png" alt="author" />
                    <span>
                        @foreach ($author as $details)
                            @php 
                                $author_name = DB::table('users')->where('id', $details)->first();
                            @endphp
                            @if ($author_name)
                                {{ $author_name->name }}
                                @break
                            @endif
                        @endforeach
                    </span>
                </p>
                <p class="d-flex align-items-center gap-2 author mb-0 w120">
                    <img rel="preload" src="/assets/frontend/images/calender.png" alt="calender" />
                    <span> {{ $row->updated_at->format('F j, Y') }} </span>
                </p>
            </div>
            <p>
                {{ $row->short_description }}
            </p>
            <a href="{{ url(route('blog.detail', ['category' =>'deal-update','slug' => $row->slug] )) }}">View More</a>
        </div>
    </div>
</div>
@endforeach