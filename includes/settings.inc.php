<?php 

if (isset($_POST['submit'])) {

    include_once 'dbh.inc.php';

    $font_size = mysqli_real_escape_string($conn, $_POST['font-size']);
    $background_color = mysqli_real_escape_string($conn, $_POST['background-color']);
    $font_color = mysqli_real_escape_string($conn, $_POST['font-color']);
    $set_id = mysqli_real_escape_string($conn, $_POST['sid']);


    $look_for_setting = "SELECT * FROM settings WHERE setting_uid='$set_id'";
    $settings_query = mysqli_query($conn, $look_for_setting);
    $result_row = mysqli_num_rows($settings_query);

    if ($result_row === 0) {
        
        $sql = "INSERT INTO settings 
        (user_background_color, user_font_color, user_font_size, setting_uid)
        VALUES ('$background_color', '$font_color', '$font_size', '$set_id');";
        mysqli_query($conn, $sql);
        header("Location: ../account.php?settings=set");

    } else {
        
        $sql = "UPDATE settings SET user_background_color = '$background_color', user_font_color = '$font_color', user_font_size = '$font_size', setting_uid = '$set_id';";
        mysqli_query($conn, $sql);
        header("Location: ../account.php?settings=updated");

    }
    

} else {
    header("Location: ../account.php?settings=nochanges");
    exit();
}