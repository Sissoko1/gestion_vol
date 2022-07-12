<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
         h3{
            margin-top: 100px;
            text-align: center;
        }
        table{
            margin-top: 50px;
        }
    </style>
    <title>Document</title>
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
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Recherche</button>
        </form>
      </div>
    </div>
  </nav>
</header>

    <h3>Liste des vols</h3>

<div>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Code_vol</th>
      <th scope="col">Date depart</th>
      <th scope="col">Heure depart</th>
      <th scope="col">Nbre de place class A</th>
      <th scope="col">Nbre de place class B</th>
      <th scope="col">prix pour la class A</th>
      <th scope="col">prix pour la class B</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>AF_1434</td>
      <td>01/08/2022</td>
      <td>00H 30min</td>
      <td>123 place</td>
      <td>124 place</td>
      <td>500euro</td>
      <td>500euro</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Sk_223</td>
      <td>01/02/2022</td>
      <td>02H 00min</td>
      <td>143 place</td>
      <td>103 place</td>
      <td>400euro</td>
      <td>400euro</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Ea_342</td>
      <td>13/12/2022</td>
      <td>01H 45min</td>
      <td>200 place</td>
      <td>150 place</td>
      <td>150euro</td>
      <td>200euro</td>
    </tr>
  </tbody>
</table>
</div>

</body>
</html>