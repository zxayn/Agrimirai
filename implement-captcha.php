<?php
if (isset($_POST['pin'])) {
    session_start();
    if (md5($_POST['pin']) == $_SESSION['image_random_value']) {
        echo "<p>Terima kasih... Anda seorang manusia! </p>";
    } else {
        echo "<p>Maaf... Anda seorang manusia?</p>";
    }
} else {
    session_start();
    ?>
    <form name="form" method="post" action="">
        <img src="captcha.php?<?php echo time(); ?>" alt="security image" />
        <div>
            Input Text Datas: <input type="text" name="pin" />
        </div>
        <input type="submit" value="Submit" />
    </form>
    <?php
}
?>
