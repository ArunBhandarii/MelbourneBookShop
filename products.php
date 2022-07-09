<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <style>
td {
    padding: 20px;
    text-align: center;
}

        </style>
        <title>Book Zone</title>
    </head>
    <body>
        <nav class="navbar">
            <div class="nav-right">
                <ul>
                   <li class="logo"> BOOKhillSHOP </li>
                <li><a href="index.html">Home</a></li>
                <li><a class="active" href="products.php">Book Catalogue</a></li>
                <li><a href="About.html">Contact</a></li>
                <li><a href="desc.html">FAQ</a></li>
                <li> <a href="order.html"> Order page</a></li>
                <li> <input class="search" type="text" name="" placeholder="Search"></li>
                <li> <a href="login.html">Login</a></li>
            <li> <a href="Registration.html">Sign Up</a></li>
            </ul>
            </div>
    </nav>
    <br>
    <br> 
<?php

    $connect = mysqli_connect(/*URL*/"127.0.0.1",/*username*/ "root",/*password*/ "") or die("Could not connect to the database");
    
    //the two 'theadmin' here are username and password to login to phpmyadmin
    
    //echo 'Connected to the database <br>'
    
    //displaying all records
    
    mysqli_select_db($connect, 'bookhill') or die("Could not select database" . mysqli_error($connect));
    
    //echo 'Database selection successful <br>';
    
    $allbooks = mysqli_query($connect, "select * from books") or die("Could not display table" . mysqli_error($connect));
    
    
    
    //displaying data in a table
    
    echo '<table class="sidepads"> <form action="order.html">';
    
    while ($row = mysqli_fetch_assoc($allbooks)) {
    
        echo '<tr><td> <a href="' . $row['imageurl'] . '"><img src="' . $row['imageurl'] . '" alt="pictureofbook" width="200px"><td/><td>' . $row['bookname'] . $row['quantity'] . '<br><input type="submit" value="Price ' . $row['price'] . ' AUD"></td></tr>';
    
    }
    
    echo '</form></table>';
    
    mysqli_close($connect);
    
?>
        <footer>
            &copy; Arun Bhandari | All Rights Reserved
         </footer>
    </body>

</html>