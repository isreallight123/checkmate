const hamburger = document.querySelector('#hamburger');

const aside = document.querySelector('#aside');

const closeBtn = document.querySelector('#close-btn');
const asideBackground = document.querySelector('div#aside-background');

const checkAction = document.querySelector('.check-action');

hamburger.addEventListener('click', () => {
    aside.className = 'open';
});

closeBtn.addEventListener('click', () => {
    aside.className = 'close';
});

asideBackground.addEventListener('click', () => {
    aside.className = 'close';
});

checkAction.addEventListener('click', () => {
    const attendanceStatus = document.querySelector(".check-action > i");
    if(attendanceStatus.className === "fas fa-question-circle"){
        attendanceStatus.className = "fas fa-check-circle";
    } else {
        attendanceStatus.className = "fas fa-question-circle";
    }
});