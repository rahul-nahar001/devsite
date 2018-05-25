(function ($) {

//el document ready solo espera hasta que el dom (estructura html) este cargada
 $('document').ready(function(){
           // carga el menu para los elementos que tengan la clase .menu
            $('.menu').lksMenu();
 });
 
 //el document ready solo espera hasta que el dom (estructura html) este cargada
 $('document').ready(function(){
           // carga el menu para los elementos que tengan la clase .menu
            $('.menu').acordeon();
 });
 
 
 
 
 $('document').ready(function(){
           
      $('#block-views-event-clendar-block-1 .date-heading a').html($('#block-views-event-clendar-block-1 .date-heading a').html().replace("Sunday, ", ""));
	   $('#block-views-event-clendar-block-1 .date-heading a').html($('#block-views-event-clendar-block-1 .date-heading a').html().replace("Sunday", ""));
	   
	   
	   alert('test');
	   
	   
 });
 


 
 
 
 } (jQuery));

 