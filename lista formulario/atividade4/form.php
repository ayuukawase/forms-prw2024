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
         $data = $_POST['data'];
         if($data%4 ==0 && $data%100 !=0){
             echo $data." é um ano bissexto";
         }else if($data%400 ==0){
             echo $data." é um ano bissexto";
         }else{
             echo $data." não é um ano bissexto";
         }
    ?>
</body>
</html>