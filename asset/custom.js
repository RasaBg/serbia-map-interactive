let isActive = false;
document.querySelector('.menu2').addEventListener('click', function() {
  if (isActive) {
    this.classList.remove('active');
    document.body.classList.remove('menu-open');
  } else {
    this.classList.add('active');
    document.body.classList.add('menu-open');
  }
  isActive = !isActive;
});


