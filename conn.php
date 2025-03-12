<?php



$username = "root";
$password = "";
$server = "localhost";
$database = "facebook";

$conn = mysqli_connect($server, $username, $password, $database);

if($conn){
    ?><script>
        // prompt("Connection successful")
        </script><?php
} else{
    ?><script>
        // prompt("Sorry! you are failed")
        </script>
        <?php

}

?>