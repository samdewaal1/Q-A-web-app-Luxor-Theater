let questionIndex = 1;
showQuestions(questionIndex);

//Checks for keyboard input
document.addEventListener("keydown", nextQuestionKeyHandler)

function nextQuestion(n) {
    showQuestions(questionIndex += n);
}

//Only listens for the leftarrow key and the rightarrow key
function nextQuestionKeyHandler(e) {
    if (e.key === "ArrowLeft") {
        showQuestions(questionIndex -= 1);
    }
    else if (e.key === "ArrowRight") {
        showQuestions(questionIndex += 1);
    }
}

function showQuestions(n) {

    // Makes an array based on the amount of questions
    let questions = document.getElementsByClassName("questions");


    // Makes questions loop when at the end of array
    if (n > questions.length) {
        questionIndex = 1;
    }

    // Makes questions loop to the end when you go back on the first question
    if (n < 1) {
        questionIndex = questions.length;
    }

    // Hides all questions that shouldn't be active
    for (let i = 0; i < questions.length; i++) {
        questions[i].style.display = "none";
    }

    // Makes current question visible
    questions[questionIndex - 1].style.display = "block";
}