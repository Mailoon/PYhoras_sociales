let contadorI = 0;
const sliders = document.querySelectorAll('.container-img');
let sliderSegun;

function verSlider(index) {
    sliders.forEach((slider, i) => {
        slider.style.display = (i == index) ? 'block' : 'none';
    });
};

function sigSlider() {
    contadorI = (contadorI + 1) % sliders.length;
    verSlider(contadorI);
};

function antSlider() {
    contadorI = (contadorI - 1 + sliders.length) % sliders.length;
    verSlider(contadorI)
}

function comienzoSlider() {
    sliderSegun = setInterval(sigSlider, 4000);
}

function reset() {
    clearInterval(sliderSegun);
    comienzoSlider();
}

document.querySelector('.next').addEventListener('click', () => {
    sigSlider();
    reset();
})

document.querySelector('.prev').addEventListener('click', () => {
    antSlider();
    reset();
})
document.addEventListener('DOMContentLoaded', () => {
    verSlider(contadorI);
    comienzoSlider();
})

document.getElementById('login-button').addEventListener('click', (e) =>{
    e.preventDefault();
    window.location.href = 'registro.php';
})