<?php 
    session_start();

    // if (isset($_SESSION['u_id'])) {
    //     $time_stamp = $_SESSION['u_time_stamp'];
    //     $session_length = (time() - $time_stamp) / 60;

    //     if ($session_length > 5) {
    //         session_unset();
    //         session_destroy();
    //     }
    // }
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login System</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
        <nav>
            <div class="main-wrapper">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <?php 
                        if (isset($_SESSION['u_id'])) {
                            echo '<li><a href="account.php">Account</a></li>';
                            echo '<li><a href="dataEntry.php">Data Entry</a></li>';
                           // echo '<p class="time-stamp">'.number_format($session_length, 2).'</p>';
                        }
                    ?>
                </ul>
                <div class="nav-login">
                    <?php 
                        if (isset($_SESSION['u_id'])) {
                            echo '<form action="includes/logout.inc.php" method="POST">
                                    <button type="submit" name="submit">Logout</button>
                                  </form>';
                        } else {
                            echo '<form action="includes/login.inc.php" method="POST">
                                    <input type="text" name="uid" placeholder="Username/e-mail">
                                    <input type="password" name="pwd" placeholder="password">
                                    <button type="submit" name="submit">Login</button>
                                </form>
                                <a href="signup.php">Sign Up</a>';
                        }
                    ?>
                </div>
            </div>
        </nav>
    </header>