<?php
    require_once('../model/bookTableModel.php');
    require_once('../model/NotificationModel.php');
    session_start();
 
 
    function NameValidation($name) {
        for ($i = 0; $i < strlen($name); $i++) {
            $Char = $name[$i];
           
            if (!Rq_Letter($Char)) {
                return false;
            }
        }
        return true;
    }
   
    function Rq_Letter($char) {
        return (($char >= 'A' && $char <= 'Z') || ($char >= 'a' && $char <= 'z') || $char == ' ');
    }
 
    function PhoneNumberValidation($phone) {
        // Remove any non-digit characters
        $phone = preg_replace('/[^0-9]/', '', $phone);
        
        // Check if the number starts with +91 or 91
        if (strlen($phone) == 12 && substr($phone, 0, 2) == '91') {
            $phone = substr($phone, 2);
        }
        
        // Check if the number is 10 digits long
        if (strlen($phone) != 10) {
            return false;
        }
        
        // Check if the number starts with a valid Indian mobile prefix (6-9)
        $firstDigit = substr($phone, 0, 1);
        if (!in_array($firstDigit, ['6', '7', '8', '9'])) {
            return false;
        }
        
        return true;
    }
 
    $name = $_REQUEST['name'];
    $number = $_REQUEST['number'];
    $date = $_REQUEST['date'];
    $time = $_REQUEST['time'];
    $guests = $_REQUEST['guests'];
 
    if($name == "" || $number == "" || $date == "" || $time == "" || $guests == ""){
   
        echo "fill all the section!";
   
    }else {
 
        if (!NameValidation($name)) {
            echo "Invalid Name Use only letters!";
        }
        else {
            if(!PhoneNumberValidation($number)){
            echo "Invalid phone number must be 10 digit!";
            }
    else{
        $status = booktable($name, $number, $date, $time, $guests);
       
        if ($status){
            $_SESSION['flag'] = 'true';
            echo 'Table booked Successfully!';
            $notification ="Table booked Successfully!";
            notification($notification);

        }
    }
}
}
?>