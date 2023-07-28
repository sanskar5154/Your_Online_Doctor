<?php
$username = 'root';
$password = '';
$server = 'localhost';
$db = 'YourOnlineDoctor';

$cont = mysqli_connect($server,$username,$password,$db);

if($cont){
    ?>
    <script>
   //   alert("connection successfull");
    </script>
     <?php
}
else{
   die('no connection'.mysqli_connect_error());
}
?>