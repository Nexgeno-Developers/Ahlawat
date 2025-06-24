@extends('frontend.layouts.app')

@section('page.title', 'Team Members | Ahlawat &amp; Associates')

@section('page.description', 'The profound team member of Ahlawat &amp; associates one of the best full-service law firms in India catering to domestic &amp; international clients')

@section('page.type', 'team')

@section('page.content')

<!-------=================== Team start ======================----------->

<!-- ---------------------- Team Banner start -------------------- -->

<section class="team_banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h1 class="heading">Our Professionals</h1>
                    
                    <nav aria-label="breadcrumb" class="breadcrumb d-flex justify-content-center mb-0">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item home"><a href="{{ url(route('index')) }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                            Our Professionals
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ---------------------- Team Banner end -------------------- -->
<!-- ---------------------- Team Card start -------------------- -->

<section class="team_wrapper">
    <div class="container">
        <div class="row px0">

            @foreach ($team as $row)

            <div class="col-xl-3 col-md-4 col-6 ">
                <a href="{{ url(route('team.detail', ['slug' => strtolower(str_replace(' ', '-',$row->name))] )) }}">
                    <div class="team_box">
                        <div class="team_main_img">
                            <img loading="lazy"  src="{{ asset('storage/' . $row->image) }}" alt="{{ ucfirst($row->name) }}" data-aos="fade-up" data-aos-once="true" />
                        </div>
                        <p class="name text-dark" data-aos="fade-up" data-aos-once="true">
                            {{ ucfirst($row->name) }}
                        </p>
                        <p class="desc text-secondary">{{ ucfirst($row->designation) }}</p>
                        <hr class="text-dark" />
                        {{-- <p class="bio text-dark" data-aos="fade-up" data-aos-once="true">
                           
                            {{ str_replace([' ', '&amp;',', , '], [', ',', '], strip_tags($row->description)) }} 

                            
                        </p>--}}
                        <div class="team-member" data-description="{{ $row->description }}"></div>
                        <a href="{{ url(route('team.detail', ['slug' => strtolower(str_replace(' ', '-',$row->name))] )) }}"
                            data-aos="fade-up" data-aos-once="true">View Profile</a>
                    </div>
                </a>

            </div>

            @endforeach

        </div>
    </div>
</section>

<!-- ---------------------- Team Card end -------------------- -->

<!-- ---------- service get in touch  start ---------------------- -->

@include('frontend.component.get_in_touch')

<!-- -------------- service get in touch  end ---------------------- -->

<!------------------ awards_section Start -------------------------->
@include('frontend.component.awards')
<!------------------ awards_section End -------------------------->

<!--------============== Team end ================-------------->

@endsection

@section('component.scripts')
<script>
    function clear_data() {
        var teamMembers = document.querySelectorAll('.team-member');

        teamMembers.forEach(function (element) {
            var data = element.getAttribute('data-description');
            var cleanedData = replaceListTags(data);
            element.innerHTML = cleanedData;
        });
    }

    function sanitizeHTML(html) {
        // Replace '</li>' with ','

        // Replace '</li></ul>' with ' . '
        html = html.replace(/<\/li><\/ul>/g, ' ');
        html = html.replace(/<\/li>/g, ', ');
		html = html.replace(/, $/, '');

        // Clean HTML tags
        var doc = new DOMParser().parseFromString(html, 'text/html');
        return doc.body.textContent || "";
    }

    // Call the function when needed
    clear_data();

function replaceListTags(htmlString) {
            // Create a temporary div element to hold the HTML string
            var tempDiv = document.createElement('div');
            tempDiv.innerHTML = htmlString;

            // Find all ul elements
            var ulElements = tempDiv.querySelectorAll('ul');

            ulElements.forEach(function(ul) {
                // Find all li elements within each ul
                var liElements = ul.querySelectorAll('li');
                var textArray = [];

                liElements.forEach(function(li) {
                    textArray.push(li.textContent.trim()); // Extract and trim the text content of each li
                });

                var commaSeparatedText = textArray.join(', '); // Join the text with commas

                // Replace the ul element with the comma-separated text
                var newTextNode = document.createTextNode(commaSeparatedText);
                ul.parentNode.replaceChild(newTextNode, ul);
            });

            // Return the modified HTML as a string
            return tempDiv.innerHTML;
        }
</script>
@endsection