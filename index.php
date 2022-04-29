<?php
    //include our construct php file here
    include 'phpConstructor.php';
?>
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
        //instantiate an object of BankDetails class
        $account = new BankDetails(69867899, "John Travis", 25600);
    ?>
</body>
</html>