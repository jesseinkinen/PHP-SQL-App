<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'azure' with no password) */
// Check connection

$link = mysqli_connect("127.0.0.1:49619", "azure", "6#vWHD_$", "localdb");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$quote = mysqli_real_escape_string($link, $_REQUEST['quote']);
$movie = mysqli_real_escape_string($link, $_REQUEST['movie']);

// attempt insert query execution
$sql = "INSERT INTO quotes (quote, movie) VALUES ('$quote', '$movie')";
if(mysqli_query($link, $sql)){
    echo "<a href=home.php>Return</a>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>
