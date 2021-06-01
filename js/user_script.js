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
if (buttonAddPasport != null) {
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
}

if (buttonAddDriver != null) {
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
}


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
// add-img
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
// add-passport
let formAddPasport = document.getElementById('form-add-pasport');
formAddPasport.addEventListener('submit', (e) => {
    e.preventDefault();
    let arrErrorPassport = [];
    const inputPassport = formAddPasport.querySelectorAll('.input-add');
    inputPassport.forEach((elem) => {
        if (elem.value == '') {
            arrErrorPassport.push(false);
            elem.nextElementSibling.innerHTML = 'Поле пусто';
            elem.addEventListener('keydown', () => {
                elem.nextElementSibling.innerHTML = '';
            });
            elem.addEventListener('change', () => {
                elem.nextElementSibling.innerHTML = '';
            });
        }
    });
    if (arrErrorPassport.length != 0) {
        console.log('1' + arrErrorPassport.length);
        console.log(arrErrorPassport);
    } else {
        formAddPasport.submit();
        console.log('2' + arrErrorPassport.length);
    }
});

// add-driver
let formAddDriver = document.getElementById('form-add-driver');
formAddDriver.addEventListener('submit', (e) => {
    e.preventDefault();
    let arrErrorDriver = [];
    const inputDriver = formAddDriver.querySelectorAll('.input-add');
    inputDriver.forEach((elem) => {
        if (elem.value == '') {
            arrErrorDriver.push(false);
            elem.nextElementSibling.innerHTML = 'Поле пусто';
            elem.addEventListener('keydown', () => {
                elem.nextElementSibling.innerHTML = '';
            });
            elem.addEventListener('change', () => {
                elem.nextElementSibling.innerHTML = '';
            });
        }
    });
    if (arrErrorDriver.length != 0) {
        console.log(arrErrorDriver);
    } else {
        formAddDriver.submit();
        console.log(arrErrorDriver);
    }
});

// progress
let userProcent = document.getElementById('userProcent');
let userProcentLine = document.getElementById('userProcentLine');
const userActiveImgContainer = document.querySelector('.user-active-img-container');
const userPassportActive = document.querySelector('.user-passport-active');
const userDriverActive = document.querySelector('.user-driver-active');
if (userActiveImgContainer != null && userPassportActive != null && userDriverActive != null) {
    userProcent.innerHTML = '100%';
    userProcentLine.style.width = '100%';
    userProcentLine.style.backgroundColor = 'green';
} else if (userActiveImgContainer != null && userPassportActive != null) {
    userProcent.innerHTML = '75%';
    userProcentLine.style.width = '75%';
} else if (userActiveImgContainer != null && userDriverActive != null) {
    userProcent.innerHTML = '75%';
    userProcentLine.style.width = '75%';
} else if (userPassportActive != null && userDriverActive != null) {
    userProcent.innerHTML = '75%';
    userProcentLine.style.width = '75%';
} else if (userActiveImgContainer != null) {
    userProcent.innerHTML = '50%';
    userProcentLine.style.width = '50%';
} else if (userPassportActive != null) {
    userProcent.innerHTML = '50%';
    userProcentLine.style.width = '50%';
} else if (userDriverActive != null) {
    userProcent.innerHTML = '50%';
    userProcentLine.style.width = '50%';
}
