const moduleAddData = document.getElementById('moduleAddData');
const moduleAddImg = document.getElementById('moduleAddImg');
const moduleAddPasport = document.getElementById('moduleAddPasport');
const moduleAddDriver = document.getElementById('moduleAddDriver');
const buttonAddImg = document.getElementById('buttonAddImg');
const buttonAddPasport = document.getElementById('buttonAddPasport');
const buttonAddDriver = document.getElementById('buttonAddDriver');
buttonAddImg.addEventListener('click', () => {
    if (getComputedStyle(moduleAddData).display == 'none') {
        moduleAddData.style.display = 'block';
        if (getComputedStyle(moduleAddImg).display == 'none') {
            moduleAddImg.style.display = 'block';
            moduleAddImg.querySelector('.background-module__close-block').addEventListener('click', () => {
                if (getComputedStyle(moduleAddImg).display == 'block');
                moduleAddData.style.display = 'none';
                moduleAddImg.style.display = 'none';
            });
        }
    }
});
buttonAddPasport.addEventListener('click', () => {
    if (getComputedStyle(moduleAddData).display == 'none') {
        moduleAddData.style.display = 'block';
        if (getComputedStyle(moduleAddPasport).display == 'none') {
            moduleAddPasport.style.display = 'block';
            moduleAddPasport.querySelector('.background-module__close-block').addEventListener('click', () => {
                if (getComputedStyle(moduleAddPasport).display == 'block');
                moduleAddData.style.display = 'none';
                moduleAddPasport.style.display = 'none';
            });
        }
    }
});
buttonAddDriver.addEventListener('click', () => {
    if (getComputedStyle(moduleAddData).display == 'none') {
        moduleAddData.style.display = 'block';
        if (getComputedStyle(moduleAddDriver).display == 'none') {
            moduleAddDriver.style.display = 'block';
            moduleAddDriver.querySelector('.background-module__close-block').addEventListener('click', () => {
                if (getComputedStyle(moduleAddDriver).display == 'block');
                moduleAddData.style.display = 'none';
                moduleAddDriver.style.display = 'none';
            });
        }
    }
});