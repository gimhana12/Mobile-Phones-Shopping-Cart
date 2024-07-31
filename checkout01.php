<?php
    
     include_once 'ServerConnection.php';
     
    $Name = $_POST['firstname'];
    $Email=$_POST['email'];
    $CAddress=$_POST['address'];
    $city=$_POST['city'];
    $State=$_POST['state'];
    $zip=$_POST['zip'];
    $cardname=$_POST['cardname'];
    $cardnumber=$_POST['cardnumber'];
    $expmonth=$_POST['expmonth'];
    $expyear=$_POST['expyear'];
    $cvv=$_POST['cvv'];
    

   $sql ="INSERT INTO checkout(fullName,email,address,city,state,zip,name_of_card,credit_card_number,
   exp_month,exp_year,CVV)VALUES
   ('$Name','$Email','$CAddress','$city','$State','$zip','$cardname','$cardnumber',
   '$expmonth','$expyear','$cvv');";

   
   mysqli_query($connect,$sql);
   

   header("Location:index.php");


?>