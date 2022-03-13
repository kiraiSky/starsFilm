<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Inserir Filme</title>
</head>
<body>

<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand logo" href="index.php">Stars Film</a>
    <form class="d-flex">
      <button class="btn btn-outline-danger" type="submit">Deslogar</button>
    </form>
  </div>
</nav>

<div class="container">
  <form action="insert.php" method="post" enctype="multipart/form-data">
    <div class="form-group row">
      <label class="col-4 col-form-label" for="nome">Nome</label> 
      <div class="col-8">
        <input id="nome" name="nome" placeholder="The Matrix" type="text" class="form-control" required="required">
      </div>
    </div>
    <div class="form-group row">
      <label for="categoria" class="col-4 col-form-label">Categoria</label> 
      <div class="col-8">
        <input id="categoria" name="categoria" placeholder="Ação" type="text" class="form-control">
      </div>
    </div> 
    <div class="mb-3">
      <label for="arquivo" class="form-label">Capa do filme</label>
      <input class="form-control" type="file" id="arquivo" name="arquivo">
    </div>
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Adicionar</button>
      </div>
    </div>
  </form>
</div>
  
</body>
</html>