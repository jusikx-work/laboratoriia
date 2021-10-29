<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Вікторина</title>
    <link rel="icon" href="../images/icon-transparent-black.svg">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="game-body">
    <div class="wrapper">
        <header class="header">
            <div class="header__container">        
                <div class="header__logos">
                    <a href="../index.php" class="log-2">
                        <img src="../images/icon-transparent-black.svg" alt="logo icon" aria-label="Логотип">
                    </a>
                    <a href="../index.php" class="log" aria-label="Логотип">
                        Лабораторія
                    </a>
                </div>        
            </div>
        </header>
        <main>
            <div class="quiz-over-modal">
                <div class="content">
                    <h1>Добре</h1>
                    <p class="pr">Ти відповів на
                        <span id="correct-answer"></span> з
                        <span id="number-of-all-questions-2"></span> питань
                    </p>
                    <button id="btn-try-again">Спробувати ще</button>
                    <a id="btn-submit" class="hidden" href="lab-2.php">Перейти до практичної</a>
                </div>
            </div>
            <div class="quiz-container">
                <div class="question-number">
                    <h3>Питання 
                        <span id="number-of-question"></span>
                        з
                        <span id="number-of-all-questions"></span>
                    </h3>
                </div>
                <div id="question"></div>
                <div class="options">
                    <div data-id="0" class="option option1"></div>
                    <div data-id="1" class="option option2"></div>
                    <div data-id="2" class="option option3"></div>
                    <div data-id="3" class="option option4"></div>
                </div>
                <div class="button">
                    <button id="btn-next">Наступне</button>
                </div>
                <div id="answers-tracker">
                    
                </div>
            </div>
        </main>
        <script src="../js/game-2.js"></script>
    </div>
</body>
</html>

