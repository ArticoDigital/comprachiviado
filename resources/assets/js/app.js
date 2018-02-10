const menuToggle = document.getElementById('menu-toggle'),
    NavAdmin = document.getElementById('Nav-admin');

menuToggle.addEventListener('click', () => {
    menuToggle.classList.toggle('open');
    NavAdmin.classList.toggle('open');
});
