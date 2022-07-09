<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Melbourne's finest Book Shop</title>
</head>
<body background="bg.jpg">
    
       <!-- <div class="nav-right">
        <nav class="navbar">
        <ul>
               <li class="logo"> BOOKhillSHOP </li>
            <li><a class="active" href="index.html">Home</a></li>
            <li><a href="products.html">Book Catalogue</a></li>
            <li><a href="About.html">Contact</a></li>
            <li><a href="desc.html">FAQ</a></li>
            <li> <a href="order.html"> Order page</a></li>
            <li> <input class="search" type="text" name="sq" placeholder="Search"></li>
            <li><input type="submit" value="Search"></li>
            <li> <a href="login.html">Login</a></li>
            <li> <a href="Registration.html">Sign Up</a></li>
        </ul>
        </nav>
    </div> -->

<br>
<br>   
<br>
<br>
<br>
<?php
extract($_GET);
// login php 

echo '<h1>RESULTS:</h1>';

$connect = mysqli_connect(/*URL*/'127.0.0.1',/*username*/ 'root',/*password*/ '') or die("Could not connect to the database". mysqli_connect_error($connect));

mysqli_select_db(/*session*/$connect,/*database name*/ 'bookhill') or die('Could not locate the database'.mysqli_error($connect));

$query = mysqli_query(/*session*/$connect,/*query*/ "select * from books where bookname like '%$sq%' or
     price like '%$sq%' or quantity like '%$sq%'") or die('SQL query for searching failed due to: ' . mysqli_error($connect));
    echo '<div><table>';
    while ($row = mysqli_fetch_assoc($query)) {

        echo '<tr><td>' . $row['bookname'] . '</td><td>' . $row['price'] . '</td><td>' . $row['quantity'] . '</td></tr>';}
echo '</table></div>';
mysqli_close($connect);
?>
      <footer>
        &copy; Arun Bhandari | All Rights Reserved
      </footer>
</body></html>