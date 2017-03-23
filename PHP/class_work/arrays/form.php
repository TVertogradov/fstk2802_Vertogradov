<?php

session_start();
ir (isset($_POST['addCart'])) {
    $_SESSION['cart']=$_POST['addCart']
}

?>

<form method="post" action="form.php">
    <input type="text" name="addCart">
    <input type="submit" value="Созранить значение">
</form>
