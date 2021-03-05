<?php

include("con_db.php");

if (isset($_POST['register'])) {
   if (strlen($_POST['name']) >=1 && strlen($_POST['lastname']) >=1 && strlen($_POST['email']) >=1
   && strlen($_POST['address']) >=1 && strlen($_POST['phone']) >=1 && strlen($_POST['class']) >=1) {

       $name = trim($_POST['name']);
       $lastname = trim($_POST['lastname']); 
       $email = trim($_POST['email']); 
       $address = trim($_POST['address']); 
       $phone = trim($_POST['phone']); 
       $class = trim($_POST['class']); 

       $query = "INSERT INTO `Register_New_Students`(name, lastname, email, address, phone, class) VALUES ('$name','$lastname','$email','$address','$phone','$class')";

       $result = mysqli_query($conex,$query);
       if ($result) {
           ?>
                <h3 class="sent-form">We have received your inscription!</h3>
           <?php
       }else{
            ?>
                <h3 class="no-sent-form">Whoops, something went wrong!</h3>
            <?php
       }
   }else {
    ?>
        <h3 class="no-register">Please, complete the data...</h3>
    <?php
   }
}