<?php
    require_once "matice.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php  
echo "<h1>Matice $numberOfColumns x $numberOfLines</h1>";

if ($valueError == ""){
    
    echo "<table border=0>";
    $column = 0;
                              
    foreach ($arrayTwo as $key => $array) {
        echo "<tr>";
        foreach ($array as $number){
            $column++;
            if ($max == $number) {
                echo "<td><span id='maximum'> $number</span></td>";
            }
            elseif ($min == $number) {
                echo "<td><span id='minimum'> $number</span></td>";
            }
            else {
                echo "<td>$number</td>";   
            }                                     
        }
        if ($column == $numberOfColumns){
            echo "</tr>";
            $column = 1;
        }          
        }
        echo "</table>";
        echo "<div class='container'>";
        echo "<div> Maximální hodnota je: $max</div>";
        echo "<div> Minimální hodnota je: $min</div>";
        echo "</div>";   
    }
?>
</body>
</html>