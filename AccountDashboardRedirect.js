if (getCookie('username') == ''){
    window.location.replace('index.php');
}else if(getCookie('accounttype') == 'Helper'){
    window.location.replace('HelperAccountDashboard.php');
}else{
    window.location.replace('SeekerAccountDashboard.php');
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