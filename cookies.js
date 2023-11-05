if(getCookie("username") != ""){
  window.location.replace('AccountDashboard.php');
}

const cookieStorage = {
  getItem: (item) => {
    const cookies = document.cookie
      .split(";")
      .map((cookie) => cookie.split("="))
      .reduce((acc, [key, value]) => ({ ...acc, [key.trim()]: value }), {});
    return cookies[item];
  },
  setItem: (item, value) => {
    document.cookie = `${item}=${value};`;
  },
};

const storageType = cookieStorage;
const consentPropertyName = "dm_consent";
const shouldShowPopup = () => !storageType.getItem(consentPropertyName);
const saveToStorage = () => storageType.setItem(consentPropertyName, true);

window.onload = () => {
  const acceptFn = (event) => {
    saveToStorage(storageType);
    consentPopup.classList.add("hidden_cookie");
    checkCookies();
  };
  const consentPopup = document.getElementById("consentPopup");
  const acceptBtn = document.getElementById("acceptCookies");
  acceptBtn.addEventListener("click", acceptFn);

  if (shouldShowPopup(storageType)) {
    setTimeout(() => {
      consentPopup.classList.remove("hidden_cookie");
      darkeningDiv.classList.remove("hiddenDiv");
    }, 500);
  }
};

var cookies_enabled = storageType.getItem(consentPropertyName);
const signupLink = document.getElementById("signupLink");
const signupButton = document.getElementById("signupButton");
const darkeningDiv = document.getElementById("darkeningDiv");

checkCookies();

function checkCookies() {
  if (cookies_enabled) {
    //signupLink.classList.remove("disabled-link");
    //signupButton.classList.remove("disabled-link");
    //signupLink.classList.add("enabled-link");
    //signupButton.classList.add("enabled-link");
  } else {
    //signupLink.classList.add("disabled-link");
    //signupButton.classList.add("disabled-link");
    darkeningDiv.classList.add("hiddenDiv");
  }
}

function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}