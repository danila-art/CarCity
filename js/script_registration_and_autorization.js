//open and close module block
const buttonLogIn = document.getElementById('buttonLogIn');
const moduleBlockRegAuto = document.getElementById('moduleBlockRegAuto');
const blockRegistration = document.getElementById('blockRegistration');
const blockAutorization = document.getElementById('blockAutorization');
const registrationConnectAutorization = document.getElementById('registrationConnectAutorization');
const autorizationConnectRegistration = document.getElementById('autorizationConnectRegistration');
registrationConnectAutorization.addEventListener('click', () => {
    if (getComputedStyle(blockRegistration).display == 'block') {
        blockRegistration.style.display = 'none';
        blockAutorization.style.display = 'block';
    }
})
autorizationConnectRegistration.addEventListener('click', () => {
    if (getComputedStyle(blockAutorization).display == 'block') {
        blockRegistration.style.display = 'block';
        blockAutorization.style.display = 'none';
    }
})
buttonLogIn.addEventListener('click', () => {
    if (getComputedStyle(moduleBlockRegAuto).display == 'none' && getComputedStyle(blockAutorization).display == 'none' && getComputedStyle(blockRegistration).display == 'none') {
        moduleBlockRegAuto.style.display = 'block';
        blockAutorization.style.display = 'block';
    }
    const closeCollection = document.querySelectorAll('.block__close');
    closeCollection.forEach((elem) => {
        elem.addEventListener('click', () => {
            moduleBlockRegAuto.style.display = 'none';
            blockRegistration.style.display = 'none';
            blockAutorization.style.display = 'none';
        });
    });
});

// checked form registr
const formRegistration = document.getElementById('formRegistrattion');
formRegistration.addEventListener('submit', (event) => {
    let errorArrReg = [];
    event.preventDefault();
    const errorRepeatpassword = document.querySelector('.error-repeat-password');
    let inputCollection = formRegistration.querySelectorAll('.input__text');
    const regCheckBox = formRegistration.querySelectorAll('.input__check');
    inputCollection.forEach((inputElem) => {
        if (inputElem.value == '') {
            inputElem.placeholder = '???????? ???? ??????????????????';
            errorArrReg.push(false);
        }
    });
    if (inputCollection[4].value != inputCollection[5].value && inputCollection[5].value != '') {
        errorRepeatpassword.innerHTML = '???????????? ???? ??????????????????';
        errorArrReg.push(false);
        inputCollection[5].addEventListener('keydown', () => {
            errorRepeatpassword.innerHTML = '';
        });
    }
    // if (!regCheckBox.chacked) {
    //     errorArrReg.push(false);
    // }
    if (errorArrReg.length == 0) {
        formRegistration.submit();
    }
});


//checked form autorization
const formAutorization = document.getElementById('formAutorization');
formAutorization.addEventListener('submit', (event) => {
    event.preventDefault();
    let errorArrAuto = [];
    let inputCollection = formAutorization.querySelectorAll('.input__autorization');
    inputCollection.forEach((inputElem) => {
        if (inputElem.value == '') {
            inputElem.placeholder = '???????? ???? ??????????????????';
            errorArrAuto.push(false);
        }
    });
    if (errorArrAuto.length == 0) {
        formAutorization.submit();
    }
});