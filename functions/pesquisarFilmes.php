<?php

include_once('db/connection.php');

$sql = "SELECT idFilme, nomeFilme, categoria, vezesAvaliado, media, backgroundURL FROM filmes";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

	
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
		if($row["vezesAvaliado"] < 1)
		$row["vezesAvaliado"] = 1;
    echo ('<div class="movie-card">
		<div class="movie-header" style="background: url('. $row["backgroundURL"]. '); background-size:cover;">
			
		</div><!--movie-header-->
		<div class="movie-content">
			<div class="movie-content-header">
				<a href="#">
					<h3 class="movie-title">' . $row["nomeFilme"] . '</h3>
				</a>
				<div class="imax-logo"></div>
			</div>
			<div class="movie-info">
				<div class="info-section">
					<label>Nota média do Filme</label>
					<span>'. $row["media"] / $row["vezesAvaliado"] .'</span>
				</div><!--Nota-->
				<div class="info-section">
					<label>Avaliações</label>
					<span>'. $row["vezesAvaliado"] .'</span>
				</div><!--Avaliações-->
				<div class="info-section">
					<label>&#160;</label>
					<span><a href="#">Deletar</a></span>
				</div><!--Nota-->
			</div>
		</div><!--movie-content-->
	</div><!--movie-card-->');
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>