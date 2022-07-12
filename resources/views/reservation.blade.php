<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Document</title>
    <style>
        form{
            width: 50%;
            margin: auto;
        }
        h3{
            margin-top: 80px;
            text-align: center;
        }
        button{
            margin-top: 30px;
        }
        input{
            margin-top: 5px;
        }
        label{
            margin-top: 5px;
        }
        p{
            margin-bottom: -10px;
        }
    </style>
</head>
<body>
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" >AIR_LOGO_FANGUINE_KOUTA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Acceuil</a>
          </li>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/listevol">Liste des vols</a>
          </li>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/reservation">Reservation</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

    <h3>Reservation</h3>
<form>
  <div class="form-row">
    <div class="form-group col-md-9">
      <label for="inputtexte">Nom</label>
      <input type="texte" class="form-control" id="inputtexte" placeholder="Entrez votre nom svp">
    </div>
    <div class="form-group col-md-9">
      <label for="inputtexte">Prenom</label>
      <input type="texte" class="form-control" id="inputtexte" placeholder="Entrez votre prenom svp">
    </div>
  </div>
  <div class="form-check">
    <p>Sexe:</p>
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
    <label class="form-check-label" for="exampleRadios1">
       Homme
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
    <label class="form-check-label" for="exampleRadios2">
        Femme
    </label>
  </div>

  
    <div class="form-group col-md-9">
      <label for="inputState">Choisir le vol</label>
      <select id="inputState" class="form-control">
        <option selected></option>
        <option>Air France</option>
        <option>Sky Mali</option>
        <option>Ethiopian Airlines</option>
      </select>
    </div>
    <div class="form-group col-md-9">
      <label for="inputState">Choisir la classe</label>
      <select id="inputState" class="form-control">
        <option selected></option>
        <option>Classe B</option>
        <option>Classe A</option>
      </select>
    </div>
    
    <button type="submit" class="btn btn-primary">Reserver</button>
</form>
    </div>
</body>
</html>