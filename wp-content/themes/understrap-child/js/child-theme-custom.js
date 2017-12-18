jQuery(document).ready(function($) {
   console.log('radis');
//jsfiddle.net/esedic/oza6v6px/

 /*  $(".card-header").parent('.card').hover(
  function() {
    $(this).children('.collapse').collapse('show');
  }, function() {
    $(this).children('.collapse').collapse('hide');
  }
);
*/


//Main navigation scroll spy for shadow
$(window).scroll(function() {
  var y = $(window).scrollTop();
  if (y > 0) {
  		console.log('true');
    //$("#header").addClass('--not-top');
  } else {
  	console.log('false');
    //$("#header").removeClass('--not-top');
  }
});
		
});



