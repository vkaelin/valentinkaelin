console.log('loaded');

/* Switch theme */
const html = document.documentElement;
const switchThemeContainer = document.querySelector('.switch-theme');
const switchThemeLight = document.querySelector('.switch-theme svg');

checkTheme();

switchThemeContainer.addEventListener('click', () => {
  localStorage['darkMode'] = localStorage['darkMode'] === 'true' ? 'false' : 'true';
  checkTheme();
});

function checkTheme() {
  localStorage['darkMode'] === 'true' ? applyTheme('dark') : applyTheme('light');
}

function applyTheme(state) {
  if (state === 'dark') {
    html.classList.add('mode-dark');
    switchThemeLight.classList.remove('light-on');
  } else {
    html.classList.remove('mode-dark');
    switchThemeLight.classList.add('light-on');
  }
}

/* Back-to-top */
const backToTop = document.querySelector('.back-to-top');
window.addEventListener('scroll', function () {
  const scrollBarPosition = window.pageYOffset;
  if (scrollBarPosition > 500) {
    changeElementStates(backToTop, 'opacity-100', 'opacity-0');
    changeElementStates(backToTop, 'cursor-pointer', 'cursor-default');
  } else {
    changeElementStates(backToTop, 'opacity-0', 'opacity-100');
    changeElementStates(backToTop, 'cursor-default', 'cursor-pointer');
  }
});

backToTop.addEventListener('click', function () {
  const scrollBarPosition = window.pageYOffset;
  if (scrollBarPosition > 500) {
    document.documentElement.scrollIntoView({ behavior: "smooth", block: "start", inline: "nearest" });
  }
});

function changeElementStates(e, toAdd, toRemove) {
  if (toAdd !== '') e.classList.add(toAdd);
  if (toRemove !== '') e.classList.remove(toRemove);
}


/* Discord Modal */
const openDiscord = document.querySelector('#openDiscord');
const closeDiscord = document.querySelector('#closeDiscord');
const modalDiscord = document.querySelector('.modal-discord');
const modalBackground = document.querySelector('.modal-background');

setTimeout(() => {
  changeElementStates(modalDiscord, 'flex', 'hidden');
}, 50);

openDiscord.addEventListener('click', () => {
  changeElementStates(modalBackground, 'block', 'hidden');
  modalDiscord.style.transform = 'translateY(0)';
});

closeDiscord.addEventListener('click', () => {
  closeDiscordModal();
});

modalDiscord.addEventListener('click', (e) => {
  if (e.target.classList.contains('modal-discord'))
    closeDiscordModal();
});

function closeDiscordModal() {
  changeElementStates(modalBackground, 'hidden', 'block');
  modalDiscord.style.transform = 'translateY(-100%)';
}