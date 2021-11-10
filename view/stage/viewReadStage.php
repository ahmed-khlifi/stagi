<div class="profile-cover company-cover ">
        <div class="container">
            <img src="./static/images/company.png" alt="student">
            <div>
                <h1><?php echo $stage->getName(); ?></h1>
                <p class="title"><span class="material-icons">devices</span><?php echo $stage->getField(); ?></p>
                <p class="title"><span class="material-icons">location_on</span>Located <?php echo $stage->getLocation(); ?></p>
            </div>
        </div>
    </div>
    <div class="profile-description container">
        <p class="title"><span class="material-icons material-icons-outlined">info</span>About <?php echo $stage->getName(); ?>:</p>
        <div class="card">
            <div>
                <p class="title desc-title"><span class="material-icons material-icons-outlined">description</span>Description</p>
                <p><?php echo $stage->getDescription(); ?></p>
            </div>
            <div class="profile-info">
                <p class="title desc-title"><span class="material-icons material-icons-outlined">devices</span><?php echo $stage->getField(); ?></p>
                <p class="title desc-title"><span class="material-icons material-icons-outlined">location_on</span>Located in <?php echo $stage->getLocation(); ?></p>
                <p class="title desc-title"><span class="material-icons material-icons-outlined">alternate_email</span><?php echo $stage->getEmail(); ?></p>
                <p class="title desc-title"><span class="material-icons material-icons-outlined">phone</span>(+216) <?php echo $stage->getPhone(); ?></p>
            </div>
        </div>
    </div>