
<div class="container">
    <div class="row">
        @foreach ($demandes as $index => $demande)
        <div class="col-md-4">
            <div class="card card-body">
                <a href="{{ url('demande/'. $demande->id) }}">
                    <h2>
                        {{ $demande->besoin }}
                    </h2>
                </a>
                <p>Ecrit par: {{ $demande->nom_complet }}</p>
                <p>Pour: {{ $demande->cible_demande }}</p>
                <p>Telephone: {{ $demande->telephone }}</p>
                <p>Le: {{ $demande->created_at }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>