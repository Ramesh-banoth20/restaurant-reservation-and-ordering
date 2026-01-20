function nameValidation(name) {
    for (let i = 0; i < name.length; i++) {
        const char = name[i];

        if (!rqLetter(char)) {
            return false;
        }
    }
    return true;
}

function rqLetter(char) {
    return (char >= 'A' && char <= 'Z') || (char >= 'a' && char <= 'z') || char === ' ';
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

function vldf(){
let name = document.getElementById('name').value;
let number = document.getElementById('number').value;
let date = document.getElementById('date').value;
let time = document.getElementById('time').value;
let guests = document.getElementById('guests').value;

if (name === "" || number === "" || date === "" || time === "" || guests === "") {
    document.getElementById('print').innerHTML="Fill all the sections!";
    return false;
} else if (!nameValidation(name)) {
        document.getElementById('print').innerHTML="Invalid Name. Use only letters!";
    } 
    else if (!phoneNumberValidation(number)) {
            document.getElementById('print').innerHTML="Invalid phone number. Must be 10 digits and start with 6, 7, 8, or 9!";
        } else {
           // const status = bookTable(name, number, date, time, guests);
            let xhttp = new XMLHttpRequest();
            xhttp.open('POST', '../Controller/ReservationSystemCheck.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.onreadystatechange = function(){
        
                if(this.readyState == 4 && this.status == 200){
        
                    document.getElementById('print').innerHTML = this.responseText;
                    console.log(this.responseText);
                }
            }
             let params = 'name=' + name + '&number=' + number + '&date=' + date + '&time=' + time + '&guests=' + guests;
        
            xhttp.send(params);

            }
}
