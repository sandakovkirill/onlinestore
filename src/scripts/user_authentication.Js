let regForm = document.getElementById('regForm');
let logForm = document.getElementById('logForm');

let ButtonChange = document.getElementsByClassName('changeButton')[0];
let ButtonRegistration = document.getElementsByClassName('button-reg')[0];
let ButtonAuthorization = document.getElementById('button-authorization');

const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
let registrationInput = document.getElementsByClassName("form-input");
let errorMessage = document.getElementsByClassName("error-message")
let errorMessageText = document.getElementsByClassName("error-message-text");

ButtonChange.onclick = function(event) {
    event.preventDefault();
    logForm.classList.add('display-none');
    regForm.classList.remove('display-none');
};
logForm.addEventListener('submit', function(event){
    event.preventDefault;
    
});
regForm.addEventListener('submit', function(event) {
    event.preventDefault();
    let errorMessage = document.getElementsByClassName("error-message")
    let errorMessageText = document.getElementsByClassName("error-message-text");
    
    let registrationInputEmail = registrationInput[2];

    let isFormValid = true;
    
    for (let i = 2; i < registrationInput.length; i++) {
        if (registrationInput[i].value === '') {
            registrationInput[i].classList.add('error-border');
            errorMessage[i].classList.add('display-block');
            errorMessageText[i].textContent = 'Вы не заполнили поле, повторите попытку.';
            isFormValid = false;
        }
    }
    for (let i = 4; i < registrationInput.length; i++) {
        if (registrationInput[i].value.length <= 8) {
            registrationInput[i].classList.add('error-border');
            errorMessage[i].classList.add('display-block');
            errorMessageText[i].textContent = 'Минимальное число символов в пароле 8 символов';
            isFormValid = false;
        }
    }
    if(!emailPattern.test(registrationInputEmail.value)){
        registrationInputEmail.classList.add('error-border');
        errorMessage[2].classList.add('display-block')
        errorMessageText[2].textContent = 'Поле email должно быть в формате адреса электронной почты.';
        isFormValid = false;
    }
    if (isFormValid) {
        regForm.submit(); // Отправка формы
    }
});
logForm.addEventListener('submit', function(event){
    event.preventDefault();
    let isFormValid = true;
    if(!emailPattern.test(registrationInput[0].value)){
        registrationInput[0].classList.add('error-border');
        errorMessage[0].classList.add('display-block')
        errorMessageText[0].textContent = 'Поле email должно быть в формате адреса электронной почты.';
        isFormValid = false;
    }if(registrationInput[1].value <= 8){
        registrationInput[1].classList.add('error-border');
        errorMessage[1].classList.add('display-block')
        errorMessageText[1].textContent = 'Вы ввели неверный пароль';
    }
    if (isFormValid) {
        regForm.submit(); // Отправка формы
    }
});



