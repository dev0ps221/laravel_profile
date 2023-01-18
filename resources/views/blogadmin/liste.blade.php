
<div class="container">
    <div class="row">
        @foreach ($articles as $index => $article)
        <div class="col-md-4">
            <div class="card card-body">
                <a href="{{ url('article/'. $article->id) }}">
                <h2>
                        {{ $article->titre }}
                    </h2>
                </a>
            <p>Ecrit par: {{ $article->auteur }} | date: {{ $article->created_at }}</p>
            <div class="row">
                <div class="col">
                    <a href="{{ url('/blogadmin/modifier/'. $article->id) }}" class="btn btn-outline-primary">Modifier</a>
                </div>
                <div class="col">
                    <form action="{{ url('/blogadmin/supprimer/'. $article->id) }}" method="POST" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
        @endforeach
    </div>
</div>