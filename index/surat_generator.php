<?php
$id_surat=$_GET['id'];
?>

<html>
 <head>
  <!-- Latest compiled and minified CSS -->

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

     <!-- jQuery library -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

     <!-- Latest compiled JavaScript -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
     <script src="logic_process.js"> </script>

 </head>
 <body>
  <div id='surat'>
  </div>
  <script>
   let id=<?php echo $id_surat ?>;
  </script>
 </body>
</html>

