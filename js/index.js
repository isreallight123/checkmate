
let currentPage = window.location.href;
currentPage = currentPage.slice(currentPage.lastIndexOf('/') + 1, currentPage.length - 4);

const hamburger = document.querySelector('#hamburger');

const aside = document.querySelector('#aside');

const closeBtn = document.querySelector('#close-btn');
const asideBackground = document.querySelector('div#aside-background');


/* select the menus */
const profile = document.querySelector('#profile');
const noticeBoard = document.querySelector('#notice-board');
const evaluationForm = document.querySelector('#evaluation-form');
const attendance = document.querySelector('#attendance');
const assignments = document.querySelector('#assignments');

/* select the menu contents */
const profileContent = document.querySelector('#profile-content');
const noticeBoardContent = document.querySelector('#notice-board-content');
const evaluationFormContent = document.querySelector('#evaluation-form-content');
const attendanceContent = document.querySelector('#attendance-content');
const assignmentsContent = document.querySelector('#assignments-content');

hamburger.addEventListener('click', () => {
    aside.className = 'open';
});

const closeAside = () => {
    aside.className = 'close';
}

closeBtn.addEventListener('click', closeAside);

asideBackground.addEventListener('click', closeAside);


/**
 * selects the menu content to display
*/
((e) => {
    /* remove active class from all the menu contents */
    // profileContent.classList.remove('active');
    // noticeBoardContent.classList.remove('active');
    // evaluationFormContent.classList.remove('active');
    // attendanceContent.classList.remove('active');
    // assignmentsContent.classList.remove('active');

    /* remove active class from all the menus */
    // profile.classList.remove('active');
    // noticeBoard.classList.remove('active');
    // evaluationForm.classList.remove('active');
    // attendance.classList.remove('active');
    // assignments.classList.remove('active');

    /* display the currently selected menu content */

    console.log(currentPage);
    switch(currentPage) {
        case 'profile' :
            profileContent.classList.add('active');
            profile.classList.add('active');
            break;
        case 'noticeboard' :
            noticeBoardContent.classList.add('active');
            noticeBoard.classList.add('active');
            break;
        case 'evaluation-form' :
            evaluationFormContent.classList.add('active');
            evaluationForm.classList.add('active');
            break;
        case 'attendance' :
            attendanceContent.classList.add('active');
            attendance.classList.add('active');
            break;
        case 'assignments' :
            assignmentsContent.classList.add('active');
            assignments.classList.add('active');
            break;
        default :
            console.log('error');
            break;
        
    }

    if(window.innerWidth < 560) {
        closeAside();
    }
})();


/* wire up the event listeners for the menu items */
profile.addEventListener('click', (e) => {

    selectMenu(e);
});

noticeBoard.addEventListener('click', (e) => {
    selectMenu(e);
});

evaluationForm.addEventListener('click', (e) => {
    selectMenu(e);
});

attendance.addEventListener('click', (e) => {
    selectMenu(e);
});

assignments.addEventListener('click', (e) => {
    selectMenu(e);
});