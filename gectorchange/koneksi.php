<?php
$conn=mysqli_connect('localhost','root','','kitw4662_gcpetro');
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>