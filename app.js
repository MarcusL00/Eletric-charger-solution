const menu = document.querySelector('#mobileMenu')
const menuLinks = document.querySelector('.navbarMenu')

menu.addEventListener('click', function () {
    menu.classList.toggle('is-active');
    menuLinks.classList.toggle('active');
})

document.addEventListener('DOMContentLoaded', function () {
  const buttons = document.querySelectorAll('.toggle-button');

  buttons.forEach(button => {
    button.addEventListener('click', function () {
      buttons.forEach(btn => btn.classList.remove('active'));
      this.classList.add('active');
    });
  });
});