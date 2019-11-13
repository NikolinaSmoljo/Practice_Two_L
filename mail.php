<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $errorEmpty = false;
    $errorEmail = false;

    if (empty($name) || (empty($email) || (empty($message)) {
        echo "<span class='form-error'>Popunite sva polja!</span>";
        $errorEmpty = true;
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<span class='form-error'>Upisite ispravan e-mail!</span>";
        $errorEmail = true;
    }
    else {
       echo "<span class='form-success'>Sva polja su ispravno popunjena!</span>";
    }
}
else {
    echo "<span class='form-error'>Doslo je do pogreske!</span>";
}
?>

<script>
    var errorEmpty = "<?php echo $errorEmpty; ?>";
    var errorEmail = "<?php echo $errorEmail; ?>";

    if (errorEmpty == true) {
        $("#mail-name, #mail-email, #mail-message").addClass("input-error");
    }
    if (errorEmail == true) {
        $("#mail-email").addClass("input-error");
    }
</script>