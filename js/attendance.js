const checkAction = document.querySelector('.check-action');

checkAction.addEventListener('click', () => {
    const attendanceStatus = document.querySelector(".check-action > i");
    if(attendanceStatus.className === "fas fa-question-circle"){
        attendanceStatus.className = "fas fa-check-circle";
    } else {
        attendanceStatus.className = "fas fa-question-circle";
    }
});
