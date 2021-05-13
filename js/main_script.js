//Скрипт javaScript
// mainPage->advantageAnimation

function slideClick(element) {
    const advantageBlock1 = document.getElementById('advantageBlock1');
    const advantageBlock2 = document.getElementById('advantageBlock2');
    const advantageBlock3 = document.getElementById('advantageBlock3');
    const advantageBlock4 = document.getElementById('advantageBlock4');
    const advantageBlock5 = document.getElementById('advantageBlock5');

    const arrBlock = [advantageBlock1, advantageBlock2, advantageBlock3, advantageBlock4, advantageBlock5];
    if (element.dataset.active == 0) {
        arrBlock.forEach((search, index) => {
            if (search.dataset.active == 1) {
                search.dataset.active = 0;
                const position = element.classList[1];
                search.classList.add(position);
                search.classList.remove('advantages__active');
                console.log(position);
                element.dataset.active = 1;
                element.classList.remove(position);
                element.classList.add('advantages__active');
            }
        });
    }
}

const newModelBox1 = document.getElementById('newModelBox1');
const newModelBox2 = document.getElementById('newModelBox2');
const newModelBox3 = document.getElementById('newModelBox3');
// начальное положение блоков

newModelBox1.addEventListener('click', () => {
    newModelBox2.style.clipPath = "polygon(0% 0%, 60% 0%, 100% 100%, 45% 100%)";
    newModelBox3.style.clipPath = "polygon(0% 0%, 100% 0, 100% 100%, 64% 100%)";
    newModelBox1.style.width = 90 + '%';
    newModelBox2.style.width = 30 + '%';
    newModelBox2.style.left = 65 + '%';
    newModelBox3.style.width = 22 + '%';
    newModelBox1.dataset.active = 1;
});
newModelBox2.addEventListener('click', () => {
    newModelBox1.style.clipPath = "polygon(0% 0%, 70% 0%, 100% 100%, 0 100%)";
    newModelBox3.style.clipPath = "polygon(0% 0%, 100% 0, 100% 100%, 64% 100%)";
    newModelBox2.dataset.active = 1;
    newModelBox1.style.width = 25 + '%';
    newModelBox2.style.width = 90 + '%';
    newModelBox2.style.left = 10 + '%';
    newModelBox2.style.clipPath = "polygon(0% 0%, 90% 0%, 100% 100%, 15% 100%)";
    newModelBox3.style.width = 22 + '%';
    newModelBox2.dataset.active = 1;
});
newModelBox3.addEventListener('click', () => {
    newModelBox3.style.clipPath = "polygon(10% 0%, 100% 0, 100% 100%, 30% 100%)";
    newModelBox2.style.clipPath = "polygon(0% 0%, 47% 0%, 100% 100%, 35% 100%)";
    newModelBox1.style.clipPath = "polygon(0% 0%, 70% 0%, 100% 100%, 0 100%)";
    newModelBox1.style.width = 30 + '%';
    newModelBox2.style.left = 5 + '%';
    newModelBox2.style.width = 40 + '%';
    newModelBox3.style.width = 87 + '%';
    newModelBox3.dataset.active = 1;
});

