<?php

include_once('../db/connection.php');

$sql = "SELECT id, nomeFilme, categoria, vezesAvaliado, media FROM starsFilm";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["nomeFilme"]. " " . $row["categoria"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>