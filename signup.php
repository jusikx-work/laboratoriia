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
    <title>Зареєструватися</title>
</head>
<body>
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
                <div class="header__burger">
                    <span></span>
                </div>
                <nav class="menu">
                    <ul class="menu__list">
                        <?php
                            if(isset($_SESSION["useruid"])){
                                echo "<li class='menu__item'><a href='profile.php' class='menu__link' aria-label='профіль'>PROFILE</a></li>";
                                echo "<li class='menu__item'><a href='includes/logout.inc.php' class='menu__link' aria-label='вийти'>LOG OUT</a></li>";
                            }
                            else{
                                //echo '<li class="menu__item"><a href="signup.php" class="menu__link _signup">Зареєструватися</a></li>';
                                echo '<li class="menu__item"><a href="login.php" class="menu__link _login _signup-page" aria-label="увійти">Увійти до аккаунта</a></li>';
                            }
                        ?>
                    </ul>
                </nav>
            </div>
        </header>
        <main class="sign-up">
            <h2 class="sign-up__title">
                Sign Up
            </h2>
            <form action="includes/signup.inc.php" method="post">
                <div class="input-name">
                    <input type="text" name="name" placeholder=" " id="name">
                    <label for="name" class="name-label">Ваше ім'я...</label>
                </div>
                <div class="input-email">
                    <input type="text" name="email" placeholder=" " id="email">
                    <label for="email" class="email-label">Пошта...</label>
                </div>
                <div class="input-uid">
                    <input type="text" name="uid" placeholder=" " id="uid">
                    <label for="uid" class="uid-label">Логін...</label>
                </div>
                <div class="input-password">
                    <input type="password" name="pwd" placeholder=" " id="pwd" class="active">
                    <label for="pwd" class="pwd-label">Пароль...</label>
                    <div class="password-visability" onclick='toggleVisabilityIcon()'>
                        <img src="images/toggle-password-visability-icon-2.png" alt="показати пароль" id="toggle-password-visability-icon-2">
                        <img src="images/toggle-password-visability-icon-1.png" alt="приховати пароль" id="toggle-password-visability-icon-1">
                    </div>
                </div>
                <div class="input-repeat-password">
                    <input type="password" name="pwdrepeat" placeholder=" " id="pwdrepeat">
                    <label for="pwdrepeat" class="pwdrepeat-label">Повторіть пароль...</label>
                </div>
                
                <button type="submit" name="submit">Зареєструватися</button>
            </form>
            <?php
                if(isset($_GET["error"])){
                    if($_GET["error"] == "emptyinput"){
                        echo "<p class='error'>Fill in all fields!</p>";
                    }
                    else if ($_GET["error"] == "invaliduid"){
                        echo "<p class='error'>Choose a proper username!</p>";
                    }
                    else if ($_GET["error"] == "invalidemail"){
                        echo "<p class='error'>Choose a proper email!</p>";
                    }
                    else if ($_GET["error"] == "passwordsdontmatch"){
                        echo "<p class='error'>Passwords doesn't match!</p>";
                    }
                    else if ($_GET["error"] == "stmtfailed"){
                        echo "<p class='error'>Something went wrong, try again!</p>";
                    }
                    else if ($_GET["error"] == "usernametaken"){
                        echo "<p class='error'>Username or email are already taken!</p>";
                    }
                    else if ($_GET["error"] == "none"){
                        echo "<p class='success'>You have signed up!</p>";
                    }
            }
            ?>
        </main>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="js/script.js"></script>
    <script>
        function toggleVisabilityIcon(){
            var x = document.getElementById('pwd');
            var y = document.getElementById('toggle-password-visability-icon-2');
            var z = document.getElementById('toggle-password-visability-icon-1');

            if(x.type === 'password'){
                x.type = 'text';
                y.style.display = 'none';
                z.style.display = 'block';
            } else{
                x.type = 'password';
                y.style.display = 'block';
                z.style.display = 'none';
            }

        }
    </script>
</body>
</html>