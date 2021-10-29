//All answer options
const option1 = document.querySelector('.option1'),
option2 = document.querySelector('.option2'),
option3 = document.querySelector('.option3'),
option4 = document.querySelector('.option4');

//All our options 
const optionElements = document.querySelectorAll('.option');

const question = document.getElementById('question'),
numberOfQuestion = document.getElementById('number-of-question'),
numberOfAllQuestions = document.getElementById('number-of-all-questions');

let indexOfQuestion, //индекс текущего вопроса
indexOfPage = 0; //индекс страницы

const answersTracker = document.getElementById('answers-tracker');
const btnNext = document.getElementById('btn-next');

let score = 0; // итоговый результат викторини

const correctAnswer = document.getElementById('correct-answer'),
numberOfAllQuestions2 = document.getElementById('number-of-all-questions-2'),
btnTrуAgain = document.getElementById('btn-try-again');

const questions = [
    {
        question: 'У якій планеті вмістилися б усі інші планети сонячної системи?',
        options: [
            'Плутон',
            'Юпітер',
            'Венера',
            'Сатурн',
        ],
        rightAnswer: 1
    },
    {
        question: 'Яку планету людина уже не може побачити із Землі неозброєним оком?',
        options: [
            'Марс',
            'Юпітер',
            'Нептун',
            'Венера',
        ],
        rightAnswer: 2
    },
    {
        question: 'Які космічні об’єкти є найтяжчими у Всесвіті?',
        options: [
            'Планети',
            'Зірки',
            'Метеорити',
            'Чорні діри',
        ],
        rightAnswer: 3
    },
];

numberOfAllQuestions.innerHTML = questions.length; //выводим кол-во всех вопросов

const load = () => {
    question.innerHTML = questions[indexOfQuestion].question //сам вопрос 

    option1.innerHTML = questions[indexOfQuestion].options[0];
    option2.innerHTML = questions[indexOfQuestion].options[1];
    option3.innerHTML = questions[indexOfQuestion].options[2];
    option4.innerHTML = questions[indexOfQuestion].options[3];

    numberOfQuestion.innerHTML = indexOfPage + 1; //установка номера тукущей страницы
    indexOfPage++; //увеличение индекса старниці
};

let completedAnswers = [];

const randomQuestion = () => {
    let randomNumber = Math.floor(Math.random() * (questions.length));
    let hitDublicate = false;

    if(indexOfPage == questions.length){ 
        quizOver();
    } else {
        if(completedAnswers.length >= 0){
            completedAnswers.forEach(item => {
                if(item == randomNumber){
                    hitDublicate = true;
                }
            });
            if(hitDublicate == true){
                randomQuestion();
            } else {
                indexOfQuestion = randomNumber;
                load();
            }
        };
    };
    completedAnswers.push(indexOfQuestion);
};

const checkAnswer = el => {
    console.log(el.target.dataset.id);
    if (el.target.dataset.id == questions[indexOfQuestion].rightAnswer){
        el.target.classList.add('correct');
        updateAnswerTracker('correct');
        score++;
    } else {
        el.target.classList.add('wrong');
        updateAnswerTracker('wrong');
    }
    disabledOptions();
};

const disabledOptions = () => {
    optionElements.forEach(item => {
        item.classList.add('disabled');
        if(item.dataset.id == questions[indexOfQuestion].rightAnswer){
            item.classList.add('correct');
        }
    })
};

const enableOptions = () => {
    optionElements.forEach(item => {
        item.classList.remove('disabled', 'correct', 'wrong');
    })
};

const answerTracker = () => {
    questions.forEach(() => {
        const div = document.createElement('div');
        answersTracker.appendChild(div);
    })
};

const updateAnswerTracker = status => {
    answersTracker.children[indexOfPage - 1].classList.add(`${status}`);
};


const before = () => {
    if((!optionElements[0].classList.contains('disabled')) ){ //&& (indexOfPage == questions.length)
    alert('Вам треба обрати 1 з варіантів')
    } else{
    randomQuestion();
    enableOptions();
    }
};



btnNext.addEventListener('click', before);



for(option of optionElements){
    option.addEventListener('click', e => checkAnswer(e));
};



const quizOver = () => {
    document.querySelector('.quiz-over-modal').classList.add('active');
    correctAnswer.innerHTML = score;
    numberOfAllQuestions2.innerHTML = questions.length;
    submit();
};



const tryAgain = () => {
    window.location.reload();
};

btnTrуAgain.addEventListener('click', tryAgain);




window.addEventListener('load', () => {
    randomQuestion();
    answerTracker();
});


const submit = () => {
    if (score == questions.length){
        document.querySelector('#btn-try-again').classList.add('hidden');
        document.querySelector('#btn-submit').classList.remove('hidden');
        document.querySelector('.pr').classList.add('hidden');
    };
};




