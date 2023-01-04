const quizData = [
 
    {
        question: "Do you workout?",
        a: "No I don't",
        b: "only walks",
        c: "1-2 times a week",
        
        correct: "a",
    },
    {
        question: "Enter your gender",
        a: "Male",
        b: "Female",
        c: "Others",
        correct: "b",
    },

    {
        question: "what is your BMI value?",
        a: "18-23",
        b: "24-28",
        c: "More than 28",
        
        correct: "a",
    },

    {
        question: "How much do you usually sleep?",
        a: "up to 5 hours",
        b: "5-6 hours",
        c: "7-8 hours",
        
        correct: "b",
    },
    {
        question: "How often do you eat out at restaurants?",
        a: "Almost everyday",
        b: "Once a week",
        c: "1-2 days in a month",
        
        correct: "a",
    },
    {
        question: "Do you skip breakfast?",
        a: "No I don't",
        b: "Yes",
        c: "Some times",
        
        correct: "a",
    },
    {
        question: "what is the most physically active thing you do in a day?",
        a: "I walk",
        b: "I workout",
        c: "Goes to gym",
        
        correct: "a",
    },
{
        question: "How much weight would you like to lose?",
        a: "3-5 kg",
        b: "5-10 kg",
        c: "more that 10 kg",
        images:{
            a: "assets/images/1500 diet.jpg",
            b: "assets/images/high protin.jpg",
            c: "assets/images/Low FAt diet-1256 (2).jpg",
           
        }
    },
];

const quiz = document.getElementById("quiz");
const answerEls = document.querySelectorAll(".answer");
const questionEl = document.getElementById("question");
const a_text = document.getElementById("a_text");
const b_text = document.getElementById("b_text");
const c_text = document.getElementById("c_text");

const submitBtn = document.getElementById("submit");

let currentQuiz = 0;
let score = 0;

loadQuiz();

function loadQuiz() {
    deselectAnswers();

    const currentQuizData = quizData[currentQuiz];

    questionEl.innerText = currentQuizData.question;
    a_text.innerText = currentQuizData.a;
    b_text.innerText = currentQuizData.b;
    c_text.innerText = currentQuizData.c;
    
}

function getSelected() {
    let answer = undefined;

    answerEls.forEach((answerEl) => {
        if (answerEl.checked) {
            answer = answerEl.id;
        }
    });

    return answer;
}

function deselectAnswers() {
    answerEls.forEach((answerEl) => {
        answerEl.checked = false;
    });
}

submitBtn.addEventListener("click", () => {
    // check to see the answer
    const answer = getSelected();

    if (answer) {
        if (answer === quizData[currentQuiz].correct) {
            score++;
        }

        currentQuiz++;
        if (currentQuiz < quizData.length) {
            loadQuiz();
        } else {
            quiz.innerHTML = `
                
                
                <button onclick="location.reload()">Reload</button>
                <img src="${quizData[quizData.length-1].images[answer]}"/>
            `;
            

        
        }
    }
});


