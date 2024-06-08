<?php
$conn = mysqli_connect('localhost', 'root', '', 'ShattablyDB');
if (!$conn) {
    die("Error Connecting to DataBase" . mysqli_connect_error());
}
// else
// {
//     echo 'good';
// }
