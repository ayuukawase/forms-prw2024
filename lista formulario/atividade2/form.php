<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $text = $_POST['text'];
        $textarea = $_POST['textarea'];
        $checkbox = $_POST['checkbox'];
        $radio = $_POST['radio'];
        $select = $_POST['select'];
        
        echo "<h3>$text</h3>";
        echo "<h3>$textarea</h3>";
        echo "<h3>$checkbox</h3>";
        echo "<h3>$radio</h3>";
        echo "<h3>$select</h3>";
    ?>
</body>
</html>