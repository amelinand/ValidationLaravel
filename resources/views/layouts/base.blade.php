<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @yield('css')

    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar navbar-dark bg-dark">
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Accueil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/characters">Les Personnages</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/addCharacter">Ajouter Un Personnage</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/designers">Les Dessinateurs</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/addDesigner">Ajouter Un Dessinateur</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer></footer>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>