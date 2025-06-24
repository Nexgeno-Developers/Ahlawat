
<!-- all js file in combined js -->
<script src="/assets/frontend/js/combine.js"></script>
<!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->

<!--
    <script src="/assets/frontend/js/jquery.min.js"></script>
<script src="/assets/frontend/js/bootstrap.bundle.min.js"></script>
-->


<!--aos js
<script src="/assets/frontend/js/aos.js"></script>-->

<!-- Animation Typing--------- -->
<!-- <script src="/assets/frontend/js/core.js"></script> -->


<!-- International Phone Number
<script src="/assets/frontend/js/intlTelInput.js"></script>--------- -->

<!--owl carousel js
<script  src="/assets/frontend/js/owl.carousel.js"></script>-->

<!--google translate js
<script defer src="/assets/frontend/js/google_translate.js"></script>-->

<!--moment js
<script src="/assets/frontend/js/moment.min.js"></script>-->

<!--jQuery Validate
<script defer src="/assets/frontend/js/jquery.validate.min.js"></script>-->

<!--Toast Js
<script defer src="/assets/frontend/js/toastr.min.js"></script>-->

<!--select2-->
<!-- <script src="/assets/frontend/js/select2.full.min.js"></script> -->

<!--select2
<script defer src="/assets/frontend/js/select2.min.js"></script>-->

<!--whatsapp js
<script defer src="/assets/frontend/js/whatsapp-chat-support.js"></script>-->

<!--Google capcha js
<script src="https://www.google.com/recaptcha/api.js" async defer></script>-->

<!--<script src="/assets/frontend/js/api.js"></script>-->

<!--Custom Js
<script src="/assets/frontend/js/Init.js"></script>-->


<script src="/assets/frontend/js/script.js"></script>

<!--<script src="/assets/frontend/js/jquery.marquee.min.js"></script>-->

<script>
    $(document).ready(function() {
        var scrollCount = 100;

        $(".marquee").marquee({
            duration: 18000,
            gap: 0,
            delayBeforeStart: 0,
            direction: "up",
            duplicated: true,
            pauseOnHover: true,
            startVisible: true,
            // Add a callback for each iteration
            onBefore: function() {
                console.log("Scroll Count:", ++scrollCount);
            }
        });
        var hInfo = "";
        if($(".load_pdf").length){ 
           function isValidEmailAddress(email) {
                const regex = /^([a-zA-Z0-9_.+-])+@[a-zA-Z0-9-]+\.[a-zA-Z0-9]{2,4}$/;
                return regex.test(email);
            }
            $("#send_pdf").click(function(){ 
                hInfo = $(".load_pdf").data('info');
                $("#error_pdf_email").html("").removeClass('alert-danger');
                var pdfEmail = $.trim($("#pdf_email").val());
                if(pdfEmail == ""){
                    $("#error_pdf_email").html("Please enter Email").addClass('alert-danger');
                }else{
                    if (!isValidEmailAddress(pdfEmail)) {
                        $("#error_pdf_email").html("Please enter valid Email").addClass('alert-danger');
                    }else{
                        $(".lzyloader").removeClass('d-none');
                        var pData = {
                            'email': pdfEmail,
                            'info': hInfo
                        }; 
                        $.ajax({
                            type: "POST",
                            headers: {
                                'X-CSRF-TOKEN': $('input[name="_token"]').val() 
                            },
                            url: "{{ url(route('send_pdf_email')) }}",
                            data: pData, 
                            encode: true,
                        }).done(function(data) {
                            $(".lzyloader").addClass('d-none');
                           $("#error_pdf_email").html("Thank you for showing interest. <br /> Checklist shared on your email "+'"'+pdfEmail+'"').removeClass('alert-danger').addClass('alert-success');
                        }); 
                    }
                } 
            });
        } 
    });
</script>

