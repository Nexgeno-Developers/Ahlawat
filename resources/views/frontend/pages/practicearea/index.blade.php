@extends('frontend.layouts.app')

<!-- @section('page.title', 'Practice Areas | Leading Law firms in India – Ahlawat & Associates') -->
@section('page.title', 'Practice Areas-Leading Law firms in India')

@section('page.description', 'Ahlawat & Associates is one of the leading law firms in India having expertise in diverse
legal areas including corporate law, intellectual property, litigation, and real estate.')

@section('page.type', 'practice area')

@section('page.content')


<!-------===========practicearea list start===================------------>
<section class="faq_page_banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h1 class="heading">Our Expertise</h1>
                    <nav aria-label="breadcrumb" class="breadcrumb d-flex justify-content-center mb-0">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item home">
                                <a href="{{ url(route('index')) }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Our Expertise
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ------------------- practice area box start ---------------- -->
<section class="practice_w_box">
    <div class="container">
        <div class="row">
            @php
                // Sorting the subcategory collection by the 'title' attribute
                $sortedPracticearea = $practiceAreas->sortBy('title');
            @endphp
            @foreach($sortedPracticearea as $row)
                    <div class="col-md-4 mb-2 px0">
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
                        }}" class="btn_hover btn-3 hover-border-5 text-center ">
                            <span>{{$row->title}}</span>
                        </a>
                    </div>
            @endforeach
        </div>
    </div>
</section>
<!-- ------------------- practice area box end ---------------- -->

<!-- ---------- service get in touch  start ---------------------- -->

@include('frontend.component.get_in_touch')

<!-- -------------- service get in touch  end ---------------------- -->

<!------------------ awards_section Start -------------------------->
@include('frontend.component.awards')
<!------------------ awards_section End -------------------------->

<!-------===========practicearea end===================------------>
@endsection