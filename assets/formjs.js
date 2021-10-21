$(document).ready(function(){
    
    $('input[name=ictguest]').click(function(){
        let eventPurpose =$("input[type='radio'][name='ictguest']:checked").val();
        if(eventPurpose=='exhibitor'){
            $('#exibitorInfo').removeClass('d-none');
            $('#sponsorInfo').addClass('d-none');
            $("input[name='payment']").removeAttr('required');
        }else if(eventPurpose=='sponsor'){
            $('#exibitorInfo').addClass('d-none');
            $('#sponsorInfo').removeClass('d-none');
                $("input[name='payment']").each(function(index, element) { 
                    if(index == 0) {
                        let req=$("input[name='payment']")[index];
                        $(req).attr('required', 'required');
                    }
                });
        }else{
            $('#sponsorInfo').addClass('d-none');
            $('#exibitorInfo').addClass('d-none');
            $("input[name='payment']").removeAttr('required');
        }
    })
    
    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;

    setProgressBar(current);

    $(".next").click(function(){
        let requireField=checkRequire();
        if(requireField==false)return;

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        //Add Class Active
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
        step: function(now) {
        // for making fielset appear animation
        opacity = 1 - now;

        current_fs.css({
        'display': 'none',
        'position': 'relative'
        });
        next_fs.css({'opacity': opacity});
        },
        duration: 500
        });
        setProgressBar(++current);
    });

    $(".previous").click(function(){

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();

        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
        step: function(now) {
        // for making fielset appear animation
        opacity = 1 - now;

        current_fs.css({
        'display': 'none',
        'position': 'relative'
        });
        previous_fs.css({'opacity': opacity});
        },
        duration: 500
        });
        setProgressBar(--current);
    });

    function setProgressBar(curStep){
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    $(".progress-bar")
    .css("width",percent+"%")
    }

    // $(next_fs).on(show)(function(){
    //     let n=$("fieldset").length-1;
    // if (n =='1') {
    //     alert("almos done")
    //     $(".next").html("Submit");
    //   } else {
    //     $(".next").html("Next");
    //   }
    // })

    function checkRequire(){
        
        let ictguest=  $('input, textarea, select', '#msform');
        ictguest.each(function(index , element) {
            let msformName=$(this).attr('name');
            if($(this).attr('required')){
               let radValue=$(this).attr('type');
               switch(radValue) { 
                    case 'radio':
                    if(!$(msformName).is(':checked')) {
                        console.log($(msformName).val());
                        alert('radio not checked');
                    
                    };
                    // radCheck="$(this).filter(':checked').val()";
                    // if($(radCheck)=='undefine'||$(radCheck)=='null'||$(radCheck)=='false'||$(radCheck)=='') {
                    //     alert('radio not checked');
                    
                    // }else{alert ('vot working')};

                    // case 'input':
                    // if($(this).val()=='') {
                    //    alert('value empty')
                    // }else{
                    //     alert("value");
                    // };
               }
            }
        });
    }
    

})