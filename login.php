<!DOCTYPE html>
<html>
<head>
    <title>Login page</title>
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
            <form action="search.php" method="get">
            <ul>
               <li class="logo"> BOOKhillSHOP </li>
            <li><a  href="index.html">Home</a></li>
            <li><a href="products.html">Book Catalogue</a></li>
            <li><a href="About.html">Contact</a></li>
            <li><a href="desc.html">FAQ</a></li>
            <li> <a href="order.html"> Order page</a></li>
            <li> <input class="search" type="text" name="" placeholder="Search"></li>
            <li> <a class="active" href="login.html">Login</a></li>
            <li> <a href="Registration.html">Sign Up</a></li>
        </ul>
    </form>
        </div>
</nav>
         
    <div class="search">
      
        <input class="srch" type="search" name="" placeholder="Type To text">
        <a href="#"> <button class="btn">Search</button></a>
    </div>
<?php

extract($_POST);
// login php 

$connect = mysqli_connect(/*URL*/"127.0.0.1",/*username*/ "root",/*password*/ "") or die("Could not connect to the database");

mysqli_select_db(/*session*/$connect,/*database name*/ "bookhill") or die('Could not locate the database');

$query = mysqli_query(/*session*/$connect,/*query*/ "select email from users where email='" . $email . "' and pass='" . $pass . "'") or die('SQL query to search for email execution failed due to: ' . mysqli_error($connect));


if (mysqli_num_rows($query)) {

    echo 'Welcome ' . $email;

} else {

    echo 'User Credentials Invalid';

}

mysqli_close($connect);
?>

<footer>
&copy; Arun Bhandari | All Rights Reserved
</footer>
</body></html>