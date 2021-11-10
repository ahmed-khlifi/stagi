<div class="container">
        <p class="title"><span class="material-icons material-icons-outlined">school</span>New students</p>
        <div class="card-container">
        <?php

        foreach($Etudiants as $Etudiant){
            if($Etudiant->getRole() == 0){
                continue;
            }
            echo ' <div class="card-container">
            <div class="card card-img">
                <img src="./static/images/user.png" alt="student">
                <div class="card-img-info">
                    <h4><strong>'.$Etudiant->getEmail().'</strong></h4>
                    <div>
                        <p class="title desc-title"><span class="material-icons material-icons-outlined">school</span>'.$Etudiant->getFac().'</p>
                        <p class="title desc-title"><span class="material-icons material-icons-outlined">devices</span>'.$Etudiant->getLicence().'</p>
                    </div>
                    
                    <button><a href="?controller=etudiant&action=read&email='.$Etudiant->getEmail().'" target="_blank">See more</a></button>';
                    if(isset($_SESSION['role']) && $_SESSION['role'] == 0){
                        echo '<div>
                        <button><a href=?controller=etudiant&action=edite&email='.$Etudiant->getEmail().' target="_blank">Edite</a></button>
                        <button style="background:#d41d1d"><a href=?controller=etudiant&action=delete&email='.$Etudiant->getEmail().' target="_blank">Delete</a></button>
                        </div>';
                    }
                echo'
                </div>
            </div>
            </div>';  
            
        }
        
        ?>
    </div>
    </div>