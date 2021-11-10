<div class="apply-form">
        <div>
            <h1>Welcom <?php echo $_SESSION['user'] ?></h1>
            <p>You can change your profile information here</p>
        </div>
        <form action="?controller=etudiant&action=edited" method="post">
            <p class="title"><span class="material-icons material-icons-outlined">notes</span>Fill out this form.</p>
            <div>
                <input type="email" name="email" placeholder="Email" value=<?php echo $Etudiant->getEmail(); ?> readonly>
                <input type="password" name="password" placeholder="old or new password"> 
            </div>
            <div>
                <input type="text" name="fac" placeholder="Fac" value=<?php echo $Etudiant->getFac(); ?>>
                <input type="text" name="licence" placeholder="Licence" value=<?php echo $Etudiant->getLicence(); ?>>  
            </div>
           
            <div>
                <textarea name="description" id="" cols="30" rows="8" placeholder="Short description about you.." ><?php echo $Etudiant->getDescription(); ?></textarea>
            </div>
            <button>Submit</button>
        </form>
    </div>
