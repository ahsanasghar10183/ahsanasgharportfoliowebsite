(function($){
"use strict";
 $(document).ready(function() {

  $('.progress-bar').css('opacity', 0);
$('#read_more').waypoint(function() {
$('.progress-bar').addClass('fadeInLeft')
}, { offset: '7%' });
});

$(document).ready(function(){
  // hide our element on page load
  $('.services-card').css('opacity', 0);
 
  $('#serv_id').waypoint(function() {
      $('.services-card').addClass('animated fadeInUp');
  }, { offset: '60%' });
 
});


$(document).ready(function(){
  // hide our element on page load
  $('.port_anim').css('opacity', 0);
 
  $('.port_anim').waypoint(function() {
      $('.port_anim').addClass('animated fadeInUp');
  }, { offset: '70%' });
 
});


$(document).ready(function(){
  // hide our element on page load
  $('.get_intouch_form_anim').css('opacity', 0);
 
  $('.get_intouch_form_anim').waypoint(function() {
      $('.get_intouch_form_anim').addClass('animated fadeInUp');
  }, { offset: '70%' });
 
});



})(jQuery);
