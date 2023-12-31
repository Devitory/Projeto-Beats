let intro = document.querySelector('.splash-screen');
let logo = document.querySelector('.logo-header');
let logoSpan = document.querySelectorAll('.logo');

window.addEventListener('DOMContentLoaded', () => {
  setTimeout(() => {
    logoSpan.forEach((span, idx) => {
      setTimeout(
        () => {
          span.classList.add('active');
        },
        (idx + 1) * 400,
      );
    });

    setTimeout(() => {
      logoSpan.forEach(span => {
        span.classList.remove('active');
        span.classList.add('fade');
      }, +1 * 50);
    }, 2000);

    setTimeout(() => {
      if (!intro) return;
      intro.style.top = '-100vh';
    }, 2300);
  });
});
