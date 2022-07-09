
<?php

extract($_POST);
print_r($_POST);
$connect = mysqli_connect(/*URL*/"127.0.0.1",/*username*/ "root",/*password*/ "") or die("Could not connect to the database".mysqli_connect_error($connect));
mysqli_select_db($connect, 'bookhill') or die("Could not select database" . mysqli_error($connect));
mysqli_query($connect, "insert into orders (fname,email,phone,postage,postcode,book,pay) values('$fname','$email','$phone','$postage','$postcode','$book','$pay' );") or die("Could not register" . mysqli_error($connect));

print ("<br> <br>");

print ("<h1> Your order is on its way. Receipt:</h1><br><br>");
echo "<table><tr><th>Name: </th><td>" . $fname . "</td></tr>";
echo "<tr><th>phone Details: </th><td>" . $email . ", " . $phone . "</td></tr>";

echo "<tr><th>Address: </th><td>" . $postcode . "</td></tr>";

echo "<tr><th>Order Details: </th><td>". $book . "paying by" . $pay . "</td></tr>";
echo "</table>";
mysqli_close($connect);
?>