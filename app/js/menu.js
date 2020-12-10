export default function openMenu() {
  const header = document.querySelector('.header');
  const menuHamb = document.querySelector('[data-menu="button"]');
  const menu = document.querySelector('[data-menu="menu"]');

  if (!menuHamb || !menu) return null;

  menuHamb.addEventListener("click", e => {
    e.preventDefault();

    menu.classList.toggle("ativo");
    menuHamb.classList.toggle("ativo");
  });

  window.addEventListener('scroll', e => {
    if (window.scrollY > 60) {
      header.classList.add('scroll');
    } else {
      header.classList.remove('scroll');
    }
  });
}
