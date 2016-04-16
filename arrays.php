<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
   <?php
    
    $numberList = array(265,3344,212,'5354',345,'<h1>Hello</h1>');
    
    //print_r($numberList);
    //returns Array ( [0] => 265 [1] => 3344 [2] => 212 [3] => 5354 [4] => 345 [5] =>
    $numberIndex = $numberList[5];
    echo $numberIndex;
    ?>
    
</body>
</html>