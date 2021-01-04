<?php
$servername = "localhost";
$username = "mpg-cms";
$password = "u8E6ZraShTHo0e0F";
$database = "mpg-cms";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "INSERT INTO pages (author, content, title)
  VALUES ('1', 'Wereld', 'Hallo')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";

} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<!-- 
CRUD
Create = INSERT Query
Read = SELECT Query
Update= UPDATE Query
Delete = DELETE Query
-->
</body>
</html>