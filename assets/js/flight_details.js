 $(function() {
   $( "#slider-3" ).slider({
      range:true,
      min: 0,
      max: 23,
      values: [ 0, 23 ],
      slide: function( event, ui ) {
         $( "#price" ).val( ui.values[ 0 ] + "hrs - " + ui.values[ 1 ] + "hrs");
         // alert(ui.values[ 0 ]);

         setTimeout(function(){ 
            var data = {
               "min" : ui.values[ 0 ],
               "max"  : ui.values[ 1 ]
            };
            jQuery.ajax({
               url: window.location.origin + "/index.php/flight_details/durationSliderChange",
               type: "POST",
               data: data,
               success: function (res) {
                  
               },
               error: function (res) {
               }
            });
         }, 3000);
      }

   });
   $( "#price" ).val( $( "#slider-3" ).slider( "values", 0 ) +
      " hrs - " + $( "#slider-3" ).slider( "values", 1 ) + " hrs");
   
  // setTimeout(function(){ alert("Hello"); }, 3000);
});
  $(function() {
   $( "#slider-2" ).slider({
      range:true,
      min: 0,
      max: 23,
      values: [ 0, 23 ],
      slide: function( event, ui ) {
         $( "#time" ).val( ui.values[ 0 ] + " hrs - " + ui.values[ 1 ] + " hrs");
      }
   });
   $( "#time" ).val( $( "#slider-2" ).slider( "values", 0 ) +
      " hrs - " + $( "#slider-2" ).slider( "values", 1 ) + " hrs" );
});

jQuery(document).ready(function(){
   // $("#price").change(function(){
   //   alert("The text has been changed.");
   // });
});