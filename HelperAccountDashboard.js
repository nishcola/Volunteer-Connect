logoutLink = document.getElementById('logoutLink');
logoutLink.addEventListener('click', function(){
    document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    document.cookie = "password=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    document.cookie = "accounttype=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/DisabilityMatchLocal;";
    
    setTimeout(function(){window.location.replace('index.php');}, 30);
});

