

const randColor = _ => {
    return '#' + Math.floor(Math.random() * 16777215).toString(16).padEnd(6, '0');
};


const button = document.querySelector('[data-top-color-button]');
const h2Tag = document.querySelector('[data-top-color]');

const changeColor = _ => {
    h2Tag.style.color = randColor();
    button.style.backgroundColor = randColor();
};

if (button && h2Tag) {
    button.addEventListener('click', changeColor);
};