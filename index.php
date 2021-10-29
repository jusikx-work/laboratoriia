<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Лабораторні роботи онлайн" />
    <meta property="og:image" content="https://cdn.discordapp.com/attachments/696640023101046824/888888949953679420/logo_1.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/icon-transparent-black.svg">
    <title>Головна</title>
</head>
<body>
    <div class="wrapper">
        <section class="fullscreen">
            <div class="fullscreen__media">
                <video src="images/main.mp4" autoplay muted loop></video>
            </div>
            <div class="fullscreen__container">
                <header class="header">
                    <div class="header__container">
                        <div class="div">
                            
                        </div>
                        <div class="header__burger _main">
                            <span></span>
                        </div>
                        <nav class="menu">
                            <ul class="menu__list main-menu__list">
                                <?php
                                    if(isset($_SESSION["useruid"])){
                                        echo "<li class='menu__item'><a href='menu.php' class='menu__link main__link' aria-label='перейти до практичних'>Перейти до практичних</a></li>";
                                        echo "<li class='menu__item'>
                                                <a href='profile.php' class='menu__profile' aria-label='профіль'>
                                                    <div class='profile__icon-1'></div>
                                                    <div class='profile__icon-2'></div>
                                                </a>
                                            </li>";
                                    }
                                    else{
                                        echo '<li class="menu__item"><a href="signup.php" aria-label="зареєструватися" class="menu__link _signup">Зареєструватися</a></li>';
                                        echo '<li class="menu__item"><a href="login.php" aria-label="увійти" class="menu__link _login">Увійти до аккаунта</a></li>';
                                    }
                                ?>
                            </ul>
                        </nav>
                    </div>
                </header>
                <div class="logo">
                    <div class="logo__images">
                        <a href="menu.php" class="logo__image-1" aria-label="логотип">
                            <img src="images/icon-white-black.svg" alt="велика іконка логотипу">
                        </a>
                        <a href="menu.php" class="logo__image-2" aria-label="логотип">
                            <img src="images/logo-white-black.png" alt="великий логотип">
                        </a>
                    </div>
                    <h1 class="logo__title">
                        Лабораторні роботи онлайн
                    </h1>
                    
                </div>
            </div>
        </section>
        <section class="description">
            <div class="description__container">
                <div class="description__content">
                    <h2 class="description__title">
                        Навчання має приносити користь та задоволення
                    </h2>
                    <div class="description__text">
                        <p>Сучасна освіта не можлива без інтерактивного навчання. Водночас найважливішим у навчанні є розуміння практичної складової: це те, що знадобиться нам у повсякденному житті. Часто можна почути від учнів щось накшталт: "А навіщо це мені?" Цю проблему покликані вирішити лабораторні роботи. Однак, далеко не кожна лабораторія може забезпечити належну атмосферу та обладнання для комфортного навчання. Більше того, згадайте, коли Ви останній раз ходили до лабораторії з метою навчання. Таких людей переважна меншість. </p>
                        <p>Віртуальна лабораторія хоче це змінити.</p>
                        <p>Навчання має перерости у хобі, вид дозвілля, а не покарання чи обов'язок. Заохочувати до розвитку або давати поради. Тому ми готові представити проєкт «Віртуальна лабораторія», що має на меті урізноманітнити освіту, перетворити навчання у просте, інтерактивне, ефективне.</p>
                    </div>
                </div>
                <div class="description__image">
                    <img src="images/description.png" alt="ipad with logo">
                </div>
            </div>
            <div class="explanation__container">
                <div class="explanation__3d-model">                


                    <img src="images/u.webp" alt="man teachs another man">


                </div>
                <div class="explanation__content">
                    <h2 class="explanation__title">
                        Щоб навчальні заклади розвивали, а не примушували
                    </h2>
                    <div class="explanation__text">
                        <p>
                            Ми розуміємо, що за інтерактивним навчанням онлайн майбутнє. Саме освіта змінює мільйони доль українців щомиті. Ми прагнемо знищити стереотипи щодо навчання, показати практичну складову кожного досліду. Інтерактивний інтерфейс та анімації якнайкраще справляються з цим завданням.
                        </p>
                        <p>
                            Навчайтесь вдома, на прогулянці, у метро, кафе чи автобусі.
                        </p>
                    </div>
                </div>
            </div>
            <div class="description__video">
                <iframe src="https://www.youtube.com/embed/aq2CnfHX3Vk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </section>
        <section class="try">
            <div class="try__container">
                <h2 class="try__title">
                    Спробуй власноруч
                </h2>
                <p class="try__text">
                    Віртуальна лабораторія - це платформа, що дозволяє поринути у виконання практичних робіт прямо зі свого девайсу у комфортній атмосфері.
                    Ви можете потестувати механіку Віртуальної Лабораторії вже зараз. Наразі наявні кілька прикладів інтерактивних 3D лабораторних.
                </p>
                <div class="try__buttons">
                    <a href="menu.php" class="try__button-1"><img src="images/icon-transparent-black.svg" alt="маленька іконка логотипу" aria-label='спробувати'></a>
                    <a href="menu.php" class="try__button-2" aria-label='спробувати'>Спробувати</a>
                </div>
                
            </div>
        </section>
        <section class="posters">
            <div class="posters__container">
                <div class="posters__poster-1">
                    <img src="images/poster-1.png" alt="великий постер мокап з можливостями додатку">
                </div>
                <div class="posters__poster-2">
                    <img src="images/poster-2.png" alt="великий постер мокап з можливостями додатку">
                </div>
            </div>    
        </section>
        <footer class="footer">
            <div class="footer__container">
                <div class="footer__row-1">
                    <div class="footer__p">
                        <p>Більше про проєкт:</p>
                        <p>у мережах -></p>
                    </div>
                    <div class="footer__social-networks">
                        <p>Стежте за проєктом тут:</p>
                        <div class="footer__social-networks-links">
                            <a href="https://www.instagram.com/jusikx/" aria-label="інстаграм"><img src="images/instagram-icon-white.svg" alt="іконка інстаграму"></a>
                            <a href="https://t.me/jusikx_lab" aria-label="телеграм"><img src="images/telegram-white.svg" alt="іконка телеграму"></a>
                            <a href="https://www.youtube.com/channel/UCq5wUcRSS3FyNZ392ZrvZlw" aria-label="ютуб"><img src="images/youtube-white.svg" alt="іконка ютубу"></a>
                        </div>
                    </div>
                </div>
                <div class="footer__row-2">
                    <div class="footer__logos">
                        <div class="logos__images">
                            <a href="index.php" class="log-2">
                                <img src="images/icon-transparent-white.svg" alt="logo icon" aria-label="логотип">
                            </a>
                            <a href="index.php" class="log" aria-label="логотип">
                                Лабораторія
                            </a>
                        </div>
                        <div class="logos__text">
                            <p>laboratoriia.tech</p>
                            <p>2021</p>
                        </div>
                    </div>
                    <div class="footer__design-system">
                        <p>Дизайн система:</p>
                        <a href="https://thedigital.gov.ua/news/diia_design" aria-label='дизайн система'>diia.fedoriv.com</a>
                    </div>
                </div>        
            </div>
            <div class="footer__end-message">
                Jusik X 
            </div>
        </footer>
    </div>    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>