/**
 * messageMonitor a jquery plugin used to manage the count of charcters
 * to be submitted as a SMS message
 * 
 * @package    resalty
 * @subpackage sms
 * @copyright  2010 Optimal Technology Solutions
 * @version    $Id:$
 * @since      4.0.3
*/

(function ($) {

   $.fn.messageMonitor = function(options) {

       var opts = $.extend( {}, $.fn.messageMonitor.defaults, options);
       var limits = opts.english;
       var countMessages = 1;
       var countChars = 0;
       var obj = null;
       var message = '';

       return this.each(
            function (){
                init(this);
            }
       );

       function init(obj){
           $(obj).change(checkChange);
           $(obj).keyup(checkChange);

           checkChange(obj);
       }

       function checkChange(e){

           if("target" in e) {
               obj = e.target;
           } else {
               obj = e;
           }

           obj = $(obj);

           message = obj.val();

           checkLimit();

           updateLimits();

           checkLimit();

           updateLimits();

           countChars = message.length + countNewLines();

           updateCountMessages();

           updateCounter();

       }

       function isAscii(){
           return message.match( /[^\x20-\x7E\t\n\r]+/g ) == null;
       }

       function checkLimit(){
           if( (message.length + countNewLines() )> limits.all ) {
               message = message.substr(0, limits.all )
               message = message.substr(0, limits.all - countNewLines() )
               obj.val( message );
           }
       }

       function updateLimits(){
           if ( isAscii() ) {
               limits = opts.english;
           }else {
               limits = opts.other;
           }
       }

       function updateCountMessages(){
           countMessages = 1;
           
           if( countChars > limits.first ) {
               countMessages = Math.ceil(  countChars / limits.afterFirst ) ;
           }
       }

       function updateCounter(){
           if ( opts.counter != null){
               opts.counter.val( countChars + ' ' + opts.localedMessage );
           }
       }

       function countNewLines() {

           var delimiter = '\n';
           var count = 0;
           
           if( message.indexOf('\r\n') != -1 ) {
               delimiter = '\r\n';
           } else if ( message.indexOf('\r') != -1 ) {
               delimiter = '\r';
           }

           var i =0;
           while( (i = message.indexOf(delimiter, i) ) != -1 ) {
               count++;
               i++;

               if ( message.length < i ) {
                   break;
               }
           }
           
           return count;
       }

   }


   $.fn.messageMonitor.defaults = {
       english : {all :160, first : 160, afterFirst : 153},
       other   : {all :70, first :  70, afterFirst : 67},
       counter : null,
       localedMessage: 'message'
   }

})(jQuery);