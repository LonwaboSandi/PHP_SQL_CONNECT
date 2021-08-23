<?php
    error_reporting(E_ALL); 
    ini_set("display_errors", "1"); 

    
    $mysql = mysqli_connect('localhost','root','','tutorial');
    
    
    if(!$mysql){
        echo "Error: Unable to connect to MySQL " .PHP_EOL; 
        echo "Debugging errno " . mysqli_connect_errno(); 
        exit(); 
    }
    else{
        echo "Success! able to connect to MySQL " .PHP_EOL; 
        echo "Connection Infomation: ". mysqli_get_host_info($mysql) . PHP_EOL; 
    }
    //Inserting data
    //$userTable = "INSERT INTO user (firstName,lastName,emailAddress,pass) VALUES ('Sinazo','Sandi','L.SandiSites@gmail.com','23jf')"; 

    //update records 
    $userTable = "UPDATE user SET firstname='robert',pass='122345' WHERE emailAddress='L.SandiSites@gmail.com'";
    

    if(mysqli_query($mysql,$userTable)) {
        echo "Errors: " . $mysql -> connect_error; 
    } 
    else{
        echo "Success! Record successfully inserted! "; 
    }
    
    
    mysqli_query( $mysql,$userTable);
    mysqli_close($mysql); 
?>