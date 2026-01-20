function nameValidation(name) {
    for (let i = 0; i < name.length; i++) {
        let char = name[i];
 
        if (!rqLetter(char)) {
            return false;
        }
    }
    return true;
}
 
function rqLetter(char) {
    return (char >= 'A' && char <= 'Z') || (char >= 'a' && char <= 'z') || char === ' ';
}
 
function usernameValidation(username) {
    for (let i = 0; i < username.length; i++) {
        let char = username[i];
 
        if (!rqLetterNumber(char)) {
            return false;
        }
    }
    return true;
}
 
function rqLetterNumber(char) {
    return (char >= 'A' && char <= 'Z') || (char >= 'a' && char <= 'z') || !isNaN(char);
}
 
function emailValidation(email) {
    let countA = 0;
    let countD = 0;
 
    for (let i = 0; i < email.length; i++) {
        if (email[i] === '@') {
            countA++;
        } else if (email[i] === '.') {
            countD++;
        }
    }
 
    return (countA === 1 && countD >= 1);
}
 
function passwordValidation(password) {
    let specialCharacters = "!@#$%^&*(),.?\":{}|<>";
 
    return (password.length >= 6 && [...password].some(char => specialCharacters.includes(char)));
}
 
function phoneNumberValidation(phone) {
    // Remove any non-digit characters
    phone = phone.replace(/\D/g, '');
    
    // Check if the number starts with +91 or 91
    if (phone.length === 12 && phone.substring(0, 2) === '91') {
        phone = phone.substring(2);
    }
    
    // Check if the number is 10 digits long
    if (phone.length !== 10) {
        return false;
    }
    
    // Check if the number starts with a valid Indian mobile prefix (6-9)
    const firstDigit = phone[0];
    if (!['6', '7', '8', '9'].includes(firstDigit)) {
        return false;
    }
    
    return true;
}
function validationform(){
let firstname = document.getElementById('firstname').value;
let lastname = document.getElementById('lastname').value;
let username = document.getElementById('username').value;
let email = document.getElementById('email').value;
let password = document.getElementById('password').value;
let confirmPassword = document.getElementById('cpassword').value;
let gender = document.getElementById('gender').value;
let phone = document.getElementById('phone').value;
 
if (firstname === "" || lastname === "" || username === "" || email === "" || password === "" || gender === "" || phone === "") {
    document.getElementById('print').innerHTML = 'null value detected.';
    return false;
} else {
    if (!nameValidation(firstname)) {
        document.getElementById('print').innerHTML = 'Invalid firstname. Use only letters!';
        return false;
 
    } else {
        if (!nameValidation(lastname)) {
 
            document.getElementById('print').innerHTML = 'Invalid lastname. Use only letters!';
            return false;
 
        } else {
            if (!usernameValidation(username)) {
                document.getElementById( 'print').innerHTML = 'Invalid username. Use letters and numeric number!';
                return false;
            } else {
                if (!emailValidation(email)) {
                    document.getElementById('print').innerHTML = 'Invalid email. Use format example@gmail.com!';
                    return false;
                } else {
                    if (!passwordValidation(password)) {
                        document.getElementById('print').innerHTML = 'Invalid password. Use at least 6 characters and numeric number!';
                        return false;
                    } else {
                        if (password !== confirmPassword) {
                            document.getElementById('print').innerHTML = 'Password and confirm password do not match';
                            return false;
                        } else {
                            if (!phoneNumberValidation(phone)) {
                                document.getElementById('print').innerHTML = 'phone number error! Please enter';
                                return false;
                            } else {
                                return true;
                            }
                        }
                    }
                }
            }
        }
    }
}
}
function redirectToLoginPage() {
    window.location.href = '../view/Login.html';
}