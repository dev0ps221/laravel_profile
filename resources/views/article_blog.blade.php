<link rel="stylesheet" href="{{URL::asset('/css/article_blog.css')}}">
<div class="container-fluid" id='article_blog'>
    <div class="card">
        <div class="card-body col-md-12">
            <div class="card-header">
                <h1 class='card-title'>{{ $article->titre }}</h1>
            </div>
            <div class='card-body'>
                <p class="lead card-text">{{ $article->content }}</p>
            </div>
            <div class="card-footer">
                <div class="card-body">
                    <p class='card-text'>Ecrit par: {{ $article->auteur }} | date: {{ $article->created_at }}</p>
                </div>
            </div>
        </div>
    </div>
</div>