<!DOCTYPE html>
<html lang="en">
<head>
<title>Form Validation</title>
<style>
 body {
            font-family: Arial, sans-serif;
            background-color: yellow;
            margin: 0;
            padding: 0;
           
        }
   h1 {
            color: #333;
            text-align: center;
            padding: 2px ;

            color: black;
            margin: 0;
        }
  form {
            background: white;
            margin: 30px auto;
            width: 50%;
            padding: 20px;
            border-radius: 10px;

        }
 </style>
 </head>
<body>
    <h1><center>REGISTRATION FORM</center></h1>
    <form name="form" action="" method="POST">
        <b><label>FIRST NAME:</label></b>  
        <input type="text" id="fname" name="fname" required><br><br>
        
        <b><label>LAST NAME:</label></b>   
        <input type="text" id="lname" name="lname" required><br><br>
        
        <b><label>PHONE NO:</label></b>    
        <input type="text" placeholder="0000-0000-00" id="phone" name="phone" required><br><br>
        
        <b><label>EMAIL:</label></b>       
        <input type="email" id="email" name="email" required><br><br>
        
        <b><label>ADDRESS:</label></b>     
        <textarea cols="25" rows="3" id="address" name="address" required></textarea><br><br>
        
        <b><label>DATE OF BIRTH:</label></b> 
        <input type="date" name="date" id="date" required><br><br>
        
        <b><label>GENDER:</label></b>        
        <input type="radio" id="male" name="gender" value="male" required>MALE 
        <input type="radio" id="female" name="gender" value="female" required>FEMALE<br><br>
        
        <input type="submit" name="submit" value="Register">
        <input type="reset" value="Reset">
    </form>

    <?php
    if (isset($_POST['submit']))
     {
        $first =($_POST['fname']);
        $last = ($_POST['lname']);
        $number =($_POST['phone']);
        $email = ($_POST['email']);
        $address = ($_POST['address']);
        $gender = ($_POST['gender']);

        if (!preg_match("/^[a-zA-Z ]*$/", $first)) 
        {
            echo "<script>alert('Enter a valid first name!');</script>";
        } elseif (!preg_match("/^[a-zA-Z ]*$/", $last))
         {
            echo "<script>alert('Enter a valid last name!');</script>";
        } 
        elseif (!preg_match("/^[0-9]{10}$/", $number)) 
        {
            echo "<script>alert('Enter a valid 10-digit phone number!');</script>";
        } 
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {
            echo "<script>alert('Enter a valid email address!');</script>";
        }
         elseif (empty($address)) 
         {
            echo "<script>alert('Enter a valid address!');</script>";
        }
         elseif (empty($gender)) 
         {
            echo "<script>alert('Select a gender!');</script>";
        } 
        else 
        {
            echo "<script>alert('REGISTRATION SUCCESSFUL');</script>";
        }
    }
    ?>
</body>
</html>

