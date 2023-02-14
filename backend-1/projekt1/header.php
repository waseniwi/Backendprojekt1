<header>
            <!-- Logo och meny i headern -->
            <img src="../media/logo.svg" alt="Website logo" />
            <div id="logo">WikApp</div>

            <nav>
                <!-- Huvudmenyn -->
                <ul>
                    <li><a href="./index.php">Projekt 1</a></li>
                    <li><a href="./rapport.php">Rapport</a></li>
                    <li><a href="./profile.php">Profile</a></li>
                    <?php
                    if(isset($_SESSION['username'])){
                    print("Välkommen tillbaka " . $_SESSION['username']);
                    }
                    ?>
                </ul>
            </nav>
        </header>