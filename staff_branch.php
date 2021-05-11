<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>ろくまる農園</title>
</head>
<body>
    <?php

    if (isset($_POST['edit']) == true) {
        print '修正が押された';
    }

    if (isset($_POST['delete']) == true) {
        print '削除が押された';
    }
    ?>
</body>
</html>