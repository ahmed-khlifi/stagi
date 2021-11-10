<div class="apply-form" id="company-form">
        <form action="?controller=stage&action=edited" method="post">
            <p class="title"><span class="material-icons material-icons-outlined">notes</span>Fill out this form.</p>
            <div>
                <input type="text" name="name" placeholder="Company name" value=<?php echo $stage->getName(); ?>>
                <input type="email" name="email" placeholder="Email" value=<?php echo $stage->getEmail(); ?>>
            </div>
            <div>
                <input type="text" name="phone" placeholder="Phone" value=<?php echo $stage->getPhone(); ?>>
                <input type="text" name="location" placeholder="Location" value=<?php echo $stage->getLocation(); ?>>
            </div>
            <div>
                <input type="text" name="field" placeholder="Work field" value=<?php echo $stage->getField(); ?>>
            </div>
            <div>
                <textarea name="description" id="" cols="30" rows="8" placeholder="Give us more details about the company.."><?php echo $stage->getDescription(); ?></textarea>
            </div>
            <button>Submit</button>
        </form>
        <div>
            <h1>Welcome Admin</h1>
            <p>Add an internship offer here!</p>
            <span>This page is only visible for admins </span>
        </div>
    </div>