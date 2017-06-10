<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:index.php');
}

?>

<html>
<head>
<title>Movie Quotes</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <a href="logout.php">Logout</a>
        <div style="width: 500px; margin:auto;">
           <h3>Welcome <?php echo $_SESSION['username']; ?></h3
        </div>
    </div>
<div>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
</style>
  <?php
  $link = mysqli_connect("127.0.0.1:49619", "azure", "6#vWHD_$", "localdb");

  // Check connection
  if($link === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  // Attempt select query execution
  $sql = "SELECT * FROM quotes";
  if($result = mysqli_query($link, $sql)){
      if(mysqli_num_rows($result) > 0){
          echo "<table>";
              echo "<tr>";
                  echo "<th>Quote</th>";
                  echo "<th>Movie</th>";
              echo "</tr>";
          while($row = mysqli_fetch_array($result)){
              echo "<tr>";
                  echo "<td>" . $row['quote'] . "</td>";
                  echo "<td>" . $row['movie'] . "</td>";
              echo "</tr>";
          }
          echo "</table>";
          // Free result set
          mysqli_free_result($result);
      } else{
          echo "No records matching your query were found.";
      }
  } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }

  // Close connection
  mysqli_close($link);
  ?>
</div>
    <div>
      <style>
      input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
      <form action="insert.php" method="post">
    <p>
        <label for="moviequote">Quote:</label>
        <input type="text" name="quote" id="quote_id">
    </p>
    <p>
        <label for="movie">Movie:</label>
        <input type="text" name="movie" id="movie_id">
    </p>
<input type="submit" value="Submit">
</form>
</div>
</body>
</html>
