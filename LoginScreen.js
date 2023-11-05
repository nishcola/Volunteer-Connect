window.onload = () => {
    var errorBox = document.getElementById('errorBox');
    if(getCookie('loginerror') == "true"){
        errorBox.style.display = "block";
        document.cookie = "loginerror=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    }else{
        errorBox.style.display = "none";
    }
};


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