// Блоки страниц
const count1 = document.getElementById('count1');
const count2 = document.getElementById('count2');
const count3 = document.getElementById('count3');
const count4 = document.getElementById('count4');
const procent = document.getElementById('procent');
const thisPage = document.getElementById('thisPage');
// Кнопки
const buttonCansel1 = document.getElementById('buttonCansel1');
const buttonComplete1 = document.getElementById('buttonComplete1');
const buttonCansel2 = document.getElementById('buttonCansel2');
const buttonComplete2 = document.getElementById('buttonComplete2');
const buttonCansel3 = document.getElementById('buttonCansel3');
const buttonComplete3 = document.getElementById('buttonComplete3');
const buttonCansel4 = document.getElementById('buttonCansel4');
const buttonComplete4 = document.getElementById('buttonComplete4');
buttonComplete1.addEventListener('click', () => {
    count1.style.display = 'none';
    count2.style.display = 'block';
    procent.innerHTML = '2/4 Шаг'
    thisPage.innerHTML = 'Пользовательсике данные';
});
buttonComplete2.addEventListener('click', () => {
    count2.style.display = 'none';
    count3.style.display = 'block';
    procent.innerHTML = '3/4 Шаг'
    thisPage.innerHTML = 'Выеберите дату аренды';
});

buttonCansel1.addEventListener('click', () => {
    window.location.href = '../';
});
buttonCansel2.addEventListener('click', () => {
    count1.style.display = 'block';
    count2.style.display = 'none';
    procent.innerHTML = '1/4 Шаг'
    thisPage.innerHTML = 'Выбранная машина';
});
buttonCansel3.addEventListener('click', () => {
    count2.style.display = 'block';
    count3.style.display = 'none';
    procent.innerHTML = '2/4 Шаг'
    thisPage.innerHTML = 'Пользовательсике данные';
});
buttonCansel4.addEventListener('click', () => {
    count3.style.display = 'block';
    count4.style.display = 'none';
    procent.innerHTML = '3/4 Шаг'
    thisPage.innerHTML = 'Выеберите дату аренды';
});

// booking count-3 script
const dateDay = document.getElementById('date-day');
const dateTimeStart = document.getElementById('date-time-start');
const dateTimeEnd = document.getElementById('date-time-end');
const day24 = document.getElementById('day-24');
const goHome = document.getElementById('go-home');
const money = document.getElementById('money');

const thisDate = new Date();
const thisDay = thisDate.getDate();
const thisMonth = thisDate.getMonth() + 1;
const thisYear = thisDate.getFullYear();
// price
const priceHour = parseInt(document.getElementById('priceHour').innerHTML);
const priceDay = parseInt(document.getElementById('priceDay').innerHTML);
const priceGoHome = parseInt(document.getElementById('priceGoHome').innerHTML);
// input type hidden
let totalSummMoney = 0;
let nextDay = '';
let result = '';
dateDay.addEventListener('change', () => {
    let errorArr = [];
    const arrDateDay = dateDay.value.split('-');

    if (parseInt(arrDateDay[0]) != parseInt(thisYear)) {
        document.querySelector('.error-date-day').innerHTML = 'Вы не можете забронировать на другой год';
        errorArr.push(false);
    } else {
        document.querySelector('.error-date-day').innerHTML = '';
    }
    if (parseInt(arrDateDay[1]) < parseInt(thisMonth)) {
        document.querySelector('.error-date-day').innerHTML = 'Вы не можете забронировать на прошлые месяца';
        errorArr.push(false);
    } else {
        document.querySelector('.error-date-day').innerHTML = '';
    }
    if (parseInt(arrDateDay[2]) <= parseInt(thisDay)) {
        document.querySelector('.error-date-day').innerHTML = 'Вы не можете забронировать на прошлые или этот же день';
        errorArr.push(false);
    } else {
        document.querySelector('.error-date-day').innerHTML = '';
    }
});
day24.addEventListener('change', () => {
    let errorArrDay24 = [];
    if (day24.checked) {
        if (dateDay.value == '') {
            document.querySelector('.error-date-day').innerHTML = 'Вы не выбрали дату';
            errorArrDay24.push(false);
            day24.checked = false;
        } else {
            document.querySelector('.error-date-day').innerHTML = '';
        }
        if (dateTimeStart.value == '') {
            document.querySelector('.error-date-time-start').innerHTML = 'Вы не выбрали время';
            errorArrDay24.push(false);
            day24.checked = false;
        } else {
            document.querySelector('.error-date-time-start').innerHTML = '';
        }
        if (dateDay.value != '' && dateTimeStart.value != '') {
            nextDay = (thisDate.getDate() + 1) + '.' + thisMonth + '.' + thisYear;
            const count3DayEndBlock = document.querySelector('.count-3__day-end');
            let dayEndH3 = document.getElementById('day-end');
            if (getComputedStyle(count3DayEndBlock).display == 'none') {
                count3DayEndBlock.style.display = 'block';
                dayEndH3.innerHTML = nextDay;
            }
            const dateTimeStartValue = dateTimeStart.value
            dateTimeEnd.value = dateTimeStartValue;
            if (goHome.checked) {
                money.innerHTML = 'Итоговая сумма: ' + (priceDay + priceGoHome) + ' руб.';
            } else {
                money.innerHTML = 'Итоговая сумма: ' + priceDay + ' руб.';
            }

        }
    } else {
        dateTimeEnd.value = '';
        nextDay = '';
        result = '';
        const count3DayEndBlock = document.querySelector('.count-3__day-end');
        let dayEndH3 = document.getElementById('day-end');
        if (getComputedStyle(count3DayEndBlock).display == 'block') {
            count3DayEndBlock.style.display = 'none';
            dayEndH3.innerHTML = nextDay;
        }
        if (goHome.checked) {
            totalSummMoney = priceGoHome;
            money.innerHTML = 'Итоговая сумма: ' + totalSummMoney + ' руб.';
        } else {
            money.innerHTML = 'Итоговая сумма: ' + ' руб.';
        }
    }
});

