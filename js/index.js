const hamburger = document.querySelector('#hamburger');

const aside = document.querySelector('#aside');

const closeBtn = document.querySelector('#close-btn');
const asideBackground = document.querySelector('div#aside-background');

hamburger.addEventListener('click', () => {
    aside.className = 'open';
});

closeBtn.addEventListener('click', () => {
    aside.className = 'close';
});

asideBackground.addEventListener('click', () => {
    aside.className = 'close';
})
