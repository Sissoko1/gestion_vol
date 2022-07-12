<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

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
      </div>
    </div>
  </nav>
</header>
    <h1>AIR-FRANCE</h1>
    <img img src="{{URL('img/air.jpg') }}" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>
    <p class="lead">Air France est la compagnie aérienne nationale française, fondée le 7 octobre 1933.<br> Ses activités principales sont le transport de passagers, de fret ainsi que la maintenance et l'entretien des avions.<br> Elle dessert les principaux aéroports français ainsi que de nombreux aéroports étrangers.</p>

</body>
</html>