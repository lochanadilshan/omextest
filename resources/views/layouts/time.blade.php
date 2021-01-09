[10:42 PM] Titu
    

<divclass="col-md-7 align-self-center">
<olclass="breadcrumb">
{​​​​​​​​{​​​​​​​​-- <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li> --}​​​​​​​​}​​​​​​​​
<?php
date_default_timezone_set("Asia/Calcutta");
$date =date("d-m-Y");
$time =date("h:i:sa");
?>
<script>
setInterval(function() {​​​​​​​​
varcurrentTime = newDate ( );    
varcurrentHours = currentTime.getHours ( );   
varcurrentMinutes = currentTime.getMinutes ( );   
varcurrentSeconds = currentTime.getSeconds ( );
currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;   
currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;    
vartimeOfDay = ( currentHours < 12 ) ? "AM" : "PM";    
currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;    
currentHours = ( currentHours == 0 ) ? 12 : currentHours;    
varcurrentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;
document.getElementById("timer").innerHTML = currentTimeString;
                }​​​​​​​​, 1000);

</script>
<liclass="breadcrumb-item active">{​​​​​​​​{​​​​​​​​$date}​​​​​​​​}​​​​​​​​&nbsp;<spanid="timer"></span></li>
</ol>
</div>

