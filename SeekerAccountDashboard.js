if(getCookie("username") == ""){
    window.location.replace('index.php');
}

logoutLink = document.getElementById('logoutLink');
logoutLink.addEventListener('click', function(){
    document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    document.cookie = "password=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    document.cookie = "accounttype=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    
    setTimeout(function(){window.location.replace('index.php');}, 30);
});

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