<nav> 
        <a href="index.html"><img src="./static/images/logo.png" alt="hero" id="logo"></a>
        <ul>
            <li><a href=".">Home</a></li>
            <li><a href="?controller=stage">Internships</a></li>
            <li><a href="?controller=etudiant">Students list</a></li>
            <li><a href="?controller=etudiant&action=create">Register as student</a></li>
            
            <?php if(isset($_SESSION['user'])) echo '
                <li><button><a href="?controller=etudiant&action=logout">Logout</a></button></li>
                <li><a href="?controller=etudiant&action=edite&email='.$_SESSION['user'].'">Edite profile</a></li>
            '; 
            if  (isset($_SESSION['user']) and $_SESSION['role'] == 0) {
                echo '<li><a href="?controller=stage&action=create">Add intership</a></li>';
            }
            else echo '<li><button><a href="?controller=etudiant&action=loginView">Login</a></button></li>'?>
        </ul>
    </nav>