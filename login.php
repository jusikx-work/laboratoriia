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
    <title>Вхід</title>
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
                                echo '<li class="menu__item"><a href="signup.php" class="menu__link _signup _login-page" aria-label="зареєструватися">Зареєструватися</a></li>';
                                //echo '<li class="menu__item"><a href="login.php" class="menu__link _login">Увійти до кабінету</a></li>';
                            }
                        ?>
                    </ul>
                </nav>
            </div>
        </header>
        <main class="log-in">
            <h2 class="log-in__title">
                Log In
            </h2>
            <form action="includes/login.inc.php" method="post">
                <div class="input-uid">
                    <input type="text" name="uid" placeholder=" " id="uid">
                    <label for="uid" class="uid-label">Логін або пошта...</label>
                </div>
                <div class="input-password">
                    <input type="password" name="pwd" placeholder=" " id="pwd" class="active">
                    <label for="pwd" class="pwd-label">Пароль...</label>
                    <div class="password-visability" onclick='toggleVisabilityIcon()'>
                        <img src="images/toggle-password-visability-icon-2.png" alt="показати пароль" id="toggle-password-visability-icon-2">
                        <img src="images/toggle-password-visability-icon-1.png" alt="приховати пароль" id="toggle-password-visability-icon-1">
                    </div>
                </div>
                <button type="submit" name="submit">Увійти</button>
            </form>
            <?php
            if(isset($_GET["error"])){
                if($_GET["error"] == "emptyinput"){
                    echo "<p class='error'>Fill in all fields!</p>";
                }
                else if ($_GET["error"] == "wronglogin"){
                    echo "<p class='error'>Incorrect login info!</p>";
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
























































