<section id="view" class='container-fluid'>
    <div class="card-header">
        <h3 class="card-title">
            <?php
                echo ucfirst($ldview);
            ?>
        </h3>
    </div>    
    <div class="card-body">
        {{ $ldview == 'liste' ? view("blogadmin.$ldview",['articles'=>$articles]) : ($ldview == 'modifier' ? view("blogadmin.$ldview",['article'=>$article]) : view("blogadmin.$ldview"))}}
    </div>
</section>