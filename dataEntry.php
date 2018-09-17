<?php 
    include_once 'header.php';

    $_SESSION['u_id'] ?  : header("Location: index.php?login=error");
?>
    <section class="main-container">
        <div class="main-wrapper">
            <h2>Enter Some Data</h2>
            <form class="signup-form" action="" method="POST">
                <input type="text" name="first" placeholder="Firstname">
                <input type="text" name="last"  placeholder="Lastname">
                <input type="text" name="email" placeholder="E-Mail">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <button type="submit" name="submit">Save</button>
            </form>
        </div>
    </section>

<?php 
    include_once 'footer.php';
?>