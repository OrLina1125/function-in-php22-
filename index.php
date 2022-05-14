<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Loop 17</title>
</head>
<body>
    <?php
    
    function newCalc($x){
        $newnr = $x * 0.75;
        echo "Here is 75% of what you wrote: ".$newnr;
    }
    $x = 100;
    newCalc($x);
        echo "<br>";
    $a = 10;
    newCalc($a);
    
    ?>
</body>
</html>