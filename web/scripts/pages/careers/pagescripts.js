$(document).ready(function ()
        {
            if (($(window).width() >= 1220)) {

                $('.contact-form-exit,#overlay-back').click(function () {

                    if ($("#contact-form-careers-container").css("margin-right") == "0px")
                    {
                        $('#contact-form-careers-container').animate({"margin-right": '-=' + $("#contact-form-careers-container").width()});
                        $('#overlay-back').fadeOut(500);
                    }

                });

                $('.open-popup-link').click(function () {

                    if ($("#contact-form-careers-container").css("margin-right") == "0px")
                    {
                        $('#contact-form-careers-container').css("display", "block").animate({"margin-right": '-=' + $("#contact-form-careers-container").width()});
                        $('#overlay-back').fadeOut(500);
                    } else
                    {
                        $('#contact-form-careers-container').css("display", "block").animate({"margin-right": '+=' + $("#contact-form-careers-container").width()});
                        $('#overlay-back').fadeIn(500);
                    }
                });

            }

            if (($(window).width() > 767) && ($(window).width() < 1220)) {
                
                $('.open-popup-link').click(function (e) {
                    
                    $('#contact-form-careers-container').offset({ top: e.pageY - 650})
                    
                    $("#contact-form-careers-container").animate({
                        right: $("#contact-form-careers-container").parent().width() / 2 - $("#contact-form-careers-container").width() / 2

                    }, 500);
                    
                    $('html, body').animate({
                        scrollTop: $('#contact-form-careers-container').offset().top - 150
                    }, 'slow');
                    
                    $('#overlay-back').fadeIn(500);
                });
                
                $('.contact-form-exit,#overlay-back').click(function () {
                    $('#contact-form-careers-container').animate({"right": "-660px"});
                    $('#overlay-back').fadeOut(500);
                });

            }
            if (($(window).width() < 767)) {

                $('.open-popup-link').click(function (e) {
                    
                    $('#contact-form-careers-container').offset({ top: e.pageY - 650})
                    
                    $("#contact-form-careers-container").animate({
                        right: $("#contact-form-careers-container").parent().width() / 2 - $("#contact-form-careers-container").width() / 2
                    }, 500);
                    
                    $('html, body').animate({
                        scrollTop: $('#contact-form-careers-container').offset().top - 100
                    }, 'slow');
                    
                    $('#overlay-back').fadeIn(500);
                });

                $('.contact-form-exit,#overlay-back').click(function () {
                    $('#contact-form-careers-container').animate({"right": "-320px"});
                    $('#overlay-back').fadeOut(500);
                });
            }
            
            
        });

var CanSendForm = true;
var captchaValidated = false;

$(document).ready(function () {

    $('.file_label').click(function () {
        $('.form_error_wrap ul').remove();
    });

    $(".form-slider-box").on("click", "#career-form-submit", function () {

        $('#contact-career-form').validate({
            onkeyup: false,
            errorPlacement: function (error, element) {
                $(element).next().show();
                $(element).css('border-color', '#fc1556');
                $(element).addClass('placeholder-error');
            },
            success: function (error, element) {
                $(element).next().hide();
                $(element).css('border-color', '#dadad2');
                $(element).removeClass('placeholder-error');
            },
            rules: {
                'career[name]': {
                    required: true
                },
                'career[phone]': {
                    required: true
                },
                'career[email]': {
                    required: true,
                    email: true
                },
                'career[cover_letter]':{
                    required: true
                }
            }
        });
    });

    $('.form-container').on('submit', '#contact-career-form', function (e) {
        e.preventDefault();

        console.log(!$('#contact-career-form').valid());
        if (!$('#contact-career-form').valid()) {
            return false;
        }

        if (!captchaValidated) {
            grecaptcha.execute();
        } else {
            careerSubmit();
        }

    });

    $(".form-container").on('change', '#career_cv', function () {
        var filePath = $(this).val();
        var fileName = filePath.split("\\").pop();
        var labelTrans = $(".file_label").attr("data-trans");
        $(".file_label").attr("data-filename", labelTrans + ": " + fileName).addClass("active");
    });
});

function ContactSubmit()
{
    captchaValidated = true;
    $('#contact-career-form').submit();
}

function careerSubmit()
{
    if (CanSendForm) {
        CanSendForm = false;
        var form = $('#contact-career-form');
        var formAction = form.attr('action');

        var formData = new FormData(form[0]);
        formData.append('cv', $('input[type=file]')[0].files[0]);
        formData.append('g-recaptcha-response', $('#g-recaptcha-response').val());

        $.ajax({
            url: formAction,
            type: 'POST',
            enctype: 'multipart/form-data',
            cache: false,
            processData: false,
            contentType: false,
            data: formData
        }).done(function (data) {
            $(".form-container").html(data);
            CanSendForm = true;
            grecaptcha.reset();
            captchaValidated = false;
        }).fail(function () {

        });
    }
}
