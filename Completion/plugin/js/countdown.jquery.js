/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
(function ($){
   $.fn.countdown = function(options){
       //alert("Working");
       var settings ={'date': null};
       if(options){
           $.extend(settings,options);
       }
      // alert(setting['date']);
      
      this_sel = $(this);
      function count_exec(){
          eventDate= Date.parse(settings['date'])/1000;
         // alert(eventDate);
         currentDate= Math.floor($.now()/1000);
         //alert( eventDate +  ''  + currentDate );
         second =eventDate - currentDate ;
         days= Math.floor(second/(60*60*24));
         second -= days* 60*60*24;
         hours= Math.floor(second/(60*60));
         second -=  hours*60*60;
         
         minutes= Math.floor(second/60);
         second -= minutes*60;
         //alert(days);
         //alert(days + ' ' + hours);
        // alert(days + 'Days ' + hours + ' Hours ' + minutes + ' Minutes ' + second + ' Seconds');
         
         days = (String(days).length !==2) ? '0' + days: days;
         hours= (String(hours).length !==2) ? '0' + hours: hours ;
         minutes = (String(minutes).length !==2) ? '0' + minutes:minutes ;
         second = (String(second).length !==2) ? '0' + second: second;
         
         
         this_sel.find('.days').text(days);
         this_sel.find('.hours').text(hours);
         this_sel.find('.minutes').text(minutes);
         this_sel.find('.second').text(second);
        
         
      }
      count_exec();
      intervel =setInterval(count_exec,1000);
   } 
})(jQuery);

