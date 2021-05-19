$(document).ready(() => {
    $('#success').fadeOut(10000);  

   if($(window).width() > 900){

   $( ".image" ).mouseover(() => {
   $('.overlay').show();
   
   });

    $( ".image" ).mouseout(() => {
   $('.overlay').hide();

   });

   
//     $( "#imagegreers" ).mouseover(() => {
//    $('#overlay2').show();
   
//    });

//     $( "#imagegreers" ).mouseout(function()  {
//    $('#overlay2').hide();

//    });	
}
});