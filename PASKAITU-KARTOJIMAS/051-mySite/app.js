

const randColor = _ => {
    return '#' + Math.floor(Math.random() * 16777215).toString(16).padStart(6, '0');
};


const button = document.querySelector('[data-top-color-button]');
const h2Tag = document.querySelector('[data-top-color]');

const changeColor = _ => {
    const newColor = randColor();
    button.style.backgroundColor = newColor;
    h2Tag.style.color = newColor;
};

if (button && h2Tag) {
    button.addEventListener('click', changeColor);
};

const topPhraseElement = document.querySelector('[data-top-phrase]');


const getRandomPhrase = _ => {
    fetch('./phrases/api-phrases.php')
        .then(res => res.json())
        .then(data => {
            topPhraseElement.textContent = data.phrase;
        })
        .catch(error => {
            console.error('Error fetching phrase:', error);
        });
};


if (topPhraseElement) {
    getRandomPhrase();
    setInterval(getRandomPhrase, 2000);
};

