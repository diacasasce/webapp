<?php
$servername = "localhost";
$username = "app";
$password = "123456";
$dbname = "web_app";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 
$sql="SELECT * FROM `wa_profile`";
$result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)) {
												$id=$row["id"];
												$det=$row["detalle"];
												echo "<br>'$id'- $det";
											}
?>