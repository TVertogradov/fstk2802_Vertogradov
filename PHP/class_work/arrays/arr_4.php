<?php
    $forms = [
        'name' => null, 'email' => null, 'massage' => null
    ];



    if(isset($_POST) && count($_POST) > 0){
        $forms = $_POST;
        die(print_r($forms, true));}
        else {
            echo '<pre>'.print_r($_GET, true).'</pre>';
    }
?>

<form method="post" action="arr_4.php" >
    <div>
        <label for="name">Имя</label>
        <input type="text" id="name" name="name[]" >
        <input type="text" id="name" name="name[test]" >
        <input type="text" id="name" name="name[]" >
        <input type="text" id="name" name="name[]" >
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?= $_POST['email'] ?>">
    </div>
    <div>
        <textarea placeholder="Введение сообщения" name="massage"><?= $_POST['name'] ?></textarea>
    </div>
    <div>
        <input type="submit" value="Отправить сообщение">
    </div>
</form>
