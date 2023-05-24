'use strict'
const tabLinks = document.querySelectorAll('.tablinks');
const tabContents = document.querySelectorAll('.tabcontent');

tabLinks.forEach((tablinks) => {
    tablinks.addEventListener("click", openTab);
});
console.log(tabLinks);

function openTab(evt){
    const btnTardet = evt.currentTarget;
    console.log(btnTardet);
    const day = btnTardet.getAttribute('data-day');
    console.log(day);
    
    tabLinks.forEach((e) => {
        e.classList.remove('tablinks-active');
    });
    tabContents.forEach((e) => {
        e.classList.remove('tabcontent-active');
    });

    

    document.querySelector(`#${day}`).classList.add("tabcontent-active");
    btnTardet.classList.add("tablinks-active");
}