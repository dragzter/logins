<?php

include_once 'dbh.inc.php';

$query = "SELECT * FROM settings";
$result = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($result);

$f_size = $row['user_font_size'];
$bcg_color = $row['user_background_color'];
$f_color = $row['user_font_color'];

mysqli_close($conn);