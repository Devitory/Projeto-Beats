const button = document.getElementById('read_button');

button?.addEventListener('click', function () {
  const card = document.querySelector('.card');

  card?.classList.toggle('active');

  if (card?.classList.contains('active')) button.textContent = 'Deslizar';
  button.textContent = 'Read more';
});
