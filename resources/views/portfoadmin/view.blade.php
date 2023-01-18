<section id="view" class='container-fluid'>
    <div class="card-header">
        <h3 class="card-title">
            <?php
                echo ucfirst($ldview);
            ?>
        </h3>
    </div>    
    <div class="card-body">
        {{ $ldview == 'demandes' ? view("portfoadmin.$ldview",['demandes'=>$demandes]) : ($ldview == 'messages' ? view("portfoadmin.$ldview",['messages'=>$messages]) : view("portfoadmin.$ldview"))}}
    </div>
</section>