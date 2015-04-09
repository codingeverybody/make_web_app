<?php
$conn = mysqli_connect("localhost", "root", 111111);
mysqli_select_db($conn, "opentutorials");
$sql = "SELECT * FROM user WHERE pw='".$_GET['pw']."'";
$row = mysqli_fetch_assoc($result);
if($row["password"] == )
