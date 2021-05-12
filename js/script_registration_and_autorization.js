//open module block
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