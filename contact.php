<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav class="navbar">
    <div class="nav-right">
        <ul>
           <li class="logo"> BOOKhillSHOP </li>
        <li><a href="index.html">Home</a></li>
        <li><a href="products.php">Book Catalogue</a></li>
        <li><a class="active" href="About.html">Contact</a></li>
        <li><a href="desc.html">FAQ</a></li>
        <li> <a href="order.html"> Order page</a></li>
        <li> <input class="search" type="text" name="" placeholder="Search"></li>
        <li> <a href="login.html">Login</a></li>
            <li> <a href="Registration.html">Sign Up</a></li>
    </ul>
    </div>
    <br><br>

 <?php

extract($_POST);

$connect = mysqli_connect(/*URL*/"127.0.0.1",/*username*/ "root",/*password*/ "") or die("Could not connect to the database");


mysqli_select_db($connect, 'bookhill') or die("Could not select database" . mysqli_error($connect));

$result = mysqli_query($connect, "insert into contact (fname,lname,email,phone,state,message) values('$fname','$lname','$email','$phone','$state','$message');") or die("Could not register" . mysqli_error($connect));

echo "<br><br><div>";
echo "<h1>" . $fname . ", thanks for the message.</h1>";
echo "</div>";
mysqli_close($connect);

?>

<footer>
  &copy; Arun Bhandari | All Rights Reserved
</footer>
</body>
</html>