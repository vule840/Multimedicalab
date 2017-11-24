jQuery(document).ready(function($) {
   console.log('radis');
//jsfiddle.net/esedic/oza6v6px/
   $(".card-header").parent('.card').hover(
  function() {
    $(this).children('.collapse').collapse('show');
  }, function() {
    $(this).children('.collapse').collapse('hide');
  }
);


		
});



