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

const bookingBox = document.querySelectorAll('.booking__box');
bookingBox.forEach((elem) => {
    const blockDay = elem.querySelector('.booking__day-end');
    const inputHiddenDay = elem.querySelector('.bookingDayEnd');
    const blockTimeInterval = elem.querySelector('.booking__time-interval');
    const inputHiddenTimeInterval = elem.querySelector('.bookingTimeInterval');
    if (inputHiddenDay.value != '') {
        blockDay.style.display = 'block';
    }
    if (inputHiddenTimeInterval.value != '') {
        blockTimeInterval.style.display = 'block';
    }
});

let form_add_img = document.getElementById('form-add-img');
form_add_img.addEventListener('submit', (e) => {
    e.preventDefault();
    const inputFile = document.getElementById('input__file');
    let file = document.getElementById('input__file').files[0];
    console.log('1' + file.type);
    if (file.type != "image/jpeg") {
        console.log('не катит');
        form_add_img.querySelector('.img-error').innerHTML = 'Тип файла не подходит';
        inputFile.addEventListener('change', () => {
            file = document.getElementById('input__file').files[0];
            if (file.type == "image/jpeg") {
                form_add_img.querySelector('.img-error').innerHTML = '';
            } else {
                form_add_img.querySelector('.img-error').innerHTML = 'Тип файла не подходит';
            }
            console.log('2' + file.type);
        });
    } else {
        form_add_img.submit();
    }
});