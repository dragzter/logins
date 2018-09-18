<?php 
    include_once 'header.php';

    $_SESSION['u_id'] ?  : header("Location: index.php?login=error");
?>
    <section class="main-container">
        <div class="main-wrapper">
            <h2>Account</h2>
            <form class="account-form" action="" method="POST">
                <p>Font Size</p>
                <div class="slidecontainer">
                    <input type="range" min="8" max="24" value="50" class="slider" id="myRange">
                    <input type="color" value="50" name="color" value="#222" id="myColor">
                </div>
            </form>
        </div>
    </section>

<?php 
    include_once 'footer.php';
?>