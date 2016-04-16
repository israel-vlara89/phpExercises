<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $number = array('juanita', 'israel', 'carlos');
    print_r($number);
    echo "<br>";
    
    //shorthand version 
    //$names = [];
    
    $names = array("first_name" => 'Edwin', 'last_name' => 'Roberts');
    print_r($names);
    echo '<br>';
    echo $names['first_name'] . " " . $names['last_name'];
    
    ?>
</body>
</html>