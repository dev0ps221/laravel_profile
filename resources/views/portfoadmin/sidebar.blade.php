<aside id="blogadmin-menu" class='card col-md'>
    <div class="card-header">
        <h2 class="card-title">
            portfoadmin
        </h2>
    </div>
    <div class="card-body">
        <ul>
            <?php
                foreach($views as $view){
                    ?>
                        <a href="/portfoadmin/<?php echo $view?>">
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
<nav id="blognav">
    <h2>
        portfoadmin
    </h2>
    <ul>
        <?php
            foreach($views as $view){
                ?>
                    <a href="/portfoadmin/<?php echo $view?>">
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
</nav>