dateTimeEnd.addEventListener('change', () => {
    if (day24.checked) {
        day24.checked = false;
        money.innerHTML = 'Итоговая сумма: ' + ' руб.';
        nextDay = '';
        const count3DayEndBlock = document.querySelector('.count-3__day-end');
        let dayEndH3 = document.getElementById('day-end');
        if (getComputedStyle(count3DayEndBlock).display == 'block') {
            count3DayEndBlock.style.display = 'none';
            dayEndH3.innerHTML = nextDay;
        }
    }
    let errorArrTimeEnd = [];
    if (dateDay.value == '') {
        document.querySelector('.error-date-day').innerHTML = 'Вы не выбрали дату';
        errorArrTimeEnd.push(false);
    } else {
        document.querySelector('.error-date-day').innerHTML = '';
    }
    if (dateTimeStart.value == '') {
        document.querySelector('.error-date-time-start').innerHTML = 'Вы не выбрали время';
        errorArrTimeEnd.push(false);
    } else {
        document.querySelector('.error-date-time-start').innerHTML = '';
    }

    if (errorArrTimeEnd.length == 0) {
        let firstDate = dateTimeStart.value;
        let secondDate = dateTimeEnd.value;

        let getDate = (string) => new Date(0, 0, 0, string.split(':')[0], string.split(':')[1]); //получение даты из строки (подставляются часы и минуты
        let different = (getDate(secondDate) - getDate(firstDate));

        let hours = Math.floor((different % 86400000) / 3600000);
        let minutes = Math.round(((different % 86400000) % 3600000) / 60000);
        result = hours + ':' + minutes;
        let moneyMinute = priceHour / 60;
        let totalMinute = (hours * 60) + minutes;
        let totalMoney = Math.floor(moneyMinute * totalMinute);
        console.log(totalMinute);
        console.log(moneyMinute);
        console.log(totalMoney);
        if (goHome.checked) {
            totalSummMoney = totalMoney + priceGoHome;
            money.innerHTML = money.innerHTML = 'Итоговая сумма: ' + (totalMoney + priceGoHome) + ' руб.';
        } else {
            totalSummMoney = totalMoney;
            money.innerHTML = 'Итоговая сумма: ' + totalMoney + ' руб.';
        }

    }
});
goHome.addEventListener('change', () => {
    let errorArrGoHome = [];
    if (goHome.checked) {
        if (dateDay.value == '') {
            document.querySelector('.error-date-day').innerHTML = 'Вы не выбрали дату';
            errorArrGoHome.push(false);
            goHome.checked = false;
        } else {
            document.querySelector('.error-date-day').innerHTML = '';
        }
        if (dateTimeStart.value == '') {
            document.querySelector('.error-date-time-start').innerHTML = 'Вы не выбрали время';
            errorArrGoHome.push(false);
            goHome.checked = false;
        } else {
            document.querySelector('.error-date-time-start').innerHTML = '';
        }
        if (dateTimeEnd.value == '') {
            document.querySelector('.error-date-time-end').innerHTML = 'Вы не выбрали время';
            errorArrGoHome.push(false);
            goHome.checked = false;
        } else {
            document.querySelector('.error-date-time-end').innerHTML = '';
        }
        if (errorArrGoHome.length == 0) {
            if (day24.checked) {
                totalSummMoney = (priceDay + priceGoHome);
                money.innerHTML = 'Итоговая сумма: ' + (priceDay + priceGoHome) + ' руб.';
            } else {
                totalSummMoney = (totalSummMoney + priceGoHome);
                money.innerHTML = money.innerHTML = 'Итоговая сумма: ' + (totalSummMoney) + ' руб.';
            }
        }
    } else {
        if (day24.checked) {
            totalSummMoney = priceDay;
            money.innerHTML = 'Итоговая сумма: ' + (priceDay) + ' руб.';
        } else {
            totalSummMoney = (totalSummMoney - priceGoHome);
            money.innerHTML = money.innerHTML = 'Итоговая сумма: ' + (totalSummMoney) + ' руб.';
        }
    }
})

