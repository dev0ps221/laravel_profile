<aside id="blogadmin-menu" class='card col-md'>
    <div class="card-header">
        <h2 class="card-title">
            blogadmin
        </h2>
    </div>
    <div class="card-body">
        <ul>
            <?php
                foreach($views as $view){
                    ?>
                        <a href="/blogadmin/<?php echo $view?>">
                            <li <?php if($ldview == $view){echo "class='actual'";}?>>
                                <?php echo $view; ?>
                            </li>
                        </a>
                    <?php
                }
            ?>
            <a href="/logout">
                <li>
                    deconnexion
                </li>
            </a>
        
        </ul>
    </div>
</aside>