
    <h1>Ajouter un article</h1>


@if ($errors->any())

    <div class="alert alert-danger">

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach

        </ul>

    </div>

@endif

<form action="{{ url('blogadmin/nouveau') }}" method="POST">
    @csrf

    <div class="form-group mb-3">
        <label for="titre">Titre:</label>
        <input type="text" class="form-control" id="titre" placeholder="Entrez un titre" name="titre">
    </div>

    <div class="form-group mb-3">

        <label for="content">Ajouter le contenu:</label>
        <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>

    </div>


    <div class="form-group mb-3">
        <label for="auteur">Ajouter auteur:</label>
        <input type="auteur" class="form-control" id="auteur" value="{{Auth::user()->name}}" placeholder="auteur" name="auteur">
    </div>


    <button type="submit" class="btn btn-primary">Enregister</button>

</form>
