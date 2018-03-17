<?php include('db.php');
$teamname=$_SESSION['teamname'];
$sql="select end_time from user where teamname='$teamname'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$end_time=$row['end_time'];
?>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<p style=" outline: 2px groove black;  outline-offset: 10px;margin:20px;font-size:20px" id="demo" class="pull-right"></p>
<script>
 var t="<?php echo $end_time; ?>";
 t=t.replace(/-/g,"/");
 var countDownDate = new Date(t).getTime();

 // Update the count down every 1 second
 var x = setInterval(function() {

   // Get todays date and time
   var now = new Date().getTime();

   // Find the distance between now an the count down date
   var distance = (countDownDate+1800000) - now;

   // Time calculations for days, hours, minutes and seconds
   var days = Math.floor(distance / (1000 * 60 * 60 * 24));
   var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
   var minutes = (Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)));
   var seconds = Math.floor((distance % (1000 * 60)) / 1000);

   // Display the result in the element with id="demo"
   document.getElementById("demo").innerHTML = days + "d " + hours + "h "
   + minutes + "m " + seconds + "s ";

   // If the count down is finished, write some text
   if (distance < 0) {
     clearInterval(x);
     document.getElementById("demo").innerHTML = "EXPIRED";
     window.location.href=("\logout.php")
   }
 }, 1000);
 </script>
