<?php

session_start () ; 

$con = mysqli_connect('localhost','root','') ;

mysqli_select_db($con , 'register') ; 

$name = $_POST['username'] ;
$email = $_POST['email']; 
$pass  = $_POST['password'];



$s = " select * from signup where name = '$name'" ;

$result = mysqli_query ($con , $s) ; 
$num = mysqli_num_rows ($result); 


if ($num == 1) {

    echo" UserName Already Taken"; 
}
else {

    $reg = "insert into signup(username , email ,password) values ('$name' , '$email', '$pass')" ;
    mysqli_query($con, $reg ) ;
    echo "Registrition Successful" ; 
 
}



?>