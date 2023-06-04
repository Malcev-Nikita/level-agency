const menu = document.querySelector('.nav__burger_menu');
const close = document.querySelector('.nav__burger_menu_close');
const burger = document.querySelector('.nav__burger');
const burgerLi = document.querySelectorAll('.nav__burger_ul')

burger.addEventListener('click', () => {
    menu.classList.add('nav__burger_menu_active');
})

close.addEventListener('click', () => {
    menu.classList.remove('nav__burger_menu_active');
})

Array.from(burgerLi).forEach(element => {
    element.querySelectorAll('a').forEach(e => {
        e.addEventListener('click', () => {
            menu.classList.remove('nav__burger_menu_active');
        })
    })
});