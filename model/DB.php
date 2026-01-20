<?php

    $dbhost = "localhost";
    $dbname = "test";
    $dbuser = "root";
    $dbpass = "ramesh@2005";

    function getConnection(){
        global $dbhost;
        global $dbname;
        global $dbpass;
        global $dbuser;

        return  $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    }
?>