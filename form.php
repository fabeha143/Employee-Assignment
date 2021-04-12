<?php
if(isset($_POST['submit'])){  
    include 'db_connect.php';
    $fullname = $_POST['full_name'];
    $email = $_POST['email'];  
    $phone_number = $_POST['phonenumber'];
    $sql = "INSERT INTO `employee_details` (`full_name`, `email`, `phone_no`) VALUES ('$fullname ', '$email', '$phone_number')";    
    $result = mysqli_query($conn,$sql);
    header("Location:index.php");
    } 



?>





<html>
    <head>
        <title>Form</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form method="POST" class="search-form">
            <h1>Enter Your details</h1>
            <input type="text" placeholder="Full Name" name="full_name" required>
            <input type="text" placeholder="email" name="email" required>
            <input type="tel" placeholder="Phone Number" name="phonenumber" required>
            <input type="submit" name="submit" value="Submit Details">
        </form>
    </body>

</html>