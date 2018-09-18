<?php 
    include_once 'header.php';
    $_SESSION['u_id'] ?  : header("Location: index.php?login=notloggedin");
    include_once 'includes/call_settings.inc.php';

?>
    <section class="main-container">
        <div class="main-wrapper">
            <h2>Account</h2>

            <form class="account-form" action="includes/settings.inc.php" method="POST">
                
                <div class="settings-container">
                    <label for="myRange">Font Size <span><?php echo $f_size; ?></span></label>
                    <input name="font-size" oninput="settingsSet(this)" type="range" min="8" max="24" class="slider" id="myRange" value="<?php echo $f_size; ?>">
                        <br>
                    <label for="myColor">Background Color: <span><?php echo $bcg_color; ?></span></label>
                    <input name="background-color" oninput="settingsSet(this)" type="color" name="color" id="myColor" value="<?php echo $bcg_color; ?>">
                        <br>
                    <label for="myFontColor">Text Font Color: <span><?php echo $f_color; ?></span></label>
                    <input name="font-color" oninput="settingsSet(this)" type="color" name="color" id="myFontColor" value="<?php echo $f_color; ?>">

                    <input name="sid" type="hidden" value="theId">

                     <button type="submit" name="submit">Save Settings</button>
                </div>
            </form>
        </div>
    </section>

<?php 
    include_once 'footer.php';
?>