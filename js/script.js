const toggleNavBtn = document.getElementById("toggleNav");
const mobileNavElem = document.getElementById("mobileNav");
const closeNavBtn = document.getElementById("closeNav");
const overlayElem = document.getElementById("overlay");
const gotChildBtns = document.querySelectorAll(".gotChildJs button");


toggleNavBtn.addEventListener('click', () => {
    mobileNavElem.classList.add('open');
});

closeNavBtn.addEventListener('click', () => {
    mobileNavElem.classList.remove('open');
});
overlayElem.addEventListener('click', () => {
    mobileNavElem.classList.remove('open');
});

gotChildBtns.forEach((elem) => {
    elem.addEventListener('click', (e) => {
        e.preventDefault();
        elem.parentElement.nextElementSibling.classList.toggle('open')
    });
});
