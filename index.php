<?php include('server.php');
if(isset($_SESSION['teamname']))
 {
     include('timer.php');
   if(isset($end_time))
   {
     header('location:problems.php');
   }
   else {

 ?>
<html>
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link href="css/index.css" rel="stylesheet">
    <script src="js/index.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style type="text/css">
        .bs-example{
        	margin: 20px;
        }
    </style>
</head>



<body>
 <div id="main" style="padding-left:150px; padding-right: 170px; padding-top: 100px;">

   <div class="bs-example">
     <div style="font-size:30px; padding:10px" class="pull-right"> <i >Welcome : </i> <b><?php echo $_SESSION['teamname']; ?></b></div>
       <div class="panel panel-default">
           <div class="panel-body">
             <h1>Instructions!</h1>

             <h3><li>There are total 6 problems and you will be given 3 hous to complete them</li><br>
             <li>Each question will have some test cases on which we will check your code</li><br>
             <li>You have to upload your with .cpp extesion </li><br>
             <li>you can see your score on leaderboard on the right navgiational pane</li><br>
           </h3>

           </div>
           <div class="panel-footer clearfix">
               <div class="pull-right">
                 <form method="post">
                  <button type=submit name="tb"  class="btn  btn-primary " >Conitnue</button>
                </form>
               </div>
           </div>
       </div>
   </div>
</div>
</body>
</html>







<?php }}
else {
    header('location:login.php');
}
 ?>
