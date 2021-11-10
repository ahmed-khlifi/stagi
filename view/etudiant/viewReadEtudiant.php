

<div class="profile-cover student-cover ">
    <div class="container">
        <img src="./static/images/user.png" alt="student">
        <div>
            <h1><?php echo $Etudiant->getEmail(); ?></h1>
        </div>
    </div>
</div>
<div class="profile-description container">
    <p class="title"><span class="material-icons material-icons-outlined">info</span>About <?php echo $Etudiant->getEmail(); ?>:</p>
    <div class="card">
        <div>
            <p class="title desc-title"><span class="material-icons material-icons-outlined">description</span>Description</p>
            <p><?php echo $Etudiant->getDescription(); ?></p>
        </div>
        <div class="profile-info">
            <p class="title desc-title"><span class="material-icons material-icons-outlined">school</span><?php echo $Etudiant->getFac(); ?></p>
            <p class="title desc-title"><span class="material-icons material-icons-outlined">devices</span><?php echo $Etudiant->getLicence(); ?></p>
            <p class="title desc-title"><span class="material-icons material-icons-outlined">alternate_email</span><?php echo $Etudiant->getEmail(); ?></p>
        </div>
    </div>
</div>
