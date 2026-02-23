<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD IN LARAVEL 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>AJOUTER UN ETUDIANT - LARAVEL 10</h1>
                <hr>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger"> {{ $error }}</li>
                    @endforeach
                </ul>
                <form action="/ajouter/traitement" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-control">
                        <label for="Nom">Nom</label>
                        <input type="text" class="form-control" id="Nom" name="nom">
                    </div>
                    <div class="form-control">
                        <label for="Prenom">Prénom</label>
                        <input type="text" class="form-control" id="Prenom" name="prenom">
                    </div>
                    <div class="form-control">
                        <label for="Classe">Classe</label>
                        <input type="text" class="form-control" id="Classe" name="classe">
                    </div>
                    <div class="form-control">
                        <label for="photo">Photo d'identité</label>
                        <input type="file" class="form-control" id="photo" name="photo">
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary">Ajouter un étudiant</button>
                    <br><br>
                    <a href="/etudiant" class="btn btn-danger"> Revenir sur la liste des étudiants !!!</a>
                </form>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