buttonComplete3.addEventListener('click', () => {
    if (dateDay.value != '' && dateTimeStart.value != '' && dateTimeEnd.value != '') {
        count3.style.display = 'none';
        count4.style.display = 'block';
        procent.innerHTML = '4/4 Шаг'
        thisPage.innerHTML = 'Готово';
        dateDay.value.split('-').reverse().join('-');
        // inputs hiddens start
        let input_hidden_day_start = document.getElementById('input_hidden_day_start');
        let input_hidden_day_end = document.getElementById('input_hidden_day_end');
        let input_hidden_time_start = document.getElementById('input_hidden_time_start');
        let input_hidden_time_interval = document.getElementById('input_hidden_time_interval');
        let input_hidden_time_end = document.getElementById('input_hidden_time_end');
        let input_hidden_total_summ_money = document.getElementById('input_hidden_total_summ_money');
        let input_hidden_day_24 = document.getElementById('input_hidden_day_24');
        let input_hidden_go_home = document.getElementById('input_hidden_go_home');
        //  inputs hiddens end
        // blocks-count-4
        const count4__daystart = document.querySelector('.count-4__day-start');
        const count4__dayend = document.querySelector('.count-4__day-end');
        const count4__timestart = document.querySelector('.count-4__time-start');
        const count4__timeinterval = document.querySelector('.count-4__time-interval');
        const count4__timeend = document.querySelector('.count-4__time-end');
        const count4__day24 = document.querySelector('.count-4__day-24');
        const count4__gohome = document.querySelector('.count-4__go-home');
        const count4__summtotalmoney = document.querySelector('.count-4__summ-total-money');
        // count-4-output <- сюда выводить данные каждого блока
        if (dateDay.value != '') {
            input_hidden_day_start.value = dateDay.value;
            count4__daystart.querySelector('.count-4-output').innerHTML = dateDay.value;
        }
        if (nextDay != '') {
            input_hidden_day_end.value = nextDay;
            count4__dayend.style.display = 'block';
            count4__dayend.querySelector('.count-4-output').innerHTML = nextDay;
        }
        if (dateTimeStart.value != '') {
            input_hidden_time_start.value = dateTimeStart.value;
            count4__timestart.querySelector('.count-4-output').innerHTML = dateTimeStart.value;
        }
        if (result != '') {
            input_hidden_time_interval.value = result;
            count4__timeinterval.style.display = 'block';
            count4__timeinterval.querySelector('.count-4-output').innerHTML = result;
        }
        if (dateTimeEnd.value != '') {
            input_hidden_time_end.value = dateTimeEnd.value;
            count4__timeend.querySelector('.count-4-output').innerHTML = dateTimeEnd.value;
        }
        if (day24.checked == true) {
            input_hidden_day_24.value = 'yes';
            count4__day24.querySelector('.count-4-output').innerHTML = 'yes';
        } else {
            input_hidden_day_24.value = 'no';
            count4__day24.querySelector('.count-4-output').innerHTML = 'no';
        }
        if (goHome.checked == true) {
            input_hidden_go_home.value = 'yes';
            count4__gohome.querySelector('.count-4-output').innerHTML = 'yes';
        } else {
            input_hidden_go_home.value = 'no';
            count4__gohome.querySelector('.count-4-output').innerHTML = 'no';
        }
        if (totalSummMoney != '') {
            input_hidden_total_summ_money.value = totalSummMoney;
            count4__summtotalmoney.querySelector('.count-4-output').innerHTML = totalSummMoney + 'руб.';
        }
    }
    buttonComplete4.addEventListener('click', () => {
        const formBooking = document.getElementById('form-booking');
        formBooking.submit();
    });
});
// dateDay.value.split('-').reverse().join('-');