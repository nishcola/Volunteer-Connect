const cookieStorage = {
  getItem: (item) => {
      const cookies = document.cookie
          .split(';')
          .map(cookie => cookie.split('='))
          .reduce((acc, [key, value]) => ({ ...acc, [key.trim()]: value }), {});
      return cookies[item];
  },
  setItem: (item, value) => {
      document.cookie = `${item}=${value};`
  }
}

const storageType = cookieStorage;
const consentPropertyName = 'dm_consent';
const shouldShowPopup = () => !storageType.getItem(consentPropertyName);
const saveToStorage = () => storageType.setItem(consentPropertyName, true);

window.onload = () => {

  const acceptFn = event => {
      saveToStorage(storageType);
      consentPopup.classList.add('hidden_cookie');
  }
  const consentPopup = document.getElementById('consentPopup');
  const acceptBtn = document.getElementById('acceptCookies');
  acceptBtn.addEventListener('click', acceptFn);

  if (shouldShowPopup(storageType)) {
      setTimeout(() => {
          consentPopup.classList.remove('hidden_cookie');
      }, 2000);
  }

};