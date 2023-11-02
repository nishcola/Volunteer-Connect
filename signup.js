errorBox.style.display = "none";
var signupButton = document.getElementById("signupButton");
signupButton.addEventListener("click", function(){
    console.log("Sign up button clicked");

    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    document.getElementById("password").value = "";

    if(username == "" || password == "")
    {
        console.log("returned");
        return;
    }

    var checkResults = checkParameters(username, password);
    if(!checkResults[0] || !checkResults[1] || !checkResults[2] || !checkResults[3] || !checkResults[4] || !checkResults[5] || !checkResults[6] || !checkResults[7] || !checkResults[8] || !checkResults[9]){
        //Provide an error statement detailing the missing parts, using the array returned by the function. 
        //Array return order: username taken, username length, password length, lowercase letter, uppercase letter, number, special char, forbidden character, username too long, password too long

        //temp debug stuff:
        if(!checkResults[0]){
            console.log("username taken");
            displayErrorMsg("username taken");
        }else if(!checkResults[1]){
            console.log("username too short");
            displayErrorMsg("username too short");
        }else if(!checkResults[2]){
            console.log("password too short");
            displayErrorMsg("password too short");
        }else if(!checkResults[3]){
            console.log("password does not contain lowercase letter");
            displayErrorMsg("password does not contain lowercase letter");
        }else if(!checkResults[4]){
            console.log("password does not contain uppercase letter");
            displayErrorMsg("password does not contain uppercase letter");
        }else if(!checkResults[5]){
            console.log("password does not contain number");
            displayErrorMsg("password does not contain number");
        }else if(!checkResults[6]){
            console.log("password does not contain special char");
            displayErrorMsg("password does not contain special char");
        }else if(!checkResults[7]){
            console.log("username or password contains a forbidden char");
            displayErrorMsg("username or password contains a forbidden char");
        }else if(!checkResults[8]){
            console.log("username too long");
            displayErrorMsg("username too long");
        }else{
            console.log("password too long");
            displayErrorMsg("password too long");
        }
        return;
    }

    window.location.replace("SignupComplete.php");

});





function checkParameters(username, password){
    var results = [];

    //Add a check confirming that the username is not already taken. Below is a filler for the time being. 
    results.push(true);

    if(username.length >= 8){
        results.push(true);
    }else{
        results.push(false);
    }

    if(password.length >= 8){
        results.push(true);
    }else{
        results.push(false);
    }

    if(checkForLowercase(password)){
        results.push(true);
    }else{
        results.push(false);
    }

    if(checkForUppercase(password)){
        results.push(true);
    }else{
        results.push(false);
    }

    if(checkForNumbers(password)){
        results.push(true);
    }else{
        results.push(false);
    }

    if(checkForSpecialCharacters(password)){
        results.push(true);
    }else{
        results.push(false);
    }

    if(!checkForForbiddenCharacters(username) && !checkForForbiddenCharacters(password)){
        results.push(true);
    }else{
        results.push(false);
    }
    
    if(username.length <= 16){
        results.push(true);
    }else{
        results.push(false);
    }

    if(password.length <= 16){
        results.push(true);
    }else{
        results.push(false);
    }
    
    return results;
}

function checkForLowercase(password){
    const lowercaseLetters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    
    var lowercaseFound = false;
    var i = 0;
    var j = 0;
    while(!lowercaseFound && i<password.length){
        while(!lowercaseFound && j<lowercaseLetters.length){
            if(password[i] == lowercaseLetters[j])
            {
                lowercaseFound = true;
            }
            j+=1;
        }
        i+=1;
        j=0;
    }

    if(lowercaseFound){
        return true;
    }else{
        return false;
    }
}

function checkForUppercase(password){
    const uppercaseLetters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
    
    var uppercaseFound = false;
    var i = 0;
    var j = 0;
    while(!uppercaseFound && i<password.length){
        while(!uppercaseFound && j<uppercaseLetters.length){
            if(password[i] == uppercaseLetters[j])
            {
                uppercaseFound = true;
            }
            j+=1;
        }
        i+=1;
        j=0;
    }

    if(uppercaseFound){
        return true;
    }else{
        return false;
    }
}

function checkForNumbers(password){
    const numbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    
    var numberFound = false;
    var i = 0;
    var j = 0;
    while(!numberFound && i<password.length){
        while(!numberFound && j<numbers.length){
            if(password[i] == numbers[j])
            {
                numberFound = true;
            }
            j+=1;
        }
        i+=1;
        j=0;
    }

    if(numberFound){
        return true;
    }else{
        return false;
    }
}

function checkForSpecialCharacters(password){
    const specialCharacters = ['~', '`', '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '=', '+', '[', ']', '{', '}', '|', ':', ';', '"', "'", ',', '.', '?', '/'];
    
    var specialCharacterFound = false;
    var i = 0;
    var j = 0;
    while(!specialCharacterFound && i<password.length){
        while(!specialCharacterFound && j<specialCharacters.length){
            if(password[i] == specialCharacters[j])
            {
                specialCharacterFound = true;
            }
            j+=1;
        }
        i+=1;
        j=0;
    }

    if(specialCharacterFound){
        return true;
    }else{
        return false;
    }
}

function checkForForbiddenCharacters(text){
    const forbiddenCharacters = [' '];
    
    var forbiddenCharacterFound = false;
    var i = 0;
    var j = 0;
    while(!forbiddenCharacterFound && i<text.length){
        while(!forbiddenCharacterFound && j<forbiddenCharacters.length){
            if(text[i] == forbiddenCharacters[j])
            {
                forbiddenCharacterFound = true;
            }
            j+=1;
        }
        i+=1;
        j=0;
    }

    if(forbiddenCharacterFound){
        return true;
    }else{
        return false;
    }
}

function displayErrorMsg(msg){
    var errorBox = document.getElementById("errorBox");
    var errorText = document.getElementById("errorText");

    if (errorBox.style.display === "none") {
        errorBox.style.display = "block";
    } else {
        errorBox.style.display = "none";
    }

    errorText.innerText = "Error: " + msg;
}