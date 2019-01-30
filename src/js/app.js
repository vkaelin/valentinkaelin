console.log('loaded8');
/* Back-to-top */
var backToTop = document.querySelector('.back-to-top');

window.addEventListener('scroll', function () {
  var scrollBarPosition = window.pageYOffset;
  if (scrollBarPosition > 500) {
    backToTop.classList.remove('hidden');
    backToTop.classList.add('flex');
  } else {
    backToTop.classList.add('hidden');
    backToTop.classList.remove('flex');
  }
});

backToTop.addEventListener('click', function () {
  document.documentElement.scrollIntoView({ behavior: "smooth", block: "start", inline: "nearest" });
});