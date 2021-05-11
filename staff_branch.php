<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>ろくまる農園</title>
</head>
<body>
    <?php

    if (isset($_POST['edit']) == true) {
        header('Location: staff_edit.php');
    }

    if (isset($_POST['delete']) == true) {
        header('Location: staff_delete.php');
    }
    
    ?>
</body>
</html>