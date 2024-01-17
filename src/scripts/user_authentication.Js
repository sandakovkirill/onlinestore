let regForm = document.getElementById('regForm');
let logForm = document.getElementById('logForm');
let ButtonChange = document.getElementsByClassName('changeButton')[0];

ButtonChange.onclick = function(event) {
    event.preventDefault();
    logForm.classList.add('display-none');
    regForm.classList.remove('display-none');
};

