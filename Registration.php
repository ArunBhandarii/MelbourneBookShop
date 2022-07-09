<!DOCTYPE html>
<html>
<head>
    <title>Register Page</title>
    <link rel="stylesheet" href="style.css">
    <style> 
    input[type=text], select, textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #Blue;
  padding: 10px;
}
    </style>
    </head>
<body>
    <nav class="navbar">
        <div class="nav-right">
            <ul>
               <li class="logo"> BOOKhillSHOP </li>
            <li><a  href="index.html">Home</a></li>
            <li><a href="products.html">Book Catalogue</a></li>
            <li><a href="About.html">Contact</a></li>
            <li><a href="desc.html">FAQ</a></li>
            <li> <a href="order.html"> Order page</a></li>
            <li> <input class="search" type="text" name="" placeholder="Search"></li>
            <li> <a href="login.html">Login</a></li>
            <li> <a class="active" href="Registration.html">Sign Up</a></li>
        </ul>
        </div>
</nav>
         
    <div class="search">
      
        <input class="srch" type="search" name="" placeholder="Type To text">
        <a href="#"> <button class="btn">Search</button></a>
    </div>
<br><br>
<br>
<br>
<br>

<div>
<?php
echo"<br> <br>";
extract($_POST);
print_r($_POST);

$connect = mysqli_connect(/*URL*/"127.0.0.1",/*username*/ "root",/*password*/ "") or die("Could not connect to the database");

mysqli_select_db(/*session*/$connect,/*database name*/ "bookhill") or die('Could not locate the database');

$result = mysqli_query($connect, "insert into users (fname,lname,email,pass,phone) values('$fname','$lname','$email','$pass','$phone');") or die("Could not register" . mysqli_error($connect));

echo $fname . ", Register vais vai!";

mysqli_close($connect);
?>
</div>
 <footer>
        &copy; Arun Bhandari | All Rights Reserved
      </footer>
</body>
</html>