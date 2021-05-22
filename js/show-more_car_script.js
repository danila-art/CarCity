// exterior-img-animate
let exteriorBlockCollection = document.querySelectorAll('.cars-more__exterior-car-img-block');
exteriorBlockCollection[0].dataset.active = 1;
exteriorBlockCollection.forEach((elem) => {
    elem.addEventListener('click', () => {
        if (elem.getAttribute('data-active') == 0) {
            const firstElemExterior = exteriorBlockCollection[0].innerHTML;
            exteriorBlockCollection[0].innerHTML = elem.innerHTML;
            elem.innerHTML = firstElemExterior;
        }
    });
})

//interior-img-animate
let interiorBlockCollection = document.querySelectorAll('.cars-more__interior-car-img-block');
interiorBlockCollection[0].dataset.active = 1;
interiorBlockCollection.forEach((elem) => {
    elem.addEventListener('click', () => {
        if (elem.getAttribute('data-active') == 0) {
            const firstElemInterior = interiorBlockCollection[0].innerHTML;
            interiorBlockCollection[0].innerHTML = elem.innerHTML;
            elem.innerHTML = firstElemInterior;
        }
    });
});