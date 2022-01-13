<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><table align="left" border="1" cellpadding="3" cellspacing="0">
    <?php
    echo "<br>";
    echo "<h1>Q1</h1>";
    for ($i = 1; $i < 11; $i++) {
        if ($i === 10)
            echo $i;
        else
            echo $i . "-";
    }

    echo "<br>";
    echo "<h1>Q2</h1>";   
    $sum=0;
    for ($i = 0; $i <= 30; $i++) {
     
        $sum += $i;
    }
    echo $sum;

    echo "<br>";
    echo "<h1>Q3</h1>";  
    $string = 'A';
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 5 - $i; $j > 0; $j--)
            echo "A ";
        for ($k = 1; $k <= $i; $k++)
            echo "$string ";
        echo "<br>";
        $string++;
    }
    echo "<br>";
    echo "<h1>Q4</h1>"; 
  
    for($i = 0;$i<5;$i++){
        echo "<br>";
        for($j = 0;$j<5;$j++){
            if($j >= (5 - 1 - $i)){
                echo $i+1;
            } else {
                echo 1;
            }
        }
    };

    echo "<br>";
    echo "<h1>Q5</h1>"; 
    
    $num3 = 1;
for($i=1;$i<=5;$i++){
    for($j=1;$j<=5;$j++)
    if($i == $j){
        echo "$num3 ";
    }
    else{echo "0 ";}
    echo "<br>";
    $num3++;
}

echo "<br>";
echo "<h1>Q6</h1>"; 
$num =5;
$x =1;
for ($i=$num;$i>=1;$i--){
    $x =$x*$i;
}
echo $x;


echo "<br>";
echo "<h1>Q7</h1>"; 
$num1 = 0;
$num2 = 1;

for($i = 0; $i<9;$i++){
    echo $num1." ";
    $num3 = $num2 + $num1;
    $num1 = $num2;
    $num2 = $num3;

}
echo "<br>";
echo "<h1>Q8</h1>"; 

$text = "Orange Coding Academy";
$count=0;
     for($i=0;$i<strlen($text);$i++){
       if(strtolower($text[$i]) ==="c"){
           $count++;
       }
     }
     echo $count;


     echo "<br>";
     echo "<h1>Q9</h1>"; 
     
     
     for($i=1;$i<=6;$i++)
     {
     echo "<tr>";
     for ($j=1;$j<=5;$j++)
       {
       echo "<td>$i * $j = ".$i*$j."</td>";
       }
       echo "</tr>";
       }

       echo "<br>";
       echo "<h1>Q10</h1>"; 
       $numbers = range(1,50);
       foreach($numbers as $val){
           if($val % 3 ===0){
               echo "Fizz ";
           } elseif($val % 5 === 0){
               echo "Buzz ";
           } elseif($val % 3 ===0 && $val % 5 === 0){
               echo "FizzBuzz ";
           } else{
               echo $val." ";
           }
       }
    

       echo "<h1>11</h1>";
       echo "<br>";
       $num11 = 1;
       for ($i = 1; $i <= 5; $i++) {
           for ($j = 1; $j <= $i; $j++) {
               echo "$num11 ";
               $num11++;
           }
           echo "<br>";
       }
       echo "<h1>12</h1>";
       echo "<br>";
    
    
    
    
    
    
    
    
    
    
    ?>
    
</body>
</html>