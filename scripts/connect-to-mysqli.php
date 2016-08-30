<?php
// Host Name
$db_host = "localhost";
//$db_host = "smartcontent.db.11866540.hostedresource.com";
// SQL DB user
$db_username = "root";
//$db_username = "smartcontent";
// SQL DB pass
$db_pass = "";
//$db_pass = "L0ngr0051!";
// SQL connect DB Name
//$db_name = "smartcontent";
$db_name = "genesis1_genesisar";
// Run the actual connection here
$mysqli = mysqli_connect("$db_host","$db_username","$db_pass","$db_name") or die ("could not connect to mysqli");
?>
