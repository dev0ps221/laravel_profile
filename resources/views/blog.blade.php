<link rel="stylesheet" href="{{URL::asset("css/blog.css")}}"/>
<section id='blog' class='container-fluid card'>
    <div class="card-header">
        <div class="card-title">
            <h2>
                mon blog
            </h2>
        </div>
    </div>
    <section id='blogfeed' class='d-flex flex-wrap flex-row'>
        <?php
            if(count($articles)){
                ?>
                @foreach ($articles as $index => $article)
                    <div class="card col col-sm article_blog mx-2">
                        <div class="card card-body">
                            <a href="{{ url('/blog/article/'. $article->id) }}">
                            <h2>
                                    {{ $article->titre }}
                                </h2>
                            </a>
                            <p>Ecrit par: {{ $article->auteur }} | date: {{ $article->created_at }}</p>
                            <div class="row">
                                <div class="col">
                                    <a href="{{ url('/blog/article/'. $article->id) }}" class="btn btn-outline-primary">Lire</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                @endforeach
                <?php
            }else{
                ?>
                    <p>
                        Le blog ne contient actuellement aucun post
                    </p>
                <?php
            }
        ?>
    </section>
</section>