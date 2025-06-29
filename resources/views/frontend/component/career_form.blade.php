<!---------================ career Form start =========---------------->
@php
$session_data = json_decode(session('user_ip'), true);
/*
if (!isset($session_data['country'])) {
    $session_data['country'] = 'IN';
}*/
@endphp
<form class="contact_form" id="add_career_form" action="{{url(route('contact.create'))}}" method="post" enctype="multipart/form-data">
    @csrf
    <h3 class="mb-4" >Want to know more</h3>
    <input type="hidden" name="section" value="Career Form"  />
    <input type="hidden" name="url" value="{{ url()->current() }}"  />
    <div class="d-flex align-items-center flex-md-row flex-column gap-md-4">
        <div class="mb-3 w-100">
            <input type="text" class="form-control" name="name" placeholder="Enter Your Name" required />
        </div>
        <div class="mb-3 w-100">
            <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required />
        </div>
    </div>
    <div class="d-flex align-items-center flex-md-row flex-column gap-md-4">
        <div class="mb-3 w-100">
            <input id="career" type="tel" class="form-control phone" name="phone" placeholder=" Your Phone No" required />
        </div>
        <div class="mb-3 w-100">
            <input type="text" class="form-control" name="qualification" placeholder="Qualification" required />
        </div>
    </div>
    <div class="d-flex align-items-center gap-2">
        <div class="w-100 mb-3">
            <label for="formFile" class="form-label">Upload Your CV</label>
            <input class="form-control" type="file" name="cv" id="formFile" required accept=".pdf,.docx">
        </div>
    </div>
    <div class="d-flex align-items-center gap-2">
        <div class="w-100 mb-3">
            <div class="g-recaptcha" data-sitekey="{{env('GOOGLE_CAPTCHA_SITEKEY')}}"></div>
        </div>
    </div>
    <input type="hidden" name="ip" value="{{ $session_data['ip'] }}"  />
    <input type="hidden" name="ref_url" value="{{ url()->previous() }}"  />
    <div class="text-center">
        <button class="contact_form_button" >SUBMIT</button>
    </div>
</form>
<!---------================ career Form end =========---------------->
@section('component.scripts')
<script>
$(document).ready(function() {
    initValidate('#add_career_form');
    $("#add_career_form").submit(function(e) {
        var form = $(this);
        ajaxSubmit(e, form, responseHandler);
    });

    var responseHandler = function(response) {
        $('input, textarea').val('');
        $("select option:first").prop('selected', true);
        setTimeout(function() {
            location.reload();
        }, 2000);
    }
});
</script>
@endsection