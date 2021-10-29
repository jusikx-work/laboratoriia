<?php
    session_start();
?>




<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/icon-transparent-black.svg">
    <title>Профіль</title>
</head>
<body class="profile-body">
    <div class="wrapper">
        <header class="header">
            <div class="header__container">        
                <div class="header__logos">
                    <a href="index.php" class="log-2">
                        <img src="images/icon-transparent-black.svg" alt="logo icon" aria-label="логотип">
                    </a>
                    <a href="index.php" class="log" aria-label="логотип">
                        Лабораторія
                    </a>
                </div>        
                <div class="div"></div>
                <nav class="menu">
                    <ul class="menu__list">
                        <?php
                            if(isset($_SESSION["useruid"])){
                                //echo "<li class='menu__item'><a href='profile.php' class='menu__link'>PROFILE</a></li>";
                                //echo "<li class='menu__item'><a href='includes/logout.inc.php' class='menu__link'>LOG OUT</a></li>";
                            }
                            else{
                                //echo '<li class="menu__item"><a href="signup.php" class="menu__link _signup" aria-label="Зареєструватися">Зареєструватися</a></li>';
                                //echo '<li class="menu__item"><a href="login.php" class="menu__link _login">Увійти до кабінету</a></li>';
                            }
                        ?>
                    </ul>
                </nav>
            </div>
        </header>
        <main class="profile">
            <h1 class="profile__title">
                Профіль
            </h1>
            <?php
                echo "<p class='profile__greeting'>Вітаю, <span>" . $_SESSION["useruid"] . "</span></p>";
                echo "<a href='includes/logout.inc.php' class='logout__link' aria-label='вийти'>Вийти з аккаунта</a>"
            ?>  
        </main>
    </div>
</body>
</html>