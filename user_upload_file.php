<?php

if(!empty($_FILES)){
    if(move_uploaded_file($_FILES['userfile']['tmp_name'],"./files/{$_FILES['file']['name']}")){
        echo 'Success upload';
    }
}

?>

<form enctype="multipart/form-data" action="index.php" method="POST">
    Отправить этот файл: <input name="userfile" type="file" />
    <input type="submit" value="Отправить файл" />
</form>