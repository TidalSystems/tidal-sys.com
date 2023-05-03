/**
 * @package    resalty
 * @subpackage sms
 * @copyright  2010 Optimal Technology Solutions
 * @version    $Id:$
 * @since      4.0.3
*/

$(document).ready(function() {
    
    $('#SmsMessage').messageMonitor( {counter : $('#SmsCounter'), localedMessage : $('#SmsCounter').attr('localed-message')} );

} );




