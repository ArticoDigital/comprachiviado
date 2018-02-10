const menuToggle = document.getElementById('menu-toggle');

menuToggle.addEventListener('click', () => {
    console.log(this);
    menuToggle.classList.toggle('open')
});
