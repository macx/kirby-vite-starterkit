import './main.css';

import kirbyLogoUrl from './assets/kirby.svg';

document.querySelector('#brand')!.innerHTML = kirbyLogoUrl;
document.querySelector(
  '#brand',
)!.innerHTML = `<img src="${kirbyLogoUrl}" alt="Kirby Logo" />`;
