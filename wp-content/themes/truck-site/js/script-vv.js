jQuery(document).ready(function($){

   // console.log("jQuery is still working!");

   // var buttons = $(".cf7mls_next");
   // var buttonsCount = buttons.length;
   // console.log(buttonsCount);
  $(".cf7mls_next").click(function(event) {
    //     //alert(event.target.id);
    //     //var $btn = this;
         var $btn = event.target.id;
         var parentFieldset = $("#"+$btn).parent().parent();
         console.log(parentFieldset);//fieldset
         setTimeout( function() {
           var invalidInputs = parentFieldset.find("input.wpcf7-not-valid");
           console.log($(invalidInputs[0]));
           console.log($(invalidInputs).attr("class"));

           $('html').stop().animate({
             scrollTop: $('.wpcf7-not-valid').eq(0).offset().top-200
           });

           $(invalidInputs[0]).focus();

           var requireNote = parentFieldset.find('span.required-note');

          // invalidInputs.each(function() {
             //console.log("HIDE REQ");
             //invalidInputs.eq(index).nextAll('span.required-note').eq(0).hide();
            $(requireNote).not(".show").hide();
          //});

          $('span.wpcf7-not-valid-tip').each(function() {
        
            //var theInput = $(this).prev().prev().prev().children();
            var theInput = $(this).parent().find("input");
    
            //var notes = $(this).closest('.required-note');
            console.log($(this).parent().find("input"));
            //alert(theInput.attr('class'));
            
            var inputType = theInput.attr('type');
            console.log(inputType);

            if( !(inputType == 'radio') ) {
              if( !(theInput.hasClass('wpcf7-not-valid'))) {
                console.log(theInput);
                $(this).prev().addClass("show");
                console.log("HERE");
                console.log($(this).prev());
                $(this).hide();
                $(this).prev().show();
              }
            }
          });
        

      }, 600);

  })

     var wpcf7Elm = document.querySelector( '.wpcf7' );
 
     //wpcf7Elm.addEventListener( 'wpcf7submit', function( event ) {
    // alert( "Fire!" );
     //}, false );

         $('.wpcf7-form').on('wpcf7invalid', function(e) {
           var $form = this;
           console.log($form);
           setTimeout( function() {
               //alert("HIIII");
             $('html').stop().animate({
               scrollTop: $('.wpcf7-not-valid', $form).eq(0).offset().top - 200
             }, 500);
             var submitInvalid = $('input.wpcf7-not-valid').eq(0);
             $(submitInvalid[0]).focus();
           }, 200);
         });


         /*
         
         $(".cf7mls_next").click(function(event) {
               setTimeout( function() {
                 if( $(this).is('#')) {
                     $('html').stop().animate({
                       scrollTop: $('#').eq(0).offset().top-200
                  });
                }
                  else {
                    $('html').animate({
                      scrollTop: 0});
                  }
            }, 2000);
              })
              
              */


setTimeout( function() {
  var find = $('[name="_wpcf7_ak_hp_textarea"]');
  find.remove();
}, 3000);



var fGutter = $('footer').find('div.gutter-vr-30px');
fGutter.removeClass("gutter-vr-30px");


$('i.fa-bars').on('click', function() {
  $('ul#primary-menu').toggle();
  $('ul#primary-menu').css({'position': 'absolute', 'top': '-10px', 'right': '40px', 'background-color': '#E3E3E3', 'min-width': '20px', 'box-shadow': '0px 8px 16px 0px rgba(0,0,0,0.2)', 'z-index': '1'})
});


fParent = $('footer').find('div.row');
footColGroups = $(fParent).children();
$(footColGroups).eq(1).remove();
$(footColGroups).eq(0).removeClass();
$(footColGroups).eq(0).addClass("col-12");

fWidgets = $(footColGroups).eq(0).children();
$(fWidgets).eq(0).addClass("col-6");
$(fWidgets).eq(0).css("float", "left");
$(fWidgets).eq(1).addClass("col-6");
$(fWidgets).eq(1).addClass("footerImage");
$(fWidgets).eq(1).css("display", "inline");


});



