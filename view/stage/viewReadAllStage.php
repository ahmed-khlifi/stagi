<div class="container">
        <p class="title"><span class="material-icons material-icons-outlined">devices</span>internships</p>
        <div class="card-container">
        <?php

            foreach($stages as $stage){
                echo '
                    <div class="card">
                    <p class="card-title">'.$stage->getName().'</p>
                    <p>'.$stage->getDescription().'</p>
                    <p>
                        <strong>Field :</strong> <br />
                        '.$stage->getField().'
                    </p>
                    <p>
                        <strong>Location :</strong> <br />
                        '.$stage->getLocation().'
                    </p>
                    <button><a href=?controller=stage&action=read&email='.$stage->getEmail().' target="_blank">Apply now</a></button>';
                    if(isset($_SESSION['role']) && $_SESSION['role'] == 0){
                        echo '<div>
                        <button><a href=?controller=stage&action=edite&email='.$stage->getEmail().' target="_blank">Edite</a></button>
                        <button style="background:#d41d1d"><a href=?controller=stage&action=delete&email='.$stage->getEmail().' target="_blank">Delete</a></button>
                        </div>';
                    }
                echo'</div>';            
                
            ; }?>
            
        </div>
    </div>