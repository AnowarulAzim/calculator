<?php
$x=$_GET["num1"];
$y=$_GET["num2"];
$opt=$_GET["operator"];
$sub=$_GET["submit"];
$result=0;

switch($opt){
    case "None":
        echo "Select a method";
        break;
    case "Add":
        $result= $x+$y;
        break;
    case "Subtract":
        $result=$x-$y;
        break;
    case "Multiply":
        $result=$x*$y;
       break;
     case "Divide":
        $result=$x/$y;
    break ;   

}

echo <<<_END
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Using CSS</title>
</head>
<body>




    <div class="container">
        <form  method="get">
            <p>x <input type="text" name="num1" placeholder=$x </p>
            <p>y <input type="text" name="num2" placeholder=$y></p>
            <p>
                <select >
                    <option>$opt</option>

                </select>
            </p>
            <p>
            <output>$result
            </p>
            
        </form>

        
    </div>
   
</body>
</html>
_END
?>