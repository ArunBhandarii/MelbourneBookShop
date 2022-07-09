



<?php

$connect = mysqli_connect(/*URL*/"127.0.0.1",/*username*/ "root",/*password*/ "") or die("Could not connect to the database");


//echo 'Connected to the database <br>'



mysqli_select_db($connect, 'bookhill') or die("Could not select database" . mysqli_error($connect));

//echo 'Database selection successful <br>';

$allbooks = mysqli_query($connect, "select * from books") or die("Could not display table" . mysqli_error($connect));



//This displays the data. 

echo '<table class="sidepads"> <form action="order.html">';

while ($row = mysqli_fetch_assoc($allbooks)) {

    echo '<tr><td> <a href="' . $row['imageurl'] . '"><img src="' . $row['imageurl'] . '" alt="pictureofbook" width="200px"><td/><td>' . $row['bookname'] . $row['quantity'] . '<br><input type="submit" value="Price ' . $row['price'] . ' AUD"></td></tr>';

}

echo '</form></table>';

mysqli_close($connect);

?>