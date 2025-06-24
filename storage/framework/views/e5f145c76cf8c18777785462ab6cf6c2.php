<!-- Load jQuery first -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Then load other scripts that depend on jQuery -->
<script src="/path/to/media-coverage.js"></script>
<script src="/path/to/script.js"></script>

<!-- all js file in combined js -->
<script src="/assets/frontend/js/combine.js" defer ></script>


<script src="/assets/frontend/js/script.js" defer ></script>



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
                            url: "<?php echo e(url(route('send_pdf_email'))); ?>",
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
<script>
jQuery("#awards_slider, #media_slider_carousel").owlCarousel({
  autoplay: true,
  loop: true,
  margin: 20,
  responsiveClass: true,
  autoHeight: true,
  autoplayTimeout: 2000,
  smartSpeed: 800,
  nav: false,
  autoplayHoverPause:true,
  responsive: {
    0: {
      items: 1
    },

    600: {
      items: 3
    },

    1024: {
      items: 4
    },

    1366: {
      items: 4
    }
  }
});
</script>

<?php /**PATH C:\Users\abc\Desktop\ahlawat new\resources\views/frontend/partials/js.blade.php ENDPATH**/ ?>