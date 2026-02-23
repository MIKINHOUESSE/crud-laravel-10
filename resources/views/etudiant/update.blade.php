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
                <h1>MODIFIER UN ETUDIANT - LARAVEL 10</h1>
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
                <form action="/update/traitement/{{ $etudiant->id }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-control">
                        <label>Nom</label>
                        <input type="text" class="form-control" name="nom" value="{{ $etudiant->nom }}">
                    </div>

                    <div class="form-control">
                        <label>Prénom</label>
                        <input type="text" class="form-control" name="prenom" value="{{ $etudiant->prenom }}">
                    </div>

                    <div class="form-control">
                        <label>Classe</label>
                        <input type="text" class="form-control" name="classe" value="{{ $etudiant->classe }}">
                    </div>

                    {{-- Afficher photo actuelle --}}
                    @if ($etudiant->photo)
                        <img src="{{ asset('storage/' . $etudiant->photo) }}" width="120">
                    @endif
                    <input type="file" name="photo">

                    <hr>

                    <button type="submit" class="btn btn-primary">Modifier l'étudiant</button>
                </form>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
