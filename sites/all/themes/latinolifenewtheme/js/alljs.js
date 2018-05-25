
(function($) {
  $(document).ready(function() {



/*var detectsizeInterval = setInterval(function() {
  //



$('#block-views-event-clendar-block-4 .date-heading a').html($('#block-views-event-clendar-block-4 .date-heading a').html().replace("Monday, ", ""));
	  $('#block-views-event-clendar-block-4 .date-heading a').html($('#block-views-event-clendar-block-4 .date-heading a').html().replace("Tuesday, ", ""));
	  $('#block-views-event-clendar-block-4 .date-heading a').html($('#block-views-event-clendar-block-4 .date-heading a').html().replace("Wednesday, ", ""));
	  $('#block-views-event-clendar-block-4 .date-heading a').html($('#block-views-event-clendar-block-4 .date-heading a').html().replace("Thursday, ", ""));
	  $('#block-views-event-clendar-block-4 .date-heading a').html($('#block-views-event-clendar-block-4 .date-heading a').html().replace("Friday, ", ""));
	  $('#block-views-event-clendar-block-4 .date-heading a').html($('#block-views-event-clendar-block-4 .date-heading a').html().replace("Saturday, ", ""));
	  $('#block-views-event-clendar-block-4 .date-heading a').html($('#block-views-event-clendar-block-4 .date-heading a').html().replace("Sunday, ", ""));
	  
	  
	  $('#block-views-event-clendar-block-4 .date-heading a').html($('#block-views-event-clendar-block-4 .date-heading a').html().replace(" 1", ""));
	  $('#block-views-event-clendar-block-4 .date-heading a').html($('#block-views-event-clendar-block-4 .date-heading a').html().replace(" 2", ""));
	  $('#block-views-event-clendar-block-4 .date-heading a').html($('#block-views-event-clendar-block-4 .date-heading a').html().replace(" 3", ""));
	  $('#block-views-event-clendar-block-4 .date-heading a').html($('#block-views-event-clendar-block-4 .date-heading a').html().replace(" 4", ""));
	  $('#block-views-event-clendar-block-4 .date-heading a').html($('#block-views-event-clendar-block-4 .date-heading a').html().replace(" 5", ""));
	  $('#block-views-event-clendar-block-4 .date-heading a').html($('#block-views-event-clendar-block-4 .date-heading a').html().replace(" 6", ""));
	  $('#block-views-event-clendar-block-4 .date-heading a').html($('#block-views-event-clendar-block-4 .date-heading a').html().replace(" 7", ""));
	  $('#block-views-event-clendar-block-4 .date-heading a').html($('#block-views-event-clendar-block-4 .date-heading a').html().replace(" 8", ""));
	  $('#block-views-event-clendar-block-4 .date-heading a').html($('#block-views-event-clendar-block-4 .date-heading a').html().replace(" 9", ""));
	  $('#block-views-event-clendar-block-4 .date-heading a').html($('#block-views-event-clendar-block-4 .date-heading a').html().replace(" 10", ""));
	  $('#block-views-event-clendar-block-4 .date-heading a').html($('#block-views-event-clendar-block-4 .date-heading a').html().replace(" 11", ""));
	  $('#block-views-event-clendar-block-4 .date-heading a').html($('#block-views-event-clendar-block-4 .date-heading a').html().replace(" 12", ""));
	  $('#block-views-event-clendar-block-4 .date-heading a').html($('#block-views-event-clendar-block-4 .date-heading a').html().replace(" 13", ""));
	  $('#block-views-event-clendar-block-4 .date-heading a').html($('#block-views-event-clendar-block-4 .date-heading a').html().replace(" 14", ""));
	  $('#block-views-event-clendar-block-4 .date-heading a').html($('#block-views-event-clendar-block-4 .date-heading a').html().replace(" 15", ""));
	  $('#block-views-event-clendar-block-4 .date-heading a').html($('#block-views-event-clendar-block-4 .date-heading a').html().replace(" 16", ""));
	  $('#block-views-event-clendar-block-4 .date-heading a').html($('#block-views-event-clendar-block-4 .date-heading a').html().replace(" 17", ""));
	  $('#block-views-event-clendar-block-4 .date-heading a').html($('#block-views-event-clendar-block-4 .date-heading a').html().replace(" 18", ""));
	  $('#block-views-event-clendar-block-4 .date-heading a').html($('#block-views-event-clendar-block-4 .date-heading a').html().replace(" 19", ""));
	  $('#block-views-event-clendar-block-4 .date-heading a').html($('#block-views-event-clendar-block-4 .date-heading a').html().replace(" 20", ""));
	  $('#block-views-event-clendar-block-4 .date-heading a').html($('#block-views-event-clendar-block-4 .date-heading a').html().replace(" 21", ""));
	  $('#block-views-event-clendar-block-4 .date-heading a').html($('#block-views-event-clendar-block-4 .date-heading a').html().replace(" 22", ""));
	  $('#block-views-event-clendar-block-4 .date-heading a').html($('#block-views-event-clendar-block-4 .date-heading a').html().replace(" 23", ""));
	  $('#block-views-event-clendar-block-4 .date-heading a').html($('#block-views-event-clendar-block-4 .date-heading a').html().replace(" 24", ""));
	  $('#block-views-event-clendar-block-4 .date-heading a').html($('#block-views-event-clendar-block-4 .date-heading a').html().replace(" 25", ""));
	  $('#block-views-event-clendar-block-4 .date-heading a').html($('#block-views-event-clendar-block-4 .date-heading a').html().replace(" 26", ""));
	  $('#block-views-event-clendar-block-4 .date-heading a').html($('#block-views-event-clendar-block-4 .date-heading a').html().replace(" 27", ""));
	  $('#block-views-event-clendar-block-4 .date-heading a').html($('#block-views-event-clendar-block-4 .date-heading a').html().replace(" 28", ""));
	  $('#block-views-event-clendar-block-4 .date-heading a').html($('#block-views-event-clendar-block-4 .date-heading a').html().replace(" 29", ""));
	  $('#block-views-event-clendar-block-4 .date-heading a').html($('#block-views-event-clendar-block-4 .date-heading a').html().replace(" 30", ""));
	  $('#block-views-event-clendar-block-4 .date-heading a').html($('#block-views-event-clendar-block-4 .date-heading a').html().replace(" 31", ""));
	   



}, 100);
	
	
      */     
      
	   
	
	   

 

});
}(jQuery));



