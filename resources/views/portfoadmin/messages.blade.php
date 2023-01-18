
<div class="container">
    <div class="row">
        @foreach ($messages as $index => $message)
        <div class="col-md-4">
            <div class="card card-body">
                <a href="{{ url('message/'. $message->id) }}">
                    <h2>
                        {{ $message->message }}
                    </h2>
                </a>
                <p>Ecrit par: {{ $message->nom_complet }}</p>
                <p>Telephone: {{ $message->telephone }}</p>
                <p>Le: {{ $message->created_at }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>